<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;
use App\Models\SiteContato;


class ContatoController extends Controller
{





    function index(Request $request)
    {

        $motivo_contato = MotivoContato::all();

           // var_dump($motivo_contato);
        //$contato = new SiteContato();
        // metodo 1 de adicionar valores atraves dos inputs nob anco
        // $contato->nome = $request->input('nome');
        // $contato->email = $request->input('email');
        // $contato->telefone = $request->input('telefone');
        // $contato->mensagem = $request->input('mensagem');
        // $contato->motivo_contato = $request->input('motivo_contato');

        // $contato->save();

        //metodo 2 de adicionar os valores atraves dos inputs no banco
        //$contato->fill($request->all());
        //$contato->save();




        return view('paginas.contato', ['motivo_contato'=>$motivo_contato]);
    }

    function salvar(Request $request)
    {   
        //chamando o metodo fill ou create diretamente da classe
        $request->validate([

            'nome'=>'required ||min:3||max:40|| unique:site_contatos',
            'telefone'=>'required',
             'email'=>'email',
             'motivo_contatos_id'=>'required'   , 
             'mensagem'=>'required'
        
            ],
        
             [
                'nome.required' => 'O campo precisa ser preenchido',
                'nome.min' => 'o campo nome precisa ter no minimo 3 caracteres',
                'nome.max' => 'o campo nome precisa pode ter no maximo 43 caracteres',
                //uma mensagem generica para todos os campos que tem a validacao requirede como obrigatoria
                //o atribute e para pegar o nome do campo
                'required' => 'o campo:attribute deve ser preenchido',
                'email.email' => 'email informado nao e valido',
                

             ]
        );
        //validacao de input nome, o campo e obrigatorio, no minimo 3 caracteres e no maximo 40    
        $request->validate([
        'nome'=>'required | min:3 | max:40',

        ]);


        SiteContato::create($request->all());
        return redirect()->route('site.principal');


       
    }
}
