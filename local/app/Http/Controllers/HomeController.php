<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
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

}
