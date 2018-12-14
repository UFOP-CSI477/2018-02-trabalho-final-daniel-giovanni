@extends('template.template')
@section('title', 'Turma')
@section('content')


<h1>Turma: {{ $turma->nome_turma }}</h1>

<p>Professora: {{ $turma->professora }}</p>
<p>Ano:{{$ano->anoex}}</p>
<p>Ciclo:{{$ano->ciclo}}</p>


<div class="links">


<form method="get" action="{{ route('turma.edit', $turma->cod_turma) }}" onsubmit="return confirm('Editar dados da Turma: {{ $turma->nome_turma }} ?');" >
   @csrf
   <input type="submit" value="Editar">
 </form>
</div>
<form method="post" action="{{ route('turma.edit', $turma->cod_turma) }}" onsubmit="return confirm('Confirma exclusão do Ano: {{ $turma->nome_turma }} ?');" >
   @csrf
   @method('DELETE')
   <input type="submit" value="Excluir">
 </form>
 <a href="{{ route('turma.index') }}">Voltar</a>


@endsection
