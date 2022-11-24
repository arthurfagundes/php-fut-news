<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fut News - Entrar</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="text-center">
    <div class="b-example-divider"></div>
    <header class="p-3 text-bg-black">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../php-fut-news/index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Planos</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Sobre</a></li>
                </ul>
                <a href="login-form.php">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                </a>
                <a href="register-form.php">
                    <button type="button" class="btn btn-warning">Criar conta</button>
                </a>
            </div>
        </div>
        </div>
    </header>

    <main class="form-signin w-100 m-auto">
        <div class="p-5 mb-4 bg-white rounded-3">
            <form action="login.php" method="POST">
                <img class="mb-4 align-items-center" src="img/logo.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal text-black">Faça Login</h1>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="email@exemplo.com">
                    <label for="floatingInput">Insira seu e-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Senha">
                    <label for="floatingPassword">Digite sua senha</label>
                </div>
                <button class="w-100 btn btn-lg btn-warning text-bg-black" type="submit">Entrar</button>
                <p class="mt-2 text-black">Ainda não tem uma conta?
                    <a href="register-form.php"> Cadastre-se</a>
                </p>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>