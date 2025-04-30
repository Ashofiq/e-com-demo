<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    private $customer , $orders;

    public function login()
    {
        return view('customer.login');
    }


    public function register()
    {
        return view('customer.register');
    }

    

    
    public function loginCheck(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $user = User::where('email', $request->email)
                    ->orWhere('phone', $request->email)
                    ->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect('/my-dashboard');
        }
    
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    
    


    // New Customer Registration
    public function newCustomer(Request $request)
    {


        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required', // Only required, not unique
                'password' => 'required|min:6|confirmed', // Ensure you have password_confirmation in your form
            ]);
    
            // If validation passes, dump the validated data
            // dd($validatedData);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);
            return redirect('/login');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, dump the validation errors
            dd($e->errors());
        }
       
   

       
    }

    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/');
    }

    // public function editCustomer( Request $request)
    // {
    //     //return  $request;
    //     $this->customer = Customer::updateCustomer($request);

    //     Session::put('customer_id',  $this->customer->id);
    //     Session::put('customer_name', $this->customer->name);

    //     return redirect('/my-dashboard')->with('message','Your Profile is Updated ');
    // }

    // public function showCustomerOrder($id)
    // {
    //     $this->orders = Order::where('customer_id', Session::get('customer_id'))
    //         ->orderBy('id','desc')
    //         ->get();
    //     $this->customer = Customer::where('id', Session::get('customer_id'))
    //         ->first();
    //     return view('website.customer.order',[
    //         'orders' => $this->orders,
    //         'order' => Order::find($id),
    //         'customer'=>$this->customer,

    //     ]);
    // }

    // public function showCustomerInvoice( string $id)
    // {
    //     return view('website.customer.invoice-show',[
    //         'order' => Order::find($id)
    //     ]);
    // }

//     public function showCustomerDownload( string $id)
//     {
// //        $pdf = PDF::loadHTML('<h1>Test</h1>'); // make pdf
//         $pdf = PDF::loadView('website.customer.invoice-download',[
//             'order' => Order::find($id)
//         ]); // make pdf
//         return $pdf->stream(); // show pdf
// //        $pdf = PDF::loadView('pdf.document', $data);
// //        return $pdf->stream('document.pdf');

//     }




    public function dashboard()
    {
        // $this->orders = Order::where('customer_id', Session::get('customer_id'))
        //                          ->orderBy('id','desc')
        //                          ->get();
        // $this->customer = Customer::where('id', Session::get('customer_id'))
        //     ->first();

        
        return view('customer.dashboard');

        // return view('website.customer.dashboard',[
        //     'orders' => $this->orders,
        //     'customer' => $this->customer,
        // ]);
    }
}
