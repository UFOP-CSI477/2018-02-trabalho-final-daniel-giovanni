<html>
<head>
	<title> @yield('title')</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	</head>
<body>
	<header>



<ul class="navbar-nav ml-auto">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">

					@guest
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

					@else
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										Usuário:	{{ Auth::user()->name }}
									</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}"
												 onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
											</form>
									</div>
							
					@endguest

<a class="navbar-brand" href="{{ url('/') }}">Início</a>
<a class="navbar-brand" href="{{ url('/pesquisa') }}">Pesquisa</a>
<a class="navbar-brand" href="{{ url('/aluno') }}">Alunos</a>
<a class="navbar-brand" href="{{ url('/turma') }}">Turmas</a>
<a class="navbar-brand" href="{{ url('/anos') }}">Ano Escolaridade</a>

		<!-- Authentication Links -->

</ul>
				</div>

			</div>
		</nav>
	</header>
	<div class="container">
        @yield('content')
    </div>
</body>
</html>
