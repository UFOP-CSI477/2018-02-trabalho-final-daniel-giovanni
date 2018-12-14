@extends('template.template')
@section('title', 'Turmas')
@section('content')


<table class="table">
       <tr>
           <th>Ano</th>
           <th>Ciclo</th>
       </tr>

     @foreach ($ano as $a)
     <tr>
       <td><a href="{{ route('anos.show', $a->ano) }}">{{$a->anoex}}</td>
       <td>{{$a->ciclo}}</td>
     </tr>
     @endforeach

 </table>

@endsection
