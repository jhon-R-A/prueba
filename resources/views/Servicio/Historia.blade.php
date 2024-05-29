@extends('template')

@section('title','Inicio')

@section('Contenido')
    <!--------titulo de bienvenido a la historia--------->
    <div class="historia-titu">
        <img src="img/nobre-nosotos.jpg" alt="">
    </div>
    <div class="text-box">
        <div class="fixed-text">
            <h1>Conoce Mas Sobre Nosotros</h1>
            <h3>Nombre de la Empresa</h3>
        </div>
        
        </div>
    </div>


    <!--------titulo de bienvenido a la historia fin--------->


    <!--------historia--------->
    <section>
        <div class="cont-historias">
            <div class="historia" id="historia" data-aos="zoom-in" data-aos-duration="2000">
                <h1>HISTORIA</h1>
                <div class="tex">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita culpa beatae corporis maxime
                        doloribus aperiam assumenda ipsum modi est distinctio pariatur incidunt, velit quos ducimus
                        omnis
                        qui placeat necessitatibus eos molestias odio, mollitia saepe! Rem ad, maxime beatae maiores
                        fugiat,
                        atque itaque aliquam voluptas, iusto laudantium libero molestiae minus exercitationem!</p>
                </div>
            </div>
            <div class="cont-mis-vis">
                <div class="mision" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1000"
                    data-aos-offset="0">
                    <h2>MISIÓN</h2>
                    <div class="tex-mision">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur ipsam laborum
                            maiores,
                            vel eveniet beatae deleniti, expedita saepe recusandae voluptatem odio ipsa quibusdam alias.
                            Repudiandae facilis eaque repellat et totam sed doloribus eum officiis fugit quae velit quo,
                            unde
                            adipisci ut. Earum fugiat nesciunt reiciendis? Quae aspernatur suscipit quod!</p>
                    </div>
                </div>

                <div class="vision" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="1000"
                    data-aos-offset="0">
                    <h2>VISIÓN</h2>
                    <div class="tex-vision">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consectetur ipsam laborum
                            maiores,
                            vel eveniet beatae deleniti, expedita saepe recusandae voluptatem odio ipsa quibusdam alias.
                            Repudiandae facilis eaque repellat et totam sed doloribus eum officiis fugit quae velit quo,
                            unde
                            adipisci ut. Earum fugiat nesciunt reiciendis? Quae aspernatur suscipit quod!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------- fin historia--------->

@endsection    