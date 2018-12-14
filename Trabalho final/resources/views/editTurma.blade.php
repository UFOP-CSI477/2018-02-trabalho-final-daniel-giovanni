@extends('template.template')
    @section('title', 'Cadastrar Ano')
    @section('content')
<h1>Editar Turma</h1>

  <form method="post" action="{{ route('turma.update', $turma->cod_turma) }}">

    @csrf
    @method('PATCH')
    <label for="">Ano</label>
        <select  name="ano"required="required" autofocus="autofocus" class="form-control">
    <option value="{{$ano->ano}}">{{$ano->anoex}}</option>
      @foreach($anoc as $a)
      <option value="{{$a->ano}}">{{$a->anoex}}</option>
      @endforeach
    </select>

    <label for="">Nome da turma</label>
    <input type="text" name="nome_turma"required="required" value="{{ $turma->nome_turma }}" autofocus="autofocus" class="form-control" >
    <label for="">Professora</label>
    <input type="text" name="professora"required="required" value="{{ $turma->professora }}" autofocus="autofocus" class="form-control">



      <input type="submit" name="btnSalvar" value="Salvar">

  </form>
@endsection
