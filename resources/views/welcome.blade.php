<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Andres</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
        <link rel="stylesheet" href="gallery-grid.css">

       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        

        
     
        



        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
                <nav class="nav">
                <div class="container">
                    <div class="logo">
                        <a href="#"><img src="logo.png" style="width:100%; height: auto"></a>
                    </div>
                    <div class="main_list logo2" id="mainListDiv">
                        <a href="#contacto">Contacto</a>
                    </div>
                    <div class="media_button">
                        <button class="main_media_button" id="mediaButton">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </nav>


            <section class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div>
                    <center>
                    <br>
                    <br>
                    <br>
                    <h1> Desarrollador Frontend y Backend </h1>
                    <h2>"Si lo puedes imaginar, lo puedes programar"</h2>
                    <h2>Codifico cosas hermosas y sencillas, y me encanta lo que hago.</h2>
                    <img src="andres1.png" style="width: 300px; height: 300px">
                    </center>
                    <br>
                </div>
                <center>
                <img src="setup.svg" style="width:100%; height: auto">
                <br>
                <br>
                </center> 
            </section>
            

            <section class="section is-medium is-primary has-text-centered is-long">
                <div class="container">
                    <div class="columns is-centered">
                    <div class="column is-three-fifths">
                    <center>
                        <h1 class="title is-spaced is-size-3-desktop is-size-4-mobile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hola, soy Andrés Cabrera. </font><font style="vertical-align: inherit;">Encantado de conocerte.</font></font></h1>
                    </center>
                        <h2 class="subtitle is-size-5-desktop has-text-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desde que comencé mi viaje como desarrollador de software independiente hace más de 3 años, he realizado trabajos remotos para agencias, asesorías para pequeñas y grandes empresas, negocios de cualquier tipo, otorgandoles sistemas de software y colaborado con personas talentosas para crear productos digitales para uso comercial y de consumo. </font><font style="vertical-align: inherit;">Soy tranquilamente confiado, naturalmente curioso y trabajo perpetuamente para mejorar mis habilidades, soy el tipo de persona que le gusta aprender día con día.</font></font></h2>
                    </div>
                    </div>
                </div>
            </section>

            <section class=" skills has-text-centered" >
                <br>
                <div class="container is-narrow">
                    <div class="box">
                    <div class="content">
                        <div class="columns is-centered">
                        <center>
                        <div class="column"><span class="fa-stack fa-2x"></span>
                            <h1 class="title is-size-4 is-spaced">Frontend Developer</h1>
                            <p>Valoro la estructura de contenido simple, los patrones de diseño limpios y las interacciones bien pensadas.</p>
                            <h3>Lenguaje de programación:</h3>
                            <p>HTML5, Pug, Slim, CSS3, Sass, Git, Vue.js, Node.js</p>
                            <h3>Herramientas de software:</h3>
                            <li>Atom</li>
                            <li>Bitbucket</li>
                            <li>Bootstrap</li>
                            <li>Bulma</li>
                            <li>Codekit</li>
                            <li>Github</li>
                            <li>Surge</li>
                            <li>Anaconda</li>
                            <li>Visual Studio Code</li>
                            <li>Vite</li>
                            <br>     
                        </div>
                        </center>
                        <center>
                        <div class="column"><span class="fa-stack fa-2x"></span>
                            <h1 class="title is-size-4 is-spaced">Backend Developer</h1>
                            <p>Me gusta codificar cosas desde cero y disfruto dando vida a las ideas en el navegador.</p>
                            <h3>Lenguaje de programación:</h3>
                            <p></p>
                            <li>JAVA</li>
                            <li>JavaScript</li>
                            <li>C#</li>
                            <li>Golang</li>
                            <li>PHP</li>
                            <li>Python</li>
                            <p class="list-title has-text-primary has-text-weight-normal">Frameworks:</p>
                            <li>Laravel</li>
                            <li>.NET</li>
                            <li>Angular</li>
                            <li>Django</li>
                        </div>
                        </center>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

            <section class="section is-medium is-primary has-text-centered ">
            <center>
            <h1>Mi trabajo reciente</h1>
            <h2 class="subtitle is-size-5-desktop"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aquí hay algunos proyectos de desarrollo anteriores en los que he trabajado. </font><font style="vertical-align: inherit;"></font></font><a class="has-text-weight-normal" href="mailto:jairoandrescabrera@gmail.com"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></h2>
            <h2 class="subtitle is-size-5-desktop"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font><font style="vertical-align: inherit;">¿Quieres ver más? </font></font><a class="has-text-weight-normal" href="mailto:jairoandrescabrera@gmail.com"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Envíame un correo electrónico</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></h2>

            </center>
            </section>

            
            <section class="dark:bg-gray-800">
                <div>
                    <div class="grid grid-cols-4 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>
                            <center>
                            <div class="tz-gallery">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="http://ceapanamericanasur.com/">
                                            <img src="pana.png" style="width:100%; height: auto">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </center>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>
                            <center>
                            <div class="tz-gallery">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="https://licoreria24horas.000webhostapp.com/login.php">
                                            <img src="licores.png" style="width:100%; height: auto">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </center>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>
                            <center>
                            <div class="tz-gallery">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="emprender.png">
                                            <img src="emprender.png" style="width:100%; height: auto">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </center>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>
                            <center>
                            <div class="tz-gallery">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" href="hospital.png">
                                            <img src="hospital.png" style="width:100%; height: auto">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                    </div>

                </div>
            </section>

        
        
        <footer  class="footer-dark" name="abajo">
            <div class="container"  id="contacto">
                <div class="row">
                    <center>
                    <div class="col-md-6 item text">
                        <h2>Iniciar un proyecto</h2>
                        <img src="andres.png" style="width: 300px; height: 300px">
                        <p>¿Interesado en trabajar juntos? Deberíamos reunirnos para charlar, escribeme. Compraré el café.</p>
                    </div>
                    </center>
                    <div class="col item social"><a href="https://www.facebook.com/jairoandres.cabrerarosero/"><i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/jairoandrescab1"><i class="icon ion-social-twitter"></i></a><a href="https://www.youtube.com/channel/UCUGDhoydwR643tUvknBzbtw"><i class="icon ion-social-youtube"></i></a>
                    <a href="https://www.instagram.com/jairo6070/"><i class="icon ion-social-instagram"></i></a>
                    <a href="https://wa.me/573234049532?text=Hola!%20Vamos%20por%20en%20ese%20cafe"><i class="icon ion-social-whatsapp"></i></a>
                    <a href="https://github.com/Andres2829?tab=repositories"><i class="icon ion-social-github"></i></a>
                </div>
                </div>
                    <center>
                    <a href="#"><img src="logo.png" style="width: 160px; height: 60px"></a>
                    </center>
                <p class="copyright">Creado por: Andrés Cabrera © 2022</p>
            
        </footer>
   



         
    </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
     baguetteBox.run('.tz-gallery');
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<style>
    .section.is-long {
    padding-bottom: 14rem;
}
    .section.is-primary {
    background-color: #6E07F3;
    color: white;
}

