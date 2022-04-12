<?php require_once('includes/header.php'); ?>

    <main>
        <div class="container mb-5 pt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Loja</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row">
                <div class="d-flex align-items-center gap-4 filtro-bloco">
                    <div class="ordenacao">
                        <select class="form-select border-0">
                            <option selected>Ordenação padrão</option>
                            <option value="1">Exemplo 01</option>
                            <option value="2">Exemplo 02</option>
                            <option value="3">Exemplo 03</option>
                        </select>
                    </div>
                    <p class="text-muted mb-0">Mostar 1-4 de 30 resultados</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item"><a class="page-link bg-primary" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">3</a></li>
                            <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Itens da loja -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row row-cols-1 row-cols-md-2">
                            <?php for ($i = 0; $i < 4; $i++) {
                                require('includes/components/produto-item.php');
                            }
                            ?>
                        </div>
                    </div> 
                    <div class="offset-md-1 col-md-3 mt-5">
                        <label for="customRange1" class="form-label">Filtrar por preço</label>
                        <input type="range" class="form-range" id="customRange1">
                        <p class="mb-0 text-muted">Preço: <i class="bi bi-currency-dollar me-2"></i>20 - <i class="bi bi-currency-dollar me-2"></i>1399 </p>
                        <div class="filtro-categoria d-flex flex-column mt-4 gap-2">
                            <h4>Categoria</h4>
                            <a class="text-dark" href="#">Apple</a>
                            <a class="text-dark" href="#">Clothing</a>
                            <a class="text-dark ms-2" href="#">Acessories</a>
                            <a class="text-dark ms-2" href="#">Hoodies</a>
                            <a class="text-dark ms-2" href="#">Tshirt</a>
                            <a class="text-dark" href="#">Samsung</a>
                        </div>
                    </div>                  
                </div>
            </div>
        </section>

        <div class="container">
            <div class="filtro-bottom row pt-5">
                <div class="d-flex align-items-center gap-4 filtro-bloco">
                    <div class="ordenacao">
                        <select class="form-select border-0">
                            <option selected>Ordenação padrão</option>
                            <option value="1">Exemplo 01</option>
                            <option value="2">Exemplo 02</option>
                            <option value="3">Exemplo 03</option>
                        </select>
                    </div>
                    <p class="text-muted mb-0">Mostar 1-4 de 30 resultados</p>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0">
                            <li class="page-item"><a class="page-link bg-primary" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">3</a></li>
                            <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>

<?php require_once('includes/footer.php'); ?>