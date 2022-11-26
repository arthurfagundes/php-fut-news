<?php
session_start();
require_once 'init.php';
require 'check.php';
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fut News - Painel do usuário</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body">
    <div class="b-example-divider"></div>
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
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="text-white">Olá, <?php echo $_SESSION['user_name']; ?>!</h1>
                    <p class="lead text-white">Seja muito bem-vindo(a) ao painel de usuário! Aqui você fica por dentro de todos os melhores momentos da Copa do Mundo 2022.</p>
                    <p class="lead text-muted">Atualizamos todo fim de jogo.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-gray">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/IUKID5myH7k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            <div class="card-body">
                                <p class="card-text">CATAR 0 X 2 EQUADOR | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/IUKID5myH7k">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">5:51</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/iOeM_Zysx3Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">INGLATERRA 6 X 2 IRÃ | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/iOeM_Zysx3Q">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">8:01</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/HgUJBCkPnF8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">SENEGAL 0 X 2 HOLANDA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/HgUJBCkPnF8">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">4:01</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/FSlD5XZkrcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">ESTADOS UNIDOS 1 X 1 GALES | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/FSlD5XZkrcQ">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">3:26</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/He1SRQ8CfOs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">ARGENTINA 1 X 2 ARÁBIA SAUDITA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/He1SRQ8CfOs">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">3:26</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/RWC0aqf-6UM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">DINAMARCA 0 X 0 TUNÍSIA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/RWC0aqf-6UM">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">4:37</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/j_lM4KdTH04" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">MÉXICO 0 X 0 POLÔNIA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/j_lM4KdTH04">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">3:51</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ag3HQER_J_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">FRANÇA 4 X 1 AUSTRÁLIA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/Ag3HQER_J_Q">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">6:44</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/7y7aVZOlid8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">MARROCOS 0 X 0 CROÁCIA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/7y7aVZOlid8">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">3:26</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/sv055BqJK_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">ALEMANHA 1 X 2 JAPÃO | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/sv055BqJK_I">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">6:41</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/ObwgSxryAa8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">ESPANHA 7 X 0 COSTA RICA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/ObwgSxryAa8">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">5:19</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/gVbrtezPOXc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">BÉLGICA 1 X 0 CANADÁ | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/gVbrtezPOXc">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">4:21</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/N9AxIxjx1lE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">SUÍÇA 1 X 0 CAMARAÕES | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/N9AxIxjx1lE">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">3:02</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/xWC4qDPbSEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">URUGUAI 0 X 0 COREIA DO SUL | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/xWC4qDPbSEg">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">3:32</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/vHURNM8R9Ck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">PORTUGAL 3 X 2 GANA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/vHURNM8R9Ck">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">5:12</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/_VCSlZ2n42o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">BRASIL 2 X 0 SÉRVIA | MELHORES MOMENTOS | 1ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/_VCSlZ2n42o">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">9:00</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/mPEkpyAzWcM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">PAÍS DE GALES 0 X 2 IRÃ | MELHORES MOMENTOS | 2ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/mPEkpyAzWcM">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">6:49</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/CfAkQ1KoAPQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">CATAR 1 X 3 SENEGAL | MELHORES MOMENTOS | 2ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/CfAkQ1KoAPQ">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">5:31</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/KU5QZUOQmsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">HOLANDA 1 x 1 EQUADOR | MELHORES MOMENTOS | 2ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/KU5QZUOQmsQ">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">3:58</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm h-100">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/ItCm-yYHVw4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">INGLATERRA 0 X 0 EUA | MELHORES MOMENTOS | 2ª RODADA | FASE DE GRUPOS | COPA DO MUNDO 2022</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://youtu.be/ItCm-yYHVw4">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Assistir no YouTube</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">2:51</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

</html>