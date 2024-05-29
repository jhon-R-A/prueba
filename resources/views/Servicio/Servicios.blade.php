@extends('template')

@section('title','Inicio')

@section('Contenido')
    <!--------imagen y texto------->
    <section id="serv-img-todo">
        <div class="img-serv-adi"></div>
        <div class="servi-adi">
            <h2>gracias por elegirnos</h2>
        </div>
    </section>
    <!--------imagen y texto fin------->

    <!--------descripcion------->
    <div class="parrafo">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi molestiae, ab reprehenderit dolor alias
            quasi. Eum, minima cupiditate! Deserunt odit eaque dolor iure adipisci excepturi, aut dolore ex corporis
            quis?</p>
    </div>
    <!--------descripcion fin------->
    <div class="cont-linea">
        <div class="linea">
            <div class="figure">*</div>
        </div>
    </div>
    <!--------4 imagenes y texto------->
    <div class="serv-comida" id="nombre">
        <div class="serv-comd-img">
            <div id="serv-comd">
                <a class="serv-img" href="img/comida.jpg" data-lightbox="models">
                    <img src="img/comida.jpg" alt="">
                </a>
                <a class="serv-img" href="img/sillas.mesa.jpg" data-lightbox="models">
                    <img src="img/sillas.mesa.jpg" alt="">
                </a>
            </div>
            <div id="serv-comd-r">
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/10.jpg" alt="">
                </a>
                <a class="serv-img" href="img/comida.jpg" data-lightbox="models">
                    <img src="img/comida.jpg" alt="">
                </a>
            </div>

        </div>
        <div class="serv-comida-text">
            <h2>Elige tu menu R</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam sed provident quidem recusandae
                perferendis nihil quis sunt maxime fuga. Incidunt.</p>
        </div>
    </div>
    <!--------4 imagenes y texto fin------->

    <!--------carrusel de imagenes------->
    <div class="container-carousel">
        <div class="carruseles" id="slider">
            <div class="slider-section">
                <img src="img/1.jpg">
            </div>
            <div class="slider-section">
                <img src="img/2.jpg">
            </div>
            <div class="slider-section">
                <img src="img/3.jpg">
            </div>
            <div class="slider-section">
                <img src="img/4.jpg">
            </div>
            <div class="slider-section">
                <img src="img/5.jpg">
            </div>
            <div class="slider-section">
                <img src="img/6.avif">
            </div>
            <div class="slider-section">
                <img src="img/7.jpg">
            </div>
            <div class="slider-section">
                <img src="img/8.jpg">
            </div>
            <div class="slider-section">
                <img src="img/9.jpg">
            </div>
            <div class="slider-section">
                <img src="img/10.jpg">
            </div>
        </div>
        <div class="btn-left"><i class='bx bx-chevron-left'></i></div>
        <div class="btn-right"><i class='bx bx-chevron-right'></i></div>
    </div>

    <!--------carrusel de imagenes fin------->

    <!--------4 imagenes y texto------->
    <div class="serv-tematica">
        <div class="serv-tematica-text">
            <h2>Elige tu menu</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam sed provident quidem recusandae
                perferendis nihil quis sunt maxime fuga. Incidunt.</p>
        </div>
        <div class="serv-tematica-img">
            <a class="serv-img" href="img/comida.jpg" data-lightbox="models">
                <img src="img/comida.jpg" alt="">
            </a>
        </div>
    </div>
    <!--------4 imagenes y texto fin------->
    <div class="cont-linea">
        <div class="linea">
            <div class="figure">*</div>
        </div>
    </div>
    <!--------4 imagenes y texto ---------->
    <div class="serv-decore" name="recreo">
        <div class="serv-decore-img">
            <div id="imagen-decore">
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/4.jpg" alt="">
                </a>
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/sillas.mesa.jpg" alt="">
                </a>
            </div>
            <div id="imagen-decore-2">
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/silla.jpg" alt="">
                </a>
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/comida.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="serv-decores-text">
            <h2>Elige tu menu aaa</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam sed provident quidem recusandae
                perferendis nihil quis sunt maxime fuga. Incidunt.</p>
        </div>
    </div>
    <!------4 imagenes y texto fin------->

    <!--------4 imagenes y texto fin------->
    <div class="cont-linea">
        <div class="linea">
            <div class="figure">*</div>
        </div>
    </div>
    <!--------4 imagenes y texto ---------->
    <div class="serv-decore" name="recreo">
        <div class="serv-decores-text">
            <h2>Elige tu menu aaa</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam sed provident quidem recusandae
                perferendis nihil quis sunt maxime fuga. Incidunt.</p>
        </div>

        <div class="serv-decore-img">
            <div id="imagen-decore">
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/4.jpg" alt="">
                </a>
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/sillas.mesa.jpg" alt="">
                </a>
            </div>
            <div id="imagen-decore-2">
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/silla.jpg" alt="">
                </a>
                <a class="serv-img" href="img/10.jpg" data-lightbox="models">
                    <img src="img/comida.jpg" alt="">
                </a>
            </div>
        </div>
        
    </div>
    <!------4 imagenes y texto fin------->
    
    <!-----boton de whatsapp------->
    <a href="https://api.whatsapp.com/send?phone=3126379917&text=Me%20podr%C3%ADas%20regalar%20mas%20informaci%C3%B3n%20de%20los%20eventos%20??"
        class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono"></i>
    </a>
    <!-----boton de whatsapp fin------->
@endsection    