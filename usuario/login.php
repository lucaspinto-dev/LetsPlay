<?php
require_once 'usuarios.php';
$u = new Usuario;
?>

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
                                <li class="nav-item">
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
                                <li class="nav-item active">
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
            <h1>Login</h1>
            <div class="row justify-content-center mb-5 my-5">
                <div class="col-sm-12" id="iconCadastro">
                    <svg class="bi bi-person-square" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="inputEmail">E-mail</label>
                            <input type="text" class="form-control" id="inputEmail" placeholder="exemplo@gmail.com" required>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputPassword">Senha</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Senha..." required>
                        </div>

                        <div class="form-group col-sm-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="lembre-me"> Lembrar senha
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <a href="index.php" class="btn btn-primary">Cancelar </a>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $acesso = addslashes($_POST['acesso']);

        if (!empty($email) && !empty($senha) && !empty($acesso)) {
            $u->conectar("letsplay", "localhost", "root", "root");
            if ($u->msgErro == "") {
                if ($u->logar($email, $senha, $acesso)) {
    ?>
                    <script>
                        window.location.href = "index.php";
                    </script>
                <?php
                } else {
                ?>
                    <div id="msg-erro">
                        E-mail ou senha estão incorretos!
                    </div>
                <?php
                }
            } else {
                ?>
                <?php echo "Erro: " . $u->msgErro; ?>
            <?php
            }
        } else {
            ?>
            <div id="msg-erro">
                Preencha todos os campos!
            </div>
    <?php
        }
    }
    ?>

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