<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WebsiteService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WebsiteController extends Controller
{
    protected $config, $base_url, $token;
    function __construct() {
        $this->base_url = config('app.API_BASE_URL');
        $this->token = config('app.API_TOKEN');
        $this->config = (new WebsiteService())->fetchConfig();
    }

    function home() {
        $config = $this->config;
        $products = Cache::remember('latest_product', now()->addMinutes(1), function () {
            return $this->fetchProduct();
        });

        $categories = Cache::remember('category', now()->addMinutes(1), function () {
            return $this->fetchCategory();
        });

        return view('pages.home', compact('products', 'categories', 'config'));
    }

    private function fetchProduct()
    {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'latest-product');
        return $response->json()['data']; 
    }

    private function fetchCategory()
    {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'category');
        return $response->json()['data']; 
    }

    function productDetails($slug) {
        $product = (new WebsiteService())->product($slug);
        return view('pages.product-details', compact('product'));
    }

    function productByCategory($slug) {
        $data = (new WebsiteService())->fetchCategoryProduct($slug);
        $products = $data['products'];
        $category = $data['category'];
        return view('pages.category', compact('products', 'category'));
    }

    function products() {
        return view('pages.products');
    }

    function checkout() {
        $response = Http::withHeaders(['token' => $this->token])
            ->get($this->base_url.'districts');
        $districts = $response->json()['data']['districts'];
        return view('pages.checkout', compact('districts'));
    }

    function order(Request $request) {
        return Http::withHeaders(['token' => $this->token])
            ->post($this->base_url.'order', $request->all());
    }
}
