@extends('template.template')
@section('title', 'Alunos')
@section('content')



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

     @foreach ($alunoPesquisa as $a)
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
<a href="{{url('/pesquisa')}}" class="btn btn-outline-dark">Nova Pesquisa</a>



@endsection
