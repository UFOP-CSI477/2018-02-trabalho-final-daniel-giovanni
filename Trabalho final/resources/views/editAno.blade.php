@extends('template.template')
    @section('title', 'Cadastrar Ano')
    @section('content')
<h1>Editar Ano</h1>

  <form method="post" action="{{ route('anos.update', $ano->ano) }}">

    @csrf
    @method('PATCH')
    <label for="">Ano</label>
    <input type="number" name="ano" required="required" autofocus="autofocus" class="form-control" value="{{ $ano->ano }}">
    <label for="">Ano_Ex</label>
    <input <input type="text" required="required" autofocus="autofocus" class="form-control" name="anoex" value="{{ $ano->anoex }}">
    <label for="">Ciclo</label>
    <input type="text" required="required" autofocus="autofocus" class="form-control" name="ciclo" value="{{ $ano->ciclo }}">

      <input type="submit" name="btnSalvar" value="Salvar">

  </form>
@endsection
