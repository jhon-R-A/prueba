<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('home')</title>
   
        <link
        href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css"
        rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     @vite(['resources/css/estilos.css'],['resources/css/lightbox.css'],['resources/css/normalize.css'],['resources/js/animation.js'],['resources/js/carrusel.js'],['resources/js/script.js'],['resources/js/serv-carrusel.js'])
    
    
</head>
<body>
        <header>
                <nav>
                    <ul class='nav-bar'>
                        <li class='logo'><a href='#'><img src='img/logo.png' /></a></li>
                        <input type='checkbox' id='check' />
                        <span class="menu">
                        <li><a href="{{ url('/index') }}">Inicio</a></li>
                            <li><a href="{{ url('/Historia') }}">Nuestra Historia</a></li>
                            <li><a href="{{ url('/Servicios') }}">Servicios</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contactos</a></li>
                            <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                        </span>
                        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
                    </ul>
                </nav>
            </header>
    <!--------header--fin------->


    
       @yield('Contenido')
    
    

 <!--::::Pie de Pagina::::::-->
 <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/logotipo-sleedw.svg" alt="DISFRUTA DE UN DIA DE SOL">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa-brands fa-facebook"></a>
                    <a href="#" class="fa-brands fa-instagram"></a>
                    <a href="#" class="fa-brands fa-tiktok"></a>
                    <a href="#" class="fa-brands fa-whatsapp"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 MARMOLEJO, ANDRES REYES</small>
        </div>
    </footer>
    <!------footer--fin----->
   
    <script src="https://kit.fontawesome.com/4a58ec169a.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>