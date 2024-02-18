<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World";
    function __construct(){

    }
    public function index(){
        $data = ['val_a' => 'Hello World'];
        $data['val_b'] = "Laravel";
        return view('myfolder.home' , $data);
    }


   

}
