<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function indexAbout(){
        return view('about');
    }

    public function indexAccount(){
        return view('account');
    }

    public function indexBlog(){
        return view('.blog');
    }

    public function indexCart(){
        return view('cart');
    }

    public function indexCheckout(){
        return view('checkout');
    }

    public function indexContact(){
        return view('contact');
    }

    public function indexError(){
        return view('error');
    }

    public function indexLogin(){
        return view('login');
    }

    public function indexOrder(){
        return view('order');
    }

    public function indexShop(){
        return view('shop');
    }

    public function indexSingleBlog(){
        return view('SingleBlog');
    }

    public function indexSingleProduct(){
        return view('SingleProduct');
    }

    public function indexWishlist(){
        return view('wishlist');
    }

}
