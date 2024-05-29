@extends('template')

@section('title')
  -inicio
@endsection

@section('Contenido')
    <!--------video--------->
    <div class="div-video">
        <video onloadedmetadata="this.muted=true" autoplay muted loop>
            <source class="video-1" src="video/Y2meta.app-LG 4K DEMO HDR 2018 (60FPS) ELBA-(1080p60 HDR).mp4">
        </video>
    </div>
    <!-------- fin video--------->
    <!-----nuestra histrotia----->
    <div class="nst-history" id="nombre">
        <div class="nst-history-text">
            <h2>Conoce Nuestras Historia</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam sed provident quidem recusandae
                perferendis nihil quis sunt maxime fuga. Incidunt.</p>
                <a class="sobre-nosotros" href="Historia.html">Conoce Mas Sobre Nosotros</a>
            </div>
        <div class="nst-history-img">
            <div id="history">
                <a class="serv-img" href="img/comida.jpg" data-lightbox="models">
                    <img src="img/comida.jpg" alt="">
                </a>
            </div>
            <div id="nst-history-r">
                <a class="serv-img" href="img/comida.jpg" data-lightbox="models">
                    <img src="img/comida.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-----nuestra histrotia----->


    <!--------carrusel--------->
    <div class="carrusell">
        <div class="img-slider">
            <div class="slide active">
                <img src="https://img.freepik.com/foto-gratis/resumen-bombilla-creativa-sobre-fondo-azul-brillante-ia-generativa_188544-8090.jpg"
                    alt="">
            </div>
            <div class="slide">
                <img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2020/04/mejores-bancos-de-imagenes-gratis.jpg"
                    alt="">
            </div>
            <div class="slide">
                <img src="https://media.es.wired.com/photos/6501e7429fa9000811a95fe8/16:9/w_2560%2Cc_limit/Adobe%2520Firefly.jpeg"
                    alt="">
            </div>
            <div class="slide">
                <img src="https://img.freepik.com/foto-gratis/fondo-pantalla-abstracto-nebulosa-ultra-detallado-4_1562-749.jpg?size=626&ext=jpg&ga=GA1.1.87170709.1706227200&semt=sph"
                    alt="">
            </div>
            <div class="slide">
                <img src="https://img.freepik.com/foto-gratis/pintura-lago-montana-montana-al-fondo_188544-9126.jpg"
                    alt="">
            </div>
            <div class="navegation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>
        </div>

    </div>
    <!--------carrusel--fin------->

    <!-------- informacion de eventos --------->
    <div class="infor">
        <div class="infor-tex">
            <h2>aqui va lo relacionado con la imagen</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam sint repellat provident odit minima
                ipsum doloribus nemo delectus quia, autem adipisci facilis incidunt, pariatur consectetur. Quo, soluta
                sequi vitae dicta minus inventore harum nostrum molestiae nobis, dolores itaque! Rem, ratione. Fuga
                aliquam mollitia aut odit amet itaque architecto, ducimus enim?</p>
        </div>

        <div class="imagen-1">
            <a href="img/sillas.mesa.jpg" data-lightbox="models">
                <img src="img/sillas.mesa.jpg" alt="">
            </a>
        </div>

    </div>

    <div class="cont-linea">
        <div class="linea">
            <div class="figure">*</div>
        </div>
    </div>

    <div class="infor-sevice">
        <div id="imagen-2">
            <a href="img/silla.jpg" data-lightbox="models">
                <img src="img/silla.jpg" alt="">
            </a>
        </div>
        <div class="infor-text">
            <h2>aqui va lo relacionado con la imagen</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, fuga autem a facilis eos dolor
                veniam? Quibusdam ad esse molestias, minus nam vero, inventore nulla veritatis quae animi molestiae,
                quidem maxime reprehenderit veniam autem! Quaerat recusandae iusto iste blanditiis minus voluptatem
                incidunt. Nam laudantium qui similique mollitia numquam nihil recusandae!</p>
        </div>

    </div>


    <!-------- informacion de eventos fin--------->

    <div class="cont-linea">
        <div class="linea">
            <div class="figure">*</div>
        </div>
    </div>
    <!--------servicios------->
    <section class="servicios">
        <div class="card">
            <img src="img/favicon1.png" class="card-img" alt="">
            <div class="card-body">
                <h1 class="card-titulo">Elige tu plan de vacaciones</h1>
                <p class="card-sub-titulo">tedamos una mejor experiencia para que lo disfrutes</p>
                <p class="card-info">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Consectetur, esse.</p>
                <a target="recreo" href="servicios.html" class="card-btn">VERMAS</a>
            </div>
        </div>
        <div class="card">
            <img src="img/favicon1.png" class="card-img" alt="">
            <div class="card-body">
                <h1 class="card-titulo">Elige tu plan de vacaciones</h1>
                <p class="card-sub-titulo">tedamos una mejor experiencia para que lo disfrutes</p>
                <p class="card-info">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Consectetur, esse.</p>
                <button class="card-btn">VERMAS</button>
            </div>
        </div>
        <div class="card">
            <img src="img/favicon1.png" class="card-img" alt="">
            <div class="card-body">
                <h1 class="card-titulo">Elige tu plan de vacaciones</h1>
                <p class="card-sub-titulo">tedamos una mejor experiencia para que lo disfrutes</p>
                <p class="card-info">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Consectetur, esse.</p>
                <button class="card-btn">VERMAS</button>
            </div>
        </div>

    </section>
    <!--------servicios--fin----->

    <!--------calificacion o reseña-----
        <div class="rating-box">
            <header>Califica tu experiencia</header>
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>

    ------calificacion o reseña fin----->

    <!------ubicación------->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15808.410581292595!2d-76.62970754999999!3d7.884328699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1713814663130!5m2!1ses!2sco"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="ubicacion">
    </iframe>
    <!------ubicación--fin----->



    <!-----boton de whatsapp------->
    <a href="https://api.whatsapp.com/send?phone=3126379917&text=Me%20podr%C3%ADas%20regalar%20mas%20informaci%C3%B3n%20de%20los%20eventos%20??"
        class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono"></i>
    </a>
    <!-----boton de whatsapp fin------->

   

@endsection