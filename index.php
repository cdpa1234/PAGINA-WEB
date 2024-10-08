<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valiaddress</title>
    <link rel="shortcut icon" href="/assets/images/favicon.ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/estilos.css">
    
    

</head>
<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav_logo">
                <h2 class="nav_title">ValiAddreSS.</h2>
            </div>


            <ul class="nav_link nav_link--menu">
                <li class="nav_items">
                    <a href="http://localhost:3000/login.php" class="nav_links">Inicio </a>
                </li>
                <li class="nav_items">
                    <a href="http://localhost:3000/registre.php" class="nav_links">Registro </a>
                </li>
                <li class="nav_items">
                    <a href="https://lupap.com/" class="nav_links">Geolocalización</a>
                </li>

                <li class="nav_items"></li>
                    <a href="http://localhost:3000/soporte.php" class="nav_links"> soporte </a>
                </li>
            </ul>
            
            <div class="nav_menu">
                <img src="/assets/images/list.svg" class="nav_img" alt="menu icon">
            </div>
           
        </nav>

        <section class="hero_container container">
            <h1 class="hero_title">Consulta direcciones en ciudades</h1>
            <p class="hero_paragraph">Nuestro objetivo es facilitarles la tarea de asegurarse de que sus direcciones sean precisas y estén actualizadas, 
                lo que les permitirá mejorar la comunicación y la organización en sus actividades diarias</p>
                <a href="http://localhost:3000/login.php" class="cta">comienza ahora</a>

        </section>
    </header>

    <main>
        <section class="container-about">
            <h2 class="subtitle">¿Quienes somos?</h2>
            <p class="about_paragraph">Como empresa, nuestra misión es facilitar la navegación y la búsqueda de direcciones
                 en Colombia para todas aquellas personas que, como tú, han experimentado la frustración de perderse. 
                 Ofrecemos herramientas y recursos diseñados para simplificar el proceso y garantizar que siempre llegues a tu destino sin contratiempos.</p>
            <div class="about_main">
                <article class="about_icons">
                    <img src="/assets/images/facebook.svg" class="about_icon">
                    <a href="https://es-la.facebook.com/" class="about_title">Facebook</a>
                    <p class="about_paragraph">Haz clic en "Me gusta" y síguenos para estar al tanto de todo lo que estamos creando. ¡Te esperamos!
                     #Síguenos #ValiAddreSS #Comunidad</p>
              </article>
              <article class="about_icons">
                <img src="/assets/images/gmail.svg" class="about_icon">
                <a href="https://mail.google.com/"> Gmail</a>
                <p class="about_paragraph">Estamos emocionados de que estes aqui. Navega y conoce mas sobre nosotros</p>
          </article>
          <article class="about_icons">
            <img src="/assets/images/play-store.svg" class="about_icon">
            <a href="https://play.google.com/store/games?device=windows&pli=1">Play Store</a>
            <p class="about_paragraph">Para encontrar una dirección puedes descargar nuestra aplicación para android o para iOS o ingresar a valiaddress.com
                 y buscar la dirección que necesites en las diferentes ciudades y municipios </p>
      </article>
             </div>
        </section>

        <section class="knowledge">
            <div class="knowledge_container container">
                <div class="knowledge_text">
                    <h2 class="subtitle">¿Cuál es el proceso más efectivo para buscar y localizar direcciones en Colombia?</h2>
                    <p class="knowledge_paragraph">¿Alguna vez te has sentido perdido tratando de encontrar una dirección en Colombia?
                         ¡No estás solo! Muchos hemos pasado por ahí. Pero no te angusties, ¡tenemos la solución perfecta para ti! A continuación,
                          te compartiremos algunos consejos sencillos para que puedas ubicar cualquier dirección en Colombia sin complicaciones. ¡Vamos a hacerlo fácil!</p>
                     <a href="http://localhost:3000/registre.php" class="cta">¡registrate!</a>
                </div>
                <figure class="knowledge_picture">
                <img src="/assets/images/experencia.jpg" class="knowledge_img">
            </figure>

            </div>

        </section>
    </main>
    <script src="assets/js/menu.js"></script>
    <?php 
    include 'conexion.php';
    ?>
    
</body>
</html>