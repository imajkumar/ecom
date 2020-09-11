<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use Cart;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');//
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Cart::add(455, 'Sample Item', 100.99, 2, array());
        // $cartTotalQuantity = Cart::getTotalQuantity();
        // print_r($cartTotalQuantity);
        // die;
     
       return $this->FrontEnd();

    }
    public function FrontEnd(){
        $theme = Theme::uses('default')->layout('layout');
        $data=["name"=>''];
        return $theme->scope('index', $data)->render();
    }

    public function dashboard(){
        $theme = Theme::uses('backend')->layout('layout');
        
        $data=["name"=>''];
        return $theme->scope('index', $data)->render();
    }

    

    public function showCustomerLoginForm(){
        //$theme = Theme::uses('backend')->layout('layout');
        
        return view('auth.customer_login');
    }

    

}
