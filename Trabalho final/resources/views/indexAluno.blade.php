@extends('template.template')
@section('title', 'Alunos')
@section('content')

<form class="form" method="get" action=" pesquisaAluno " id="pesquisanome">
  {{csrf_field()}}
<label >Nome:</label>
<input type="text" name="nome">

<button  class="btn btn-primary" id="pesquisan" >Pesquisar Aluno</button>
</form>

<table class="table">
       <tr>
         <th>Nome</th>

           <th>Turma</th>

           <th>Ano</th>
           <th>Ciclo</th>
          <th>Data Nascimento</th>
           <th>Telefone</th>
           <th>Bairro</th>
                  </tr>

     @foreach ($aluno as $a)
     <tr>
       <td><a href="{{ route('aluno.show', $a->cod_aluno) }}">{{$a->nome}}</td>
         @foreach ($turma as $t)
         @if($t->cod_turma == $a->cod_turma)
       <td>{{$t->nome_turma}}</td>
       @foreach($ano as $y)
       @if($t->ano == $y->ano)
       <td>{{$y->anoex}}</td>
       <td>{{$y->ciclo}}</td>
       @endif
       @endforeach

       @endif

       @endforeach
       <td>{{$a->data_nasc}}</td>
       <td>{{$a->telefone}}</td>
       <td>{{$a->bairro}}</td>
     </tr>
     @endforeach

 </table>




@endsection
