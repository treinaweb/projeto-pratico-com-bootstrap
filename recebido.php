<?php require_once('includes/header.php'); ?>

    <main>
        <div class="container mb-5 pt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="text-primary"><i class="bi bi-house-door text-primary me-2"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Compra finalizada</li>
                </ol>
            </nav>
        </div>

        <section>
            <div class="container">
                <h1>Encomenda recebida</h1>
                <div class="underscore-title"></div>
                <h2 class="text-primary">Obrigado. A sua encomenda foi recebida.</h2>
            
                <div class="bg-paper">
                    <div>
                        <h3>NÚMERO DE ENCOMENDA</h3>
                        <p>194</p>
                    </div>
                    <hr>
                    <div>
                        <h3>DATA</h3>
                        <p>Outubro 21,2021</p>
                    </div>
                    <hr>
                    <div>
                        <h3>EMAIL</h3>
                        <p>janedoe@email.com</p>
                    </div>
                    <hr>
                    <div>
                        <h3>Total</h3>
                        <p><i class="bi bi-currency-dollar me-2"></i> 693</p>
                    </div>
                    <hr>
                    <div>
                        <h3>método de pagamento</h3>
                        <p>Transferência bancária</p>
                    </div>
                </div>
                <h2>Os nossos dados bancários</h2>
                <div class="bg-paper">
                    <div>
                        <h3>Banco</h3>
                        <p>Novo Banco</p>
                    </div>
                    <hr>
                    <div>
                        <h3>Número de identificação bancária</h3>
                        <p>0000 0000 0000 0000 0000 0</p>
                    </div>
                    <hr>
                    <div>
                        <h3>IBAN</h3>
                        <p>PT50 0000 0000 0000 0000 0000 0</p>
                    </div>
                </div>

                <h2 class="mb-4">Detalhes da encomenda</h2>
                <div class="bg-white rounded row py-4">
                    <div class="col-8">
                        <p class="mb-5">Produto</p>
                        <a href="produto-detalhe.php">Apple iPhone 12 64GB</a>
                    </div>
                    <div class="col-4">
                        <p class="mb-5">total</p>
                        <p><i class="bi bi-currency-dollar me-2"></i>1.200</p>
                    </div>
                </div>

                <div class="bg-white rounded row py-4 mt-1">
                    <div class="col-8">
                        <p class="mb-5">Subtotal</p>
                        <p class="mb-5">Envio</p>
                        <p class="mb-5">Método de pagamento</p>
                        <p>Total</p>
                    </div>
                    <div class="col-4">
                        <p class="mb-5"><i class="bi bi-currency-dollar me-2"></i>1.200</p>
                        <p class="mb-5">Envio grátis</p>
                        <p class="mb-5">Transferência bancária</p>
                        <p><i class="bi bi-currency-dollar me-2"></i>1.200</p>
                    </div>
                </div>

                <div class="py-5 row mt-5">
                    <div class="col-5">
                        <h3 class="mb-4">Endereço de faturação</h3>
                        <p>
                            César Cardoso<br>
                            Rua da Portela<br>
                            4810-511 Guimarães<br>
                            936589428
                        </p>
                        <p class="mt-3">cesarsilvacardoso@gmail.com</p>
                    </div>
                    <div class="col-5">
                        <h3 class="mb-4">Endereço de envio</h3>
                        <p>
                            Inflight IT, Lda.<br>
                            César Cardoso<br>
                            Avepark - Parque da Ciência e Tecnologia, S.A<br>
                            4805-017 Guimarães
                        </p>
                    </div>

                </div>






            </div>
        </section>


    </main>

<?php require_once('includes/footer.php'); ?>