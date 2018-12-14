@extends('template.template')


@section('title', 'Home')


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      @section('content')

            <div class="content">

            
                <div class="title m-b-md">
                    Escola Integral Maria de Lourdes Duarte Moreira dos Santos

                </div>
                <p>São Gonçalo do Rio Abaixo-MG</p>
                <div class="links">
                    <a href="{{ url('cadastrarAluno') }}">Cadastrar Aluno</a>
                    <a href="{{ url('cadastrarTurma') }}">Cadastrar Turma</a>
                    <a href="{{ url('cadastrarAno') }}">Cadastrar Ano</a>
                    <a href="{{ route('register') }}">Registrar novo usuário</a>

                </div>
            </div>
        </div>
        @endsection
    </body>
</html>
