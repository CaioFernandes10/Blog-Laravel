{{ $slot }}
{{ $classe }}
{{ $rota }}

<form action="{{ route('site.contato') }}" method="POST">

    <h1>{{ $classe }}</h1>
    @csrf
    {{-- metodo old faz com que o valor do campo persista, mesmo se for preenchido errado --}}
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    {{-- pega apenas a mensagem de erro do nome --}}

    @if ($errors->has('nome'))
    <div style="color: red">{{$errors->first('nome')}} </div>
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    {{($errors->has('nome')) ? $errors->first('telefone') : ''}}
    <br>
    <input name="email" type="text" value="{{ old('email') }}" placeholder="E-mail" class="{{ $classe }}">
    <br>
    {{-- {{print_r($motivo_contato)}} --}}


    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contato as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}"
                {{ old('motivo_contato') == $motivo_contato->id ? 'selected' : '' }}>
                {{ $motivo_contato->motivo_contato }} </option>
        @endforeach
    </select>



    <br>
    <textarea name="mensagem" class="{{ $classe }}"> {{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }} 

    </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
@if ($errors->any())
    <div style="position:absolute;top:0px;left:0px;width:100%;background:red">



        @foreach ($errors->all() as $erro)
        {{($erro)}}
        @endforeach

    </div>
@endif

{{-- <select name="motivo_contato" class="{{$classe}}" >
        <option value="">Qual o motivo do contato?</option>
        <option value="1"       >Dúvida</option>
        <option value="2" {{old('motivo_contato')$y== 2 ? 'selected' : ''}}  >Elogio</option>
        <option value="3" {{old('motivo_contato') == 3 ? 'selected' : ''}} >Reclamação</option>
    </sel ""ect> --}}
