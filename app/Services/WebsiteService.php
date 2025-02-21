<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class WebsiteService
{
    protected $config, $base_url, $token;
    function __construct() {
        $this->base_url = config('app.API_BASE_URL');
        $this->token = config('app.API_TOKEN');
        $this->config = Cache::remember('config', now()->addMinutes(1), function () {
            return $this->fetchConfig();
        });
    }

    function fetchConfig() {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'config');
        return (object) $response->json()['data']; 
    }

    function product($slug) {
        $product = Cache::remember("product-$slug", now()->addMinutes(1), function () use ($slug) {
            return $this->fetchProduct($slug);
        });
        return $product; 
    }

    function fetchProduct($slug) {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'product/'.$slug);
        return (object) $response->json()['data']; 
    }

    function fetchMenu()
    {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'menus');
        return $response->json()['data']; 
    }

    function fetchCategoryProduct($category_slug)
    {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'category-products/'.$category_slug);
        if ($response->json() != null) {
            return $response->json()['data']; 
        }
        return ['products' => [],'category'=> []];
    }
}
