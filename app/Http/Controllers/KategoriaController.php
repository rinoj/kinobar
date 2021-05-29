<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkti;
use App\Models\Kategoria;
use Session;
use Str;

class KategoriaController extends Controller
{
    public function store(Request $request){
        $kategoria = new Kategoria;
        $kategoria->emri = $request->emri;
        $kategoria->pershkrimi = $request->pershkrimi;
        $kategoria->slug = Str::slug($request->emri, '-');
        $kategoria->save();
        Session::flash('success', 'Kategoria u shtua me sukses!');
        return redirect()->back();
    }
}
