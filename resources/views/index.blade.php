@extends('template.estilo')
@section('content')
<title></title>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bem Vindo(a)</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Entre com o E-mail...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Senha">
                                        </div>
                                        
                                        <a href="/painel" class="btn btn-primary btn-user btn-block">
                                            Entrar
                                        </a>
                                        <hr>
                                        <p class="alert alert-info">Não foi implementado o sistema de login, click em Entrar. </p>
                                        <p>Para os testes use as credênciais a seguir: </p>
                                        <p><b>Administrador</b> <br> E-mail: adm@teste.com e Senha mundo2021</p>
                                        <p><b>Supervisor </b><br> E-mail: super@teste.com e Senha mundo2021</p>
                                        <p><b>Funcionário</b>  <br> E-mail: func@teste.com e Senha mundo2021</p>
                                    </form>
                                    <hr>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
@endsection