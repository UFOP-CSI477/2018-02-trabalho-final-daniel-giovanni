@extends('template.template')
    @section('title', 'Editar Aluno')

@section('content')

<h1>Editar Aluno</h1>



  <form method="post" action="{{ route('aluno.update', $aluno->cod_aluno) }}">

    @csrf
    @method('PATCH')
    @if(count($errors)>0)
     @foreach ($errors->all() as $e)
      <p class="alert alert-danger">{{$e}}</p>
     @endforeach
    @endif

    <div class="form-group">
          <label for="formGroupExampleInput">Turma:</label>
          <select  name="cod_turma"required="required" autofocus="autofocus" class="form-control">
            <option value="{{$turma->cod_turma}}">{{$turma->nome_turma}}</option>
            @foreach($turmac as $t)
            <option value="{{$t->cod_turma}}">{{$t->nome_turma}}</option>
            @endforeach
          </select>
        </div>
         <div class="form-group">
          <label for="formGroupExampleInput">Nome:</label>
          <input type="text" name="nome" required="required" autofocus="autofocus" class="form-control" value="{{$aluno->nome}}">
        </div>
    <div class="form-group">
          <label for="formGroupExampleInput">Pai:</label>
          <input type="text"  required="required" autofocus="autofocus" class="form-control" name="pai" value="{{$aluno->pai}}"></div>
    <div class="form-group">
          <label for="formGroupExampleInput">Mãe:</label>
          <input type="text" required="required" autofocus="autofocus" class="form-control" name="mae" value="{{$aluno->mae}}"></div>
    <div class="form-group">
          <label for="formGroupExampleInput">sexo</label>
          <select  name="sexo"required="required" autofocus="autofocus" class="form-control">
            <option value="{{$aluno->sexo}}">Masculino</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            </select>
        </div>
    <div class="form-group">
          <label for="formGroupExampleInput">Data de nascimento:</label>
          <input type="date" required="required" autofocus="autofocus" class="form-control" name="data_nasc" value="{{$aluno->data_nasc}}"></div>
    <div class="form-group">
          <label for="formGroupExampleInput">Telefone:</label>
          <input type="number" required="required" autofocus="autofocus" class="form-control" name="telefone" value="{{$aluno->telefone}}"></div>
    <div class="form-group">
          <label for="formGroupExampleInput">Naturalidade:</label>
          <input type="text" required="required" autofocus="autofocus" class="form-control" name="naturalidade" value="{{$aluno->naturalidade}}">  </div>
    <div class="form-group">
          <label for="formGroupExampleInput">Bairro:</label>
          <input type="text" required="required" autofocus="autofocus" class="form-control" name="bairro" value="{{$aluno->bairro}}"></div>
    <div class="form-group">
          <label for="formGroupExampleInput">Rua:</label>
          <input type="text" required="required" autofocus="autofocus" class="form-control" name="rua" value="{{$aluno->rua}}"></div>
    <div class="form-group">
          <label for="formGroupExampleInput">Número:</label>
          <input type="number" required="required" autofocus="autofocus" class="form-control" name="numero" value="{{$aluno->numero}}"></div>
    <div class="form-group">
          <label for="formGroupExampleInput">Estado:</label>
          <input type="text" required="required" autofocus="autofocus" class="form-control" name="estado" value="{{$aluno->estado}}">  </div>


        <input type="submit" required="required"  name="btnSalvar" value="Salvar">

  </form>
@endsection
