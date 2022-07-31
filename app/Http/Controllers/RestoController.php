<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;

class RestoController extends Controller
{
    //
    function index()
    {
        return  view('home');
    }
    function home()
    {
        return  view('home');
    }

    function unstitched()
    {
        return  view('unstitched');
    }


    function newarrival()
    {
        return  view('newarrival');
    }


    function contact()
    {
        return  view('contact');
    }

    function checkout()
    {
        return  view('checkout');
    }

    public function submitCheckout(Request $request)
    {
        $checkout = new Checkout();
        $checkout->first_name = $request->first_name;
        $checkout->last_name = $request->last_name;
        $checkout->phone = $request->phone;
        $checkout->cnic = $request->cnic;
        $checkout->address = $request->address;
        $checkout->location = $request->location;
        $checkout->save();
        
        return redirect()->back()->with('message', 'Checkout Successfully.');
    }
}
