@extends('template.template')
    @section('title', 'Cadastrar Ano')
    @section('content')

  <form class="form-horizontal" action = "storeTurmaPost" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

    @if(count($errors)>0)
     @foreach ($errors->all() as $e)
      <p class="alert alert-danger">{{$e}}</p>
     @endforeach
    @endif

    <label for="">Ano</label>
        <select  name="ano"required="required" autofocus="autofocus" class="form-control">
      @foreach($ano as $a)
      <option value="{{$a->ano}}">{{$a->anoex}}</option>
      @endforeach
    </select>

    <label for="">Nome da turma</label>
    <input type="text" name="nome_turma"required="required" autofocus="autofocus" class="form-control" >
    <label for="">Professora</label>
    <input type="text" name="professora"required="required" autofocus="autofocus" class="form-control">



    <div class="col-sm-offset-2 col-sm-10">
      <input type = "submit" class="btn btn-default" value = "Cadastrar" />
    </div>

  </form>

@endsection
