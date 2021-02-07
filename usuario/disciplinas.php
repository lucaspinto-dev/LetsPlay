<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PFC</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <div class="container-fluid" id="nav">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo.png" id="logo">
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <p class="text-monospace">Página Inicial</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="planosAula.php">
                                        <p class="text-monospace">Planos de Aula</p>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="disciplinas.php">
                                        <p class="text-monospace">Disciplinas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="temasTransversais.php">
                                        <p class="text-monospace">Temas Transversais</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="jogos.php">
                                        <p class="text-monospace">Jogos</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">
                                        <p class="text-monospace">Entrar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cadastroPerfil.php">
                                        <p class="text-monospace">Cadastrar-se</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">

        <div class="col-sm-12 text-center my-3">
            <h1>Disciplinas</h1>
            <div class="row justify-content-center mb-5 my-5">
                <div class="col-sm-12" id="iconCadastro">
                    <svg class="bi bi-collection" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 011 13V6a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v7a.5.5 0 01-.5.5zm-13 1A1.5 1.5 0 010 13V6a1.5 1.5 0 011.5-1.5h13A1.5 1.5 0 0116 6v7a1.5 1.5 0 01-1.5 1.5h-13zM2 3a.5.5 0 00.5.5h11a.5.5 0 000-1h-11A.5.5 0 002 3zm2-2a.5.5 0 00.5.5h7a.5.5 0 000-1h-7A.5.5 0 004 1z" clip-rule="evenodd"/>
                </svg>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center mb-5">
                <div class="col-sm-10">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          	Disciplina 001
        	</button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="col-sm-12">
                                            <h1 class="display-4">Disciplina 001</h1>
                                            <p>Curabitur accumsan eu augue vel sagittis. Praesent libero urna, semper non mattis ut, feugiat in ex. Maecenas nec risus ultricies est pulvinar pulvinar. Ut dui magna, sagittis vel nisl non, iaculis consectetur
                                                quam. Etiam nec sem a enim molestie pulvinar. Nulla nec dictum mi. Nullam sodales ligula neque, ac posuere mi malesuada eget. Nullam eu enim at neque fermentum ullamcorper.</p>
                                        </div>
                                        <div class="col-sm-12">
                                            <h5> Jogos a que esta disciplina está vinculada: </h5>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">Jogo001</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo002</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo003</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo004</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo005</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Disciplina 002
        </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="col-sm-12">
                                            <h1 class="display-4">Disciplina 002</h1>
                                            <p>Curabitur accumsan eu augue vel sagittis. Praesent libero urna, semper non mattis ut, feugiat in ex. Maecenas nec risus ultricies est pulvinar pulvinar. Ut dui magna, sagittis vel nisl non, iaculis consectetur
                                                quam. Etiam nec sem a enim molestie pulvinar. Nulla nec dictum mi. Nullam sodales ligula neque, ac posuere mi malesuada eget. Nullam eu enim at neque fermentum ullamcorper.</p>
                                        </div>
                                        <div class="col-sm-12">
                                            <h5> Jogos a que esta disciplina está vinculada: </h5>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">Jogo001</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo002</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo003</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo004</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo005</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Disciplina 003
        </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="col-sm-12">
                                            <h1 class="display-4">Disciplina 003</h1>
                                            <p>Curabitur accumsan eu augue vel sagittis. Praesent libero urna, semper non mattis ut, feugiat in ex. Maecenas nec risus ultricies est pulvinar pulvinar. Ut dui magna, sagittis vel nisl non, iaculis consectetur
                                                quam. Etiam nec sem a enim molestie pulvinar. Nulla nec dictum mi. Nullam sodales ligula neque, ac posuere mi malesuada eget. Nullam eu enim at neque fermentum ullamcorper.</p>
                                        </div>
                                        <div class="col-sm-12">
                                            <h5> Jogos a que esta disciplina está vinculada: </h5>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">Jogo001</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo002</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo003</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo004</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo005</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Disciplina 004
        </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="col-sm-12">
                                            <h1 class="display-4">Disciplina 004</h1>
                                            <p>Curabitur accumsan eu augue vel sagittis. Praesent libero urna, semper non mattis ut, feugiat in ex. Maecenas nec risus ultricies est pulvinar pulvinar. Ut dui magna, sagittis vel nisl non, iaculis consectetur
                                                quam. Etiam nec sem a enim molestie pulvinar. Nulla nec dictum mi. Nullam sodales ligula neque, ac posuere mi malesuada eget. Nullam eu enim at neque fermentum ullamcorper.</p>
                                        </div>
                                        <div class="col-sm-12">
                                            <h5> Jogos a que esta disciplina está vinculada: </h5>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">Jogo001</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo002</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo003</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo004</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo005</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         Disciplina 005
        </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="col-sm-12">
                                            <h1 class="display-4">Disciplina 005</h1>
                                            <p>Curabitur accumsan eu augue vel sagittis. Praesent libero urna, semper non mattis ut, feugiat in ex. Maecenas nec risus ultricies est pulvinar pulvinar. Ut dui magna, sagittis vel nisl non, iaculis consectetur
                                                quam. Etiam nec sem a enim molestie pulvinar. Nulla nec dictum mi. Nullam sodales ligula neque, ac posuere mi malesuada eget. Nullam eu enim at neque fermentum ullamcorper.</p>
                                        </div>
                                        <div class="col-sm-12">
                                            <h5> Jogos a que esta disciplina está vinculada: </h5>
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action">Jogo001</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo002</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo003</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo004</a>
                                                <a href="#" class="list-group-item list-group-item-action">Jogo005</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer mt-auto py-4 bg-light" id="rodape">
            <div class="col-sm-12">
                <span class="text-muted">&copy 2020</span>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>

</html>