.section {
    padding: 5rem 1.5rem;
}

.column {
    display: block;
    flex-basis: 0;
    flex-grow: 1;
    flex-shrink: 1;
    padding: 0.75rem;
}

.columns:not(.is-desktop) {
    display: flex;
}
.columns.is-centered {
    justify-content: center;
}
.columns:last-child {
    margin-bottom: -0.75rem;
}
.columns {
    margin-left: -0.75rem;
    margin-right: -0.75rem;
    margin-top: -0.75rem;
}

@media screen and (min-width: 1216px)
.section.skills .box .content .columns .column {
    padding: 70px 45px;
}
@media screen and (min-width: 769px)
.section.skills .box .content .columns .column {
    border-bottom: 0px solid #E6ECF8;
    border-right: 1px solid #E6ECF8;
    padding: 60px 35px;
}

.section.skills .box .content .columns .column {
    padding: 50px 30px;
    border-bottom: 1px solid #E6ECF8;
    border-right: 0px solid #E6ECF8;
}

.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
}

body {
    background-image: linear-gradient(to top, #ecedee 0%, #eceeef 75%, #e7e8e9 100%);
    min-height: 100vh;
    font: normal 16px sans-serif;
    padding: 60px 0;
}

a {
    color: #1a8cff;
}

a, body, nav{
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    transition: all 0.4s;
    font-family: -apple-system,
    BlinkMacSystemFont,
    "Segoe UI",
    Roboto,
    Helvetica,
    Arial,
    sans-serif,
    "Apple Color Emoji",
    "Segoe UI Emoji",
    "Segoe UI Symbol";
}

.container{
    margin-left: 5%;
    margin-right: 5%;
}

/* Navbar section */

.nav{
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: center;
    background-color: rgba(106, 90, 205,0.8);
}

.nav div.logo{
    width: 180px;
    height: 10px;
    position: absolute;
}

.nav div.logo2 a{
    width: 180px;
    height: 10px;
    float: right ;
    text-decoration: none;
    color: #c0c0c0;
    font-size: 1.8em;
    text-transform: uppercase;
}

.nav div.logo a{
    text-decoration: none;
    color: #fff;
    font-size: 1.8em;
    text-transform: uppercase;
}

.nav div.logo a:hover {
    color: #c0c0c0;
}

.nav div.main_list{
    width: 600px;
    height: 65px;
    float: right;
}

.nav div.main_list ul{
    width:100%;
    height: 65px;
    display: flex;
    list-style: none;
}

.nav div.main_list ul li{
    width: 120px;
    height: 65px;
}

.nav div.main_list ul li a{
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    text-transform: uppercase;
}

.nav div.main_list ul li a:hover{
    color: #c0c0c0;
}

.nav div.media_button {
    width: 40px;
    height: 40px;
    background-color: transparent;
    position: absolute;
    right: 15px;
    top: 12px;
    display: none;
}

.nav div.media_button button.main_media_button {
    width: 100%;
    height: 100%;
    background-color: transparent;;
    outline: 0;
    border: none;
    cursor: pointer;
}

.nav div.media_button button.main_media_button span{
    width: 98%;
    height: 1px;
    display: block;
    background-color: #fff;
    margin-top: 9px;
    margin-bottom: 10px;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(1){
    transform: rotateY(180deg);
    transition: all 0.5s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(2){
    transform: rotateY(180deg);
    transition: all 0.4s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(3){
    transform: rotateY(180deg);
    transition: all 0.3s;
    background-color: #c0c0c0;
}

.nav div.media_button button.active span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active span:nth-of-type(2) {
    display: none;
}

.nav div.media_button button.active span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active:hover span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 20deg);
}

.nav div.media_button button.active:hover span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -20deg);
}

/* Home section */

.home{
    width: 100%;
    height: 100vh;
    background-color: #ddd;
}

/* Medai qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
    
    .container{
        margin: 0;
    }
    
}




@media screen and (max-width:768px) {
    
    .container{
        margin: 0;
    }
    
    .nav div.logo{
        margin-left: 15px;
    }
    
    .nav div.main_list{
        width: 100%;
        margin-top: 65px;
        height: 0px;
        overflow: hidden;
    }
    
    .nav div.show_list{
        height: 200px;
    }
    
    .nav div.main_list ul{
        flex-direction: column;
        width: 100%;
        height: 200px;
        top: 80px;
        right: 0;
        left: 0;
    }
    
    .nav div.main_list ul li{
        width: 100%;
        height: 40px;
        background-color:rgba(0,0,255,0.8);
    }
    
    .nav div.main_list ul li a{
      text-align: center;
        line-height: 40px;
        width: 100%;
        height: 40px;
        display: table;
    }
    
    .nav div.media_button{
        display: block;
    }
}





</style>

