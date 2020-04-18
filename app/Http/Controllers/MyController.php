<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }
    public function getSanpham(){
    	return view('page.sanpham');
    }
    public function lienhe(){
    	return view('page.lienhe');
    }
    public function thanhtoan(){
    	return view('page.thanhtoan');
    }
    public function danhmuc(){
    	return view('page.danhmuc');
    }
    public function giohang(){
    	return view('page.giohang');
    }
}
