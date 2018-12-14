@extends('template.template')
    @section('title', 'Cadastrar Ano')
    @section('content')
  <form class="form-horizontal" action = "storeAnoPost" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
@if(count($errors)>0)
 @foreach ($errors->all() as $e)
  <p class="alert alert-danger">{{$e}}</p>
 @endforeach
@endif
    <label for="">Ano</label>
    <input type="number" name="ano"required="required" autofocus="autofocus" class="form-control">
    <label for="">Ano_Ex</label>
    <input type="text" name="anoex"required="required" autofocus="autofocus" class="form-control">
    <label for="">Ciclo</label>
    <input type="text" name="ciclo"required="required" autofocus="autofocus" class="form-control">
    <div class="col-sm-offset-2 col-sm-10">
      <input type = "submit" class="btn btn-default" value = "Cadastrar" />
    </div>

  </form>
@endsection
