<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkti;
use App\Models\Kategoria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homepage(){
        $kategorit = Kategoria::all();
        $produktet = Produkti::all();
        return view('index')->withKategorit($kategorit)->withProduktet('produktet');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kategorit = Kategoria::all();
        $produktet = Produkti::all();
        return view('home')->withKategorit($kategorit)->withProduktet($produktet);
    }
}
