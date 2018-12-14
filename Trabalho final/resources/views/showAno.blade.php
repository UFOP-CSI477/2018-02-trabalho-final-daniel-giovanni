@extends('template.template')
@section('title', 'Ano')
@section('content')

<h1>Ano: </h1>
<p>     {{ $ano->anoex }}</p>
<p>Ciclo:  {{ $ano->ciclo }} </p>

<div class="links">
<form method="get" action="{{ route('anos.edit', $ano->ano) }}" onsubmit="return confirm('Editar dados do Ano: {{ $ano->anoex }} ?');" >
   @csrf
   <input type="submit" value="Editar">
 </form>
</div>
<form method="post" action="{{ route('anos.destroy', $ano->ano) }}" onsubmit="return confirm('Confirma exclusão do Ano: {{ $ano->anoex }} ?');" >
   @csrf
   @method('DELETE')
   <input type="submit" value="Excluir">
 </form>

<a href="{{ route('anos.index') }}">Voltar</a>
</div>
@endsection
