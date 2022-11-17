<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?= base_url()?>/assets/img/contact-header.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Contacto</h2>
            <ol>
                <li><a href="/">Início</a></li>
                <li>Contacto</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contacto Section ======= -->
    <section id="contact" class="contact contact1">
        <div class="container position-relative" data-aos="fade-up">

            <div class="row gy-4 d-flex justify-content-end">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Localização:</h4>
                            <p>Rua 11, Nº7, Cassenda, Maianga, Luanda, Angola<br>
                            </p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>E-mail:</h4>
                            <p>info@goodelivering.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Ligar:</h4>
                            <p> +244 912 135 116 | +244 992 869 927</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

                    <form action="/public/email" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua mensagem foi enviada. Obrigada!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar mensagem</button></div>
                    </form>

                </div><!-- End Contacto Form -->

            </div>

        </div>
    </section><!-- End Contacto Section -->

</main><!-- End #main -->