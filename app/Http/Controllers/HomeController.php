<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class HomeController extends Controller
{
    public function index()
    {

        $data = Food::all();
        $data2 = Chef::all();

        return view('home', compact('data','data2'));
    }

    public function redirects()
    {
       $data = Food::all();
       $data2 = Chef::all();

       $userType = Auth::user()->userType;
       if($userType=='1')
       {
           return view('admin\adminHome');
       }

       else
       {
           $user_id = Auth::id();
           $count = Cart::where('user_id', $user_id)->count();

           return view('home', compact('data','data2','count'));
       }
    }

    //===========cart=============

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user_id = Auth::id();

            $foodid = $id;

            $quantity = $request->quantity;


            $cart = new Cart;

            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;

            $cart->save();

            return redirect()->back();
        }

        else
        {
            return redirect('/login');
        }
    }

    public function showcart(Request $request,$id)
    {
        $count= Cart::where('user_id', $id)->count();

        return view('showcart', compact('count'));
    }


}
