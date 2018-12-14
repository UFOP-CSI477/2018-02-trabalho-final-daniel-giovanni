<html>
<head>
	<title> @yield('title')</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<h1>Declaração de Frequência</h1>
	</head>
<body>

<p></p>

<p></p><p></p><p></p>
<p>Declaramos para os devidos fins que o (a) aluno(a) {{$aluno->nome}} filho (a) de
{{$aluno->pai}} e de {{$aluno->mae}}
nascido(a) em {{$aluno->data_nasc}} natural de {{$aluno->naturalidade}}.</p>
<p>Cursou até a data de hoje, o {{$ano->anoex}} Ano do {{$ano->ciclo}} do Ensino Fundamental.</p>
<p>O Histórico Escolar será expedido no prazo legal de 30 (trinta)dias, a
contar desta data comprovando que o (a) aluno (a) deverá ser matriculado
(a) no 5º ano do 2º Ciclo do Ensino Fundamental, conforme Resolução
CEE nº 228/77 de 18/01/1977, Artigo 11 § 1º.
</p>
<p>Por ser Verdade firmo a presente declaração.</p>
<p>São Gonçalo do Rio Abaixo-MG </p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>
<p>                  ___________________________________________________</p>
<p>                              Assinatura do Responsável</p>
</body>
