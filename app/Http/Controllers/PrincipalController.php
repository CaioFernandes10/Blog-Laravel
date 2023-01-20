<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;



class PrincipalController extends Controller
{
    function index(){
        $motivo_contato = MotivoContato::all();

       // dd($motivo_contato);
        return view('paginas.principal',['motivo_contato'=>$motivo_contato]);
    }
}
