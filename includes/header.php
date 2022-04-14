<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonte de Texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="src/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>STORE</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gap-3 gap-md-0 py-4">
                <a href="/home.php" class="col-6"><img src="img/logo-treinaweb.webp" alt="Logo da TreinaWeb" width="200px"></a>
                <div class="col-12 col-md-4 col-xl-3">
                    <form class="search-area rounded-3 p-3 d-flex flex-nowrap">
                        <i class="bi bi-search me-2"></i>
                        <input type="text" placeholder="Pesquisar produtos...">
                    </form>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container px-0">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link px-0" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 mx-md-3" href="loja.php">Loja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0" href="produto-detalhe.php">Produto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 mx-md-3" href="carrinho.php">Carrinho</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-currency-dollar"> 0,00</i>
                        <p class="mb-0 mx-3">0 itens</p>
                        <a href="carrinho.php"><img src="img/carrinho-icon.svg" alt="Icone de carrinho de compras"></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    

