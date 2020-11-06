<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class HomeController extends Controller
{
    //
    public function index(){
        
        $pages = Page::get();

        $pageDetail = Page::where('id', 1)->first();
        
        return view('website.home', ['pages' => $pages, 'pageDetail' => $pageDetail]);

    }

    public function page($id){

        $pages = Page::get();

        $pageDetail = Page::where('id', $id)->first();
        
        return view('website.home', ['pages' => $pages, 'pageDetail' => $pageDetail]);

    }
}
