<?php require_once('includes/header.php'); ?>

    <main>
        <div class="container mb-5 pt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="loja.php" class="text-primary">Loja</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apple iphone 12 64gb</li>
                </ol>
            </nav>
        </div>

        <!-- Detalhe Produto -->
        <section>
            <div class="container">
                <div class="row gap-4">
                    <div class="col-12 col-md-5 bloco-carousel">
                        <div id="carouselExampleIndicators" class="carousel-detalhe carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img src="/img/img-iphone.png" alt="" class="d-block w-100"></li>                    
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img src="/img/img-iphone-2.png" alt="" class="d-block w-100"></li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img src="/img/img-iphone-3.png" alt="" class="d-block w-100"></li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img src="/img/img-iphone-4.png" alt="" class="d-block w-100"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/img/img-iphone.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/img-iphone-2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/img-iphone-3.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/img/img-iphone-4.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 detalhe-iphone">
                        <div>
                            <h2>Apple iphone 12 64gb</h2>
                            <i class="bi bi-currency-dollar me-2"> 1.200</i>
                        </div>
                        <form>
                            <label for="colorSelect text-muted mb-3">Cor</label>
                            <select id="colorSelect" class="form-select mb-4">
                                <option selected>Preto</option>
                                <option value="1">Azul</option>
                                <option value="2">Dourado</option>
                                <option value="3">Branco</option>
                            </select>
                            <div class="d-flex">
                                <input type="number" placeholder="1" class="me-3">
                                <a href="carrinho.php" class="btn-card">Adicionar</a>
                            </div>
                        </form>
                        <div>
                            <p class="text-muted">Ref: N/D</p>
                            <p class="text-muted">Categoria: <a href="loja.php">Apple</a></p>
                        </div>
                    </div>
                </div>
                <div class="row categoria-descricao gap-4 mt-5 mt-md-4">
                    <div class="col-5">
                        <div class="d-flex justify-content-between">
                            <p>Descrição</p>
                            <i class="bi bi-caret-right"></i>
                        </div>
                        <hr>
                        <p class="text-muted">Informação adicional</p>
                        <hr>
                        <p class="text-muted">Avaliações (0)</p>
                        <hr>
                    </div>

                    <div class="col-6">
                        <h3 class="mb-3">Descrição</h3>
                        <p>
                            Ecrã diagonal: 15,5 cm (6.1″), 2532×1170 pixels, OLED. Modelo de processador: A14. Armazenamento interno: 64 GB. Câmara traseira: 12MP, dupla. SO instalado: iOS 14. Iva incluído. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Relacionados -->
        <section>
            <div class="container relacionados-detalhe">
                <h2>Produtos relacionados</h2>
                <div class="underscore-title"></div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 mb-5">
                <?php for ($i = 0; $i < 4; $i++) {
                    require('includes/components/produto-item.php');
                    }
                ?>
                </div>
            </div>
        </section>

    </main>


<?php require_once('includes/footer.php'); ?>