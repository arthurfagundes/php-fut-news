<?php
session_start();
require_once 'init.php';
require 'check.php';
$connect = mysqli_connect("localhost", "root", "", "bdfutnews");
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fut News - Painel do administrador</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/panel.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <header class="p-3 text-bg-black">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../php-fut-news/index.php" class="nav-link px-2 text-white">Home</a></li>
                </ul>
                <a href="logout.php">
                    <button type="button" class="btn btn-outline-danger">Logout</button>
                </a>
            </div>
        </div>
        </div>
    </header>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes dos usuários
                            <a href="user-panel.php" class="btn btn-dark float-end">Painel de usuário</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Data de nascimento (DD/MM/YYYY)</th>
                                    <th>Ativo</th>
                                    <th>Admin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($connect, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $user) {
                                ?>
                                        <tr>
                                            <td><?= $user['id']; ?></td>
                                            <td><?= $user['name']; ?></td>
                                            <td><?= $user['email']; ?></td>
                                            <td><?= $user['birthdate']; ?></td>
                                            <td><?= $user['active']; ?></td>
                                            <td><?= $user['admin']; ?></td>
                                            <td>
                                                <a href=<?php echo "./give-access.php\?id=" . $user['id'] ?> class="btn btn-secondary btn-sm">Conceder acesso</a>
                                                <a href=<?php echo "./revoke-access.php\?id=" . $user['id'] ?> class="btn btn-secondary btn-sm">Revogar acesso</a>
                                                <a href=<?php echo "./delete-user.php\?id=" . $user['id'] ?> class="btn btn-danger btn-sm">Deletar usuário</a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> Nenhum usuário cadastrado </h5>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>