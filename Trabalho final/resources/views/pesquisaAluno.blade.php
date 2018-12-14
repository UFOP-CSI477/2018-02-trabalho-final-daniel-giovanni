@extends('template.template')


@section('title', 'Pesquisa Aluno')
@section('content')
<h1>Pesquisa</h1>


<form class="form" method="get" action=" pesquisaAluno " id="pesquisanome">
  {{csrf_field()}}
  <div class="form-group">
<label >Nome:</label>
<input type="text" name="nome" autofocus="autofocus">
</div>
<button  class="btn btn-primary" id="pesquisan" >Pesquisar Nome Aluno</button>
</form>

<form class="form" method="get" action=" pesquisaTurma " >
  {{csrf_field()}}
  <div class="form-group">
<label >Turma:</label>
<select  name="cod_turma"required="required" autofocus="autofocus" class="form-control">
  @foreach($turma as $t)
  <option value="{{$t->cod_turma}}">{{$t->nome_turma}}</option>
  @endforeach
</select>
</div>
<button  class="btn btn-primary"  >Pesquisar  Alunos Turma</button>
</form>
@endsection
