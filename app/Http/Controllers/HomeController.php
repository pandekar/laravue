<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Special;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }

    //
    public function index(){
        
        $pages = Page::get();

        $pageDetail = Page::where('id', 1)->first();

        $specials = Special::get();
        
        return view('website.home', ['pages' => $pages, 'pageDetail' => $pageDetail, 'specials' => $specials]);

    }

    public function page($id){

        $pages = Page::get();

        $pageDetail = Page::where('id', $id)->first();

        $specials = Special::get();
        
        return view('website.home', ['pages' => $pages, 'pageDetail' => $pageDetail, 'specials' => $specials]);

    }

    public function specialEntry($id){

        $special = Special::where('id', $id)->first();

        return view('website.special-entry', ['special' => $special]);

    }
}
