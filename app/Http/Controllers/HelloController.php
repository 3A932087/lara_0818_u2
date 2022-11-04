<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name='everybody'){
        //<變數名稱>=['<view變數名稱>' => <變數名稱>(或<數值>或<字串>)]
        //將view hello.index中變數name的值，設定為function $name
        $data=['name'=>1234];
        return view('hello.index',$data);
    }
}
