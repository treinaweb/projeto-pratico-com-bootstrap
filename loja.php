<?php require_once('includes/header.php'); ?>

    <main>
        <div class="container my-5 pt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Loja</li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row pb-5">
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