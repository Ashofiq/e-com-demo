<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\WebsiteService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;

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

        $brands = Cache::remember('brand', now()->addMinutes(1), function () {
            return $this->fetchBrand();
        });

        $sliders = Cache::remember('slider', now()->addMinutes(1), function () {
            return $this->fetchSlider();
        });

        $blogs = Cache::remember('blogs', now()->addMinutes(1), function () {
            $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'blogs');
            return $response->json()['data']; 
        });
       
        return view('pages.home', compact('products', 'config', 'sliders','brands', 'blogs'));
    }

    private function fetchProduct()
    {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'latest-product');
        return $response->json()['data']; 
    }


    private function fetchBrand()
    {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'brand');
        return $response->json()['data']; 
    }

    private function fetchSlider()
    {
        $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'slider');
        return $response->json()['data']; 
    }

    public function fetchCategory()
    {   
        return Cache::remember('fetchCategory', now()->addMinutes(1), function () {
            $response = Http::withHeaders(['token' => $this->token])->get($this->base_url.'category');
            return $response->json()['data']; 
        });
    }

    function productDetails($slug) {
        $product = (new WebsiteService())->product($slug);
        return view('pages.product-details', compact('product'));
    }

    function productByCategory($slug) {
        $data = (new WebsiteService())->fetchCategoryProduct($slug);
        $products = $data['products'];
        $category = $data['category'];



        $data = $products; // assuming this is your full product list array
        $page = request()->get('page', 1);
        $perPage = 10;
        $offset = ($page - 1) * $perPage;

        $paginatedProducts = new LengthAwarePaginator(
            array_slice($data, $offset, $perPage),
            count($data),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );


        return view('pages.category', compact('paginatedProducts', 'category'));
    }


    function productByBrand($brandSlug) {
        $data = (new WebsiteService())->fetchBrandProduct($brandSlug);
        $products = $data['products'];
        $brand = $data['brand'];
        return view('pages.brand', compact('products', 'brand'));
    }


    function register() {
        return view('customer.register');
    }

    public function login()
    {
        return view('customer.login');
    }

    function loginCustomer(Request $request) {
        $request->validate([
          
           'phone' => 'required', 
           'password' => 'required|string', 
       ]);
    

       $response = Http::withHeaders(['token' => $this->token])
       ->post($this->base_url.'login', $request->all());
       $data = $response->json()['data']; 
       if ($data == 1) {
        session(['user_logged_in' => true]);
        return response()->json(['message' => 'Login successful']);
        } else {
            return response()->json(['message' => 'Incorrect phone number or password'], 401);
        }
    }
    
 
      
   
    
    function registerCustomer(Request $request) {
        $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|email',
           'phone' => 'required', 
           'password' => 'required|min:6',
       ]);

       $response = Http::withHeaders(['token' => $this->token])
       ->post($this->base_url.'register', $request->all());
       return $response->json()['data']; 
      
   }


   public function logout(Request $request)
   {
       $request->session()->flush(); 
       return redirect('/login');
   }
    function products() {
        return view('pages.products');
    }

    function brands() {
        $brands = Cache::remember('brand', now()->addMinutes(1), function () {
            return $this->fetchBrand();
        });
        return view('pages.brand-details',compact('brands'));
    }

    function checkout() {
        $response = Http::withHeaders(['token' => $this->token])
            ->get($this->base_url.'districts');
        $districts = $response->json()['data']['districts'];
        return view('pages.checkout', compact('districts'));
    }

    function order(Request $request) {
        $order = Http::withHeaders(['token' => $this->token])
            ->post($this->base_url.'order', $request->all())['data'];
        return redirect()->route('confirm', ['order'=> $order['order_no']]);
    }
    function confirm(Request $request) {
        return view('pages.confirm');
    }

    function contactUs(Request $request) {
        return view('pages.contact');
    }

    function trackOrder(Request $request) {
        $order = [];
        if ($request->order_no) {
            try {
                $order = Http::withHeaders(['token' => $this->token])
                ->get($this->base_url.'order/'.$request->order_no, $request->all())['data'];
                return view('pages.trackOrder', ['order' => $order]);

            } catch (\Throwable $th) {
                return $th->getMessage();
            }
           
        }
        return view('pages.trackOrder', ['order' => $order]);
    }

    function blogDetails($slug) {
        $blog = Http::withHeaders(['token' => $this->token])
        ->get($this->base_url.'blogs/'.$slug)['data'];
        return view('pages.blogDetails', compact('blog'));

    }
}
