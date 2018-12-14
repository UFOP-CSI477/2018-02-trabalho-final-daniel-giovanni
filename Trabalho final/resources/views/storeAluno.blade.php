


@extends('template.template')






<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @section('title', 'Cadastrar Aluno')
  </head>
  <body>
@section('content')
    <form class="form-horizontal" action = "storeAlunoPost" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
@if(count($errors)>0)
 @foreach ($errors->all() as $e)
  <p class="alert alert-danger">{{$e}}</p>
 @endforeach
@endif


<div class="form-group">
      <label for="formGroupExampleInput">Turma:</label>
      <select  name="cod_turma"required="required" autofocus="autofocus" class="form-control">
        @foreach($turma as $t)
        <option value="{{$t->cod_turma}}">{{$t->nome_turma}}</option>
        @endforeach
      </select>
    </div>
     <div class="form-group">
      <label for="formGroupExampleInput">Nome:</label>
      <input type="text" name="nome" required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Pai:</label>
      <input type="text" name="pai" required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Mãe:</label>
      <input type="text" name="mae" required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">sexo</label>
      <select  name="sexo"required="required" autofocus="autofocus" class="form-control">
      <option value="Masculino">Masculino</option>
      <option value="Feminino">Feminino</option>
      </select>
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Data de nascimento:</label>
      <input type="date" name="data_nasc"required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Telefone:</label>
      <input type="number" name="telefone" required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Naturalidade:</label>
      <input type="text" name="naturalidade" required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Bairro:</label>
      <input type="text" name="bairro"required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Rua:</label>
      <input type="text" name="rua" required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Número:</label>
      <input type="number" name="numero" required="required" autofocus="autofocus" class="form-control">
    </div>
<div class="form-group">
      <label for="formGroupExampleInput">Estado:</label>
      <input type="text" name="estado" required="required" autofocus="autofocus" class="form-control">
    </div>



    <div class="col-sm-offset-2 col-sm-10">
        <input type = "submit" class="btn btn-default" value = "Cadastrar" />
      </div>
    </form>
@endsection
  </body>
</html>
