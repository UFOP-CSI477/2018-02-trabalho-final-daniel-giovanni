@extends('template.template')
@section('title', 'Aluno')
@section('content')
<h1>Aluno: {{ $aluno->nome }}</h1>
<div class="links">
<a href="{{ url('decfreq', ['codigo'=> $aluno->cod_aluno]) }}" target="_blank">Declaração de Frequência</a>
<a href="{{ url('dectrans', ['codigo'=> $aluno->cod_aluno]) }}" target="_blank">Declaração de Transferência</a>
<a href="{{ url('decconc', ['codigo'=> $aluno->cod_aluno]) }}" target="_blank">Declaração de Conclusão</a>
</div>
<p>Aluno: {{ $aluno->nome }}</p>
<p>Turma: {{ $turma->nome_turma}}</p>
<p>Professora: {{ $turma->professora}} </p>
<p>Ano: {{$ano->anoex}}</p>
<p>Ciclo: {{$ano->ciclo}}</p>
<p>Nome da Mãe: {{ $aluno->mae }}</p>
<p>Nome do Pai: {{ $aluno->pai }}</p>
<p>Sexo: {{ $aluno->sexo }}</p>
<p>Data de Nascimento: {{ $aluno->data_nasc }}</p>
<p>Telefone: {{ $aluno->telefone }}</p>

<div class="links">
<form method="get" action="{{ route('aluno.edit', $aluno->cod_aluno) }}" onsubmit="return confirm('Editar dados do Aluno: {{ $aluno->nome }} ?');" >
   @csrf
   <input type="submit" value="Editar">
 </form>
</div>
<form method="post" action="{{ route('aluno.destroy', $aluno->cod_aluno) }}" onsubmit="return confirm('Confirma exclusão do Aluno: {{ $aluno->nome }} ?');" >
   @csrf
   @method('DELETE')
   <input type="submit" value="Excluir">
 </form>

<a href="{{ route('aluno.index') }}">Voltar</a>
</div>
@endsection
