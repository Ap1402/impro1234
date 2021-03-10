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
    </section>

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
    </section>

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
    </section>

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
                        <p><a href="mailto:info@example.com">info@industriasimpro.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div id="mapid" class="map"></div>


        <div class="container">
            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="/send-email" method="post" role="form" id='contactForm' class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre"
                                data-rule="minlen:1" data-msg="Por favor introduzca un nombre" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Correo electronico" data-rule="email"
                                data-msg="Por favor introduzca un correo válido" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                            data-rule="minlen:4" data-msg="Por favor introduzca un " />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message" rows="5" data-rule="required"
                            data-msg="Por favor introduzca su mensaje" placeholder="Mensaje"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

    <script>
        var mymap = L.map('mapid').setView([10.1700964, -67.9648047, 17], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiZmx5bmQxNDAyIiwiYSI6ImNraDN1cDNjbTAwOWUzNHAxazh2YWtvemYifQ.bqpYvupUCMm1uQoB_mEGkA'
        }).addTo(mymap);

        L.marker([10.1700964, -67.9648047, 17]).addTo(mymap)

    </script>
    <script>
        const formElement = document.getElementById("contactForm");

        const formData = new FormData(formElement);
        formElement.addEventListener('submit', (e) => {
            e.preventDefault();
            const result = axios.post({{ route('send.mail') }}, formData);
        });

    </script>

@stop
