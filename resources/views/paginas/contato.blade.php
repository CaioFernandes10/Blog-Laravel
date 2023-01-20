@extends('paginas.layouts.basico')



@section('titulo', 'paginas de contato')


@section('contato')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
               
                @component('paginas.layouts.componentes.forms',['classe'=>'borda-preta','rota'=>'site.contato','motivo_contato'=>$motivo_contato])
                    <p>nossa equipe blablablalba</p>
                    <p>nosso tempo medio de resposta e de 48h</p>
                    
                @endcomponent

            </div>

        </div>5
    </div>

    <h1 style="color:black"> informacoes de contatos enviadas:</h1>
    <ul>

        {{-- <li> Nome: {{ $clientes['nome'] }}</li>
        <li> telefone: {{ $clientes['telefone'] }}</li>
        <li> email: {{ $clientes['email'] }}</li>
        <li> Motivo do Contato {{ $clientes['motivo_contato'] }}</li>
        <li> Mensagem: {{ $clientes['mensagem'] }}</li> --}}

    </ul>
   


    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="img/facebook.png">
            <img src="img/linkedin.png">
            <img src="img/youtube.png">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="img/mapa.png">
        </div>
    </div>
@endsection
