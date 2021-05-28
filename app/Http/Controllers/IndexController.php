<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkti;
use App\Models\Kategoria;

class IndexController extends Controller
{
    public function index(){
        $kategorit = Kategoria::all();
        $produktet = Produkti::all();
        return view('index')->withKategorit($kategorit)->withProduktet('produktet');
    }
}
