<?php require_once('includes/header.php'); ?>

    <section>
        <div id="carouselExampleCaptions" class="carousel slide carousel-home" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image active">
                    <div class="carousel-caption">
                        <div class="container">
                            <h2 class="mb-4">Tecnologia acessível<br> num só sítio</h5>
                            <a href="#" class="btn-carousel">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image">                  
                    <div class="carousel-caption ">
                        <div class="container">
                            <h2 class="mb-4">Tecnologia acessível<br> num só sítio</h5>
                            <a href="#" class="btn-carousel">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image">                  
                    <div class="carousel-caption">
                        <div class="container">
                            <h2 class="mb-4">Tecnologia acessível<br> num só sítio</h5>
                            <a href="#" class="btn-carousel">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <h2>Novidades</h2>
            <div class="underscore-title"></div>
            <div class="row row-cols-1 row-cols-lg-4">
                <?php for ($i = 0; $i < 4; $i++) {
                    require('includes/components/produto-item.php');
                }
                ?>
            </div>
        </div>
    </section>

<?php require_once('includes/footer.php'); ?>