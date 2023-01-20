
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>

        body{
            background-color: #7c7777
        }

    </style>
</head>
<body>
    <h1>
        Fornecedor

    </h1>

   Fornecedor: {{$fornecedores[1]['nome']}}
    <br>
    status: {{$fornecedores[1]['status']}} 
    <br>
    @isset($fornecedores[1]['cnpj'])
        status: {{$fornecedores[1]['cnpj']}}   
    @endisset
    


    status: {{$fornecedores[1]['cnpj'] ?? 'dado nao foi preenchido'}} 
   


   @if(count($fornecedores) > 10)

        <h3>existem mais de 10 fornecedores cadastrados</h3>
   @elseif(count($fornecedores) < 10)
   
        <h3>existem menos que 10 fornecedores cadastrados</h3>

   @endif
  
    @php
     
     echo 1 > 2 ?  "verdadeiro" :  "false" ;
    @endphp
    <br>

  
        
   {{-- @foreach ($fornecedores as $for => $item)
       
   indices: {{$for}}
   <br> 
   nome: {{$item['nome']}}
   <br>
   status: {{$item['status']}}
   <br>
   cnpj: {{$item['cnpj']}}
   <br>   
   status: {{$item['DDD']}}
   <br>   
   status: {{$item['telefone']}}          
   <br>
    Rua: {{$item['endereco']['rua']}}
    <br>
    Cep: {{$item['endereco']['cep']}}
    <br>
    Bairro: {{$item['endereco']['bairro']}}
    
    <hr>
   @endforeach --}}
    


   @forelse ($fornecedores as $for => $item)
       

   interacao atual : {{$loop->count}}
   @dd($loop)
   indices: {{$for}}
   <br> 
   nome: {{$item['nome']}}
   <br>
   status: {{$item['status']}}
   <br>
   cnpj: {{$item['cnpj']}}
   <br>   
   status: {{$item['DDD']}}
   <br>   
   status: {{$item['telefone']}}          
   <br>
    Rua: {{$item['endereco']['rua']}}
    <br>
    Cep: {{$item['endereco']['cep']}}
    <br>
    Bairro: {{$item['endereco']['bairro']}}
    <br>
    @if ($loop->first)
        primeira interacao
    @endif
    <br>
    @if ($loop->last)
    primeira interacao
@endif

<hr>
   @empty
   {{-- se nao existerem fornecedores, ou seja o array tesstado estiver vazio, aqui no empty vc pode usar uma mensagem --}}
       nao existem fornecedores cadastrados
       
   @endforelse
   



</body>
</html>