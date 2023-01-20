<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    function index($p1,$p2){
        // echo "rota teste " .$p1 + $p2;

        // return view('paginas.teste',['x'=>$p1,'y'=>$p2]); //array associativo
        // return view('paginas.teste',compact('p1','p2'));

        return view('paginas.teste')->with('p12',$p1);
    }
}
