<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkti;
use App\Models\Kategoria;
use Session;

class ProduktiController extends Controller
{
    public function store(Request $request){
        $this->validate($request, array(
            'emri' => 'required|string',
            'pershkrimi' => 'max:50',
            'qmimi' =>  'required',
            'kategoria_id'  =>  'required',
        ));
        $produkti = new Produkti;
        $produkti->emri = $request->emri;
        $produkti->pershkrimi = $request->pershkrimi;
        $produkti->qmimi = $request->qmimi;
        $produkti->kategoria_id = $request->kategoria_id;
        $produkti->save();

        Session::flash('success', 'Produkti u shtua me sukses!');
        return redirect()->back();
    }
}
