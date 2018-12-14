@extends('template.template')
@section('title', 'Turmas')
@section('content')


<table class="table">
       <tr>
           <th>Nome da Turma</th>
           <th>Professora</th>
           <th>Ano</th>
           <th>Ciclo</th>
       </tr>

     @foreach ($turma as $t)
     <tr>
       <td><a href="{{ route('turma.show', $t->cod_turma) }}">{{$t->nome_turma}}</td>
         <td>{{$t->professora}}</td>
         @foreach($ano as $a)
         @if($a->ano == $t->ano)
         <td>{{$a->anoex}}</td>
         <td>{{$a->ciclo}}</td>
         @endif
         @endforeach
     </tr>
     @endforeach


 @endsection
