@extends('layouts.landing')
@section('title', 'Impro')
@section('content')

    <!--==========================
                                                                                                  About Section
                                                                                                ============================-->
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="img/Logo-impro.png" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>¿Quienes somos?</h2>
                    {{-- <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim id
                        est laborum.</h3> --}}
                    <h4 class="text-about">Somos una empresa innovadora en crecimiento del
                        mercado industrial ubicados en la ciudad de
                        Carabobo siendo el puente entre el fabricante y
                        nuestros clientes, garantizándoles productos de
                        calidad y precios competitivos que les permiten
                        eficientar su operación, servicio y costos.
                        Capacidad de importación a gran escala vía
                        Marítima y Aérea.
                    </h4>
                    {{-- <ul>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</li>
                        <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate
                            velit.</li>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro
                            dolore eu fugiat nulla pariatur.</li>
                    </ul> --}}

                </div>
            </div>

        </div>
    </section><!-- #about -->

    <!--==========================
                                                                                                  Services Section
                                                                                                ============================-->
    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>Rubros</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum fore</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fas fa-laptop"></i></div>
                        <h4 class="title"><a href="">Tecnológica</a></h4>
                        <p class="description">Telefonía, computación,
                            servidores, impresoras
                            avanzadas.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fas fa-industry"></i></div>
                        <h4 class="title"><a href="">Neumática</a></h4>
                        <p class="description">Actuadores,
                            posicionamiento
                            neumático, controladores
                            de presión, soluciones en
                            serie.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fas fa-bolt"></i></div>
                        <h4 class="title"><a href="">Electrica</a></h4>
                        <p class="description">Comunicación industrial,
                            corrección de factor de
                            energías, componentes de
                            sistemas y sistemas de
                            control de energía.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fas fa-robot"></i></div>
                        <h4 class="title"><a href="">Automatización</a></h4>
                        <p class="description">Sistema de sensores,
                            sistema de automatización,
                            fuentes de alimentación,
                            controladores e interfaces
                            robóticas.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

    <!--==========================
                                                                                                  Clients Section
                                                                                                ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Marcas</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum fore</p>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="img/clients/client-1.png" alt="">
                <img src="img/clients/client-3.png" alt="">
                <img src="img/clients/client-4.png" alt="">
                <img src="img/clients/client-5.png" alt="">
                <img src="img/clients/client-6.png" alt="">
                <img src="img/clients/client-7.png" alt="">
                <img src="img/clients/client-8.png" alt="">
                <img src="img/clients/client-2.png" alt="">
                <img src="img/clients/client-9.png" alt="">
                <img src="img/clients/client-10.png" alt="">
            </div>

        </div>
    </section><!-- #clients -->

    <!--==========================
                                                                                                  Our Portfolio Section
                                                                                                ============================-->
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Our Portfolio</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum fore</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/1.jpg" class="portfolio-popup">
                            <img src="img/portfolio/1.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 1</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/2.jpg" class="portfolio-popup">
                            <img src="img/portfolio/2.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 2</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/3.jpg" class="portfolio-popup">
                            <img src="img/portfolio/3.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 3</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/4.jpg" class="portfolio-popup">
                            <img src="img/portfolio/4.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 4</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/5.jpg" class="portfolio-popup">
                            <img src="img/portfolio/5.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 5</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/6.jpg" class="portfolio-popup">
                            <img src="img/portfolio/6.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 6</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/7.jpg" class="portfolio-popup">
                            <img src="img/portfolio/7.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 7</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="img/portfolio/8.jpg" class="portfolio-popup">
                            <img src="img/portfolio/8.jpg" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Portfolio Item 8</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #portfolio -->

    <!--==========================
                                                                                                  Testimonials Section
                                                                                                ============================-->
    <section id="testimonials" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Testimonials</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum fore</p>
            </div>
            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                        Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                        quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                        tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                        minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                        culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                        quid.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                    <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section><!-- #testimonials -->

    <!--==========================
                                                                                                  Call To Action Section
                                                                                                ============================-->
    <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">¿Necesita rastrear su paquete?</h3>
                    <p class="cta-text"> En Impro ponemos a su disposición la posibilidad de
                        monitorizar el estado de su orden desde la comodidad de su hogar y a cualquier
                        hora.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#intro">Rastrear mi orden</a>
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->

    <!--==========================
                                                                                                  Our Team Section
                                                                                                ============================-->
    {{-- <section id="team" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Our Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                        <div class="details">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-2.jpg" alt=""></div>
                        <div class="details">
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-3.jpg" alt=""></div>
                        <div class="details">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="img/team-4.jpg" alt=""></div>
                        <div class="details">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #team --> --}}

    <!--==========================
                                                                                                  Contact Section
                                                                                                ============================-->

    <section id="contact" class="wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Contáctanos</h2>
                {{-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit
                    veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum fore</p> --}}
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Dirección</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Número telefónico</h3>
                        <p><a href="tel:+584244187444">+58 424 4187444</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Correo electrónico</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div id="mapid" class="map"></div>


        <div class="container">
            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="https://formspree.io/f/mvovyklk" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="nombre" class="form-control" id="name" placeholder="Su nombre"
                                data-rule="minlen:1" data-msg="Por favor introduzca un nombre" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="correo" id="email"
                                placeholder="Correo electronico" data-rule="email"
                                data-msg="Por favor introduzca un correo válido" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto"
                            data-rule="minlen:4" data-msg="Por favor introduzca un " />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="mensaje" rows="5" data-rule="required"
                            data-msg="Por favor introduzca su mensaje" placeholder="Mensaje"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

    <script>
        var mymap = L.map('mapid').setView([10.1700964,-67.9648047,17], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiZmx5bmQxNDAyIiwiYSI6ImNraDN1cDNjbTAwOWUzNHAxazh2YWtvemYifQ.bqpYvupUCMm1uQoB_mEGkA'
        }).addTo(mymap);

        L.marker([10.1700964,-67.9648047,17]).addTo(mymap)
    </script>

@stop
