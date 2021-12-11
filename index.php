<?php
   include('conexao.php');
   // Verifique a conexão
   if($conexao-> connect_error) {
     die ("Conexão falhou:". $conexao-> connect_error);
   }
   $sql = "SELECT * FROM Sistema_Cadastrar_Mensagem";
   $result = $conexao-> query ($sql);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Biblioteca</title>
      <!-- load stylesheets -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
      <!-- Google web font "Open Sans" -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Bootstrap style -->
      <link rel="stylesheet" href="css/hero-slider-style.css"  >
      <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
      <link rel="stylesheet" href="css/tooplate-style.css">
      <style>
         <!------ Include the above in your HEAD tag ---------->
         img {
         border-radius: 8px;
         }
         body{text-align: center; padding-top: 50px}
         .estrelas input[type=radio] {
         display: none;
         }
         .estrelas label i.fa{
         font-size: 2.5em
         }
         .estrelas label i.fa:before {
         content:'\f005';
         color: #FC0;
         }
         .estrelas input[type=radio]:checked ~ label i.fa:before {
         color: #CCC;
         }
      </style>
   </head>
   <body>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"  >
      <div class="cd-bg-video-wrapper" data-video="video/bangkok-city">
         <!-- video element will be loaded using jQuery -->
      </div>
      <!-- .cd-bg-video-wrapper -->
      <!-- Content -->
      <div class="cd-hero">
      <!-- Navigation -->        
      <div class="cd-slider-nav">
         <div class="container">
            <nav class="navbar">
               <div class="tm-navbar-bg">
                  <a class="navbar-brand text-uppercase" ><img   src="img/b.png" alt="image" height="80" width="80"><b>Biblioteca</b></a>
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                  &#9776;
                  </button>
                  <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                     <ul class="nav navbar-nav">
                        <li class="nav-item active selected">
                           <a class="nav-link" href="#0" data-no="1"><img   src="img/p.png" alt="image" height="50" width="50"><b>Principal</b><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#0" data-no="2"><img   src="img/l.png" alt="image" height="50" width="50" ><b>Leitura</b></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#0" data-no="3"><img   src="img/c.png" alt="image" height="50" width="50" ><b>Contato</b></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#0" data-no="4"><img   src="img/a.png" alt="image"  height="50" width="50"><b>Login</b></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <ul class="cd-hero-slider">
         <!-- autoplay -->
         <!-- Page 1 Home -->
         <li class="selected">
            <div class="cd-full-width">
               <div class="container js-tm-page-content tm-page-1 tm-section-margin-t-small" data-page-no="1">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="tm-home-container-outer">
                           <div class="tm-home-container">
                              <div class="tm-home-title-container">
                                 <h2 class="tm-text-title text-xs-center tm-home-title"><b>Seja Bem Vindo a Biblioteca!</b></h2>
                              </div>
                              <div class="tm-home-description-container tm-bg-dark-blue">
                                 <div class="text-xs-left tm-textbox">
                                    <p class="tm-text tm-home-description">Fundada em 2021 a biblioteca virtual vem com a proposta de proporcionar acesso a obras do mundo todo, de forma rápida, fácil e gratuita. </p>
                                    <p class="tm-text tm-home-description"></p>
                                    
                                 </div>
                              </div>
                           </div>
                           <div class="tm-home-container-bg"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- .cd-full-width -->
         </li>
         <!-- Page 3 Gallery -->
         <li>
            <div class="cd-full-width">
            <div class="container js-tm-page-content tm-section-margin-t" data-page-no="3">
            <div class="row tm-margin-b">
               <div class="col-xs-12">
                  <div class="tm-img-gallery-container">
                     <div class="">
                        <!-- Gallery Two pop up connected with JS code below -->
                        <div class="tm-gallery-title-container">
                           <div class="tm-bg-dark-blue tm-white-border tm-textbox-padding tm-margin-b">
                              <h2 class="tm-text-title tm-gallery-title tm-margin-b-0"><span class="tm-white"><b>Livros</b></span></h2>
                           </div>
                           <div class="tm-bg-white-half"></div>
                        </div>
                     </div>
                  </div>
                  <!-- .tm-img-gallery-container -->  
               </div>
            </div>
            <iframe src="https://cest.fredalves.com/cest/Equipe_4_Sistema_Biblioteca/leitura.php" allowfullscreen  height="3000" width="1000"  ></iframe> 
            <!-- row -->
            <!-- Page 4 Contact -->
         <li>
            <div class="cd-full-width">
            <div class="container js-tm-page-content tm-section-margin-t-small" data-page-no="4">
            <div class="tm-contact-page">
               <div class="row tm-margin-b">
                  <div class="col-xs-12">
                     <div class="tm-gallery-title-container">
                        <div class="tm-bg-dark-blue tm-white-border tm-textbox-padding tm-margin-b">
                           <h2 class="tm-text-title tm-gallery-title tm-margin-b-0"><span class="tm-white"><b>Contato</b></span></h2>
                        </div>
                        <div class="tm-bg-white-half"></div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12">
                           <div class="tm-flex tm-contact-container tm-bg-dark-blue">
                              <div class="text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                 <p class="tm-text"><b>Entre em contato com gente para elogios, dicas e sugestões !!!.</b></p>
                                 <p  class="tm-text"><b>E-mail: </b><a  style="color:red" href="mailto:bibliotecaavirtual2021@gmail.com"><b> bibliotecaavirtual2021@gmail.com </b></a></p>
                              </div>
                              <div class="text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                 <!-- contact form -->
                                 <form action="salvarMensagem.php" method="GET" class="tm-contact-form">
                                    <div class="form-group">
                                       <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome"  required/>
                                    </div>
                                    <div class="form-group">
                                       <input type="email" id="email" name="email" class="form-control" placeholder="Email"  required/>
                                    </div>
                                    <div class="form-group">
                                       <textarea id="mensagem" name="mensagem" class="form-control" rows="5" placeholder="Sua Mensagem" required></textarea>
                                    </div>
                                    <p  class="tm-text" <a  style="color:white" > <b>Como você avalia sua experiência geral?</b> </a></p>
                                    <div class="estrelas">
                                       <input type="radio" id="cm_star-empty" name="fb" value="0" checked/>
                                       <label for="cm_star-1"><i class="fa"></i></label>
                                       <input type="radio" id="cm_star-1" name="fb" value="&#11088;"/>
                                       <label for="cm_star-2"><i class="fa"></i></label>
                                       <input type="radio" id="cm_star-2" name="fb" value="&#11088;&#11088;"/>
                                       <label for="cm_star-3"><i class="fa"></i></label>
                                       <input type="radio" id="cm_star-3" name="fb" value="&#11088;&#11088;&#11088;"/>
                                       <label for="cm_star-4"><i class="fa"></i></label>
                                       <input type="radio" id="cm_star-4" name="fb" value="&#11088;&#11088;&#11088;&#11088;"/>
                                       <label for="cm_star-5"><i class="fa"></i></label>
                                       <input type="radio" id="cm_star-5" name="fb" value="&#11088;&#11088;&#11088;&#11088;&#11088;"/>
                                    </div>
                                    <button type="submit" class="tm-submit-btn">Enviar</button> 
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>  
                     <br>
                     <div class="container mt-3 ">
                        <div class="row">
                           <div class="col-sm">
                           </div>
                           <div class="col-sm bg-light">
                              <div class="tm-home-title-container">
                                 <h2 class="tm-text-title text-xs-center tm-home-title"><b>Feedback</b></h2>
                              </div>
                              <!-- Code by w3codegenerator.com -->
                              <table class="table table-dark" background="img/fundo2.jpg" >
                                 <thead>
                                    <tr>
                                      <!-- <th >&#9654; NOME &#9664;</th> -->
                                      <!-- <th >&#9654; MENSAGEM &#9664;</th> -->
                                      
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       if ($result->num_rows > 0) {
                                         // output data of each row
                                           while($row = $result->fetch_assoc()) {
                                       ?>
                                    <tr>
                                    <td class="py-1"><img   src="img/icone.jpg" alt="image"><?php echo $row["nome"] ?> </td>
                                    <td class="py-1"><img   src="img/mensagem.png" alt="image"><?php echo "&#10077;".$row["mensagem"]."&#10078;" ?></td>
                                    <td  class="py-1"><img   src="img/estrela.jpg" alt="image"><?php echo $row["avaliacao"] ?></td>
                                    </tr>
                                    <?php
                                       }
                                       } else {
                                       echo "Nenhuma Mensagem";
                                       }
                                       
                                       ?>
                                 </tbody>
                              </table>
                           </div>
                           <div class="col-sm">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- .cd-full-width -->
         </li>
         <li >
            <div class="cd-full-width">
               <div class="container js-tm-page-content tm-page-1 tm-section-margin-t-small" data-page-no="1">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="tm-home-container-outer">
                           <div class="tm-home-container">
                              <div class="tm-home-title-container">
                                 <h2 class="tm-text-title text-xs-center tm-home-title"><b>Área Administrativa</b></h2>
                              </div>
                              <div class="tm-home-description-container tm-bg-dark-blue">
                                 <div class="w3-row-padding w3-grayscale">
                                    <div class="w3-col l3 m6 w3-margin-bottom">
                                       <center> <a href="login_adm.php"  target="_blank"><img src="img/login.jpeg"  style="width:40%"></a></center>
                                    </div>
                                 </div>
                              </div>
                              <div class="tm-home-container-bg"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- .cd-full-width -->
         </li>
      </ul>
      <!-- .cd-hero-slider -->
      <footer class="tm-footer">            
      <p class="tm-copyright-text pull-xs-right">Sistema Biblioteca  |<span class="tm-current-year"> </span>
      | Design: <a rel="nofollow" href="#" class="tm-footer-link" target="_parent">Turma Cest 5º Período Noturno </a></p>
      </footer>                    
      </div> <!-- .cd-hero -->        
      <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- load JS files -->
      <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
      <script src="js/tether.min.js"></script>                <!-- http://tether.io/ -->
      <script src="js/isInViewport.min.js"></script>          <!-- isInViewport js (https://github.com/zeusdeux/isInViewport) -->
      <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
      <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
      <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
      <script>
         function adjustHeightOfPage(pageNo) {
         
             var offset = 80;
             var pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height();
         
             if($(window).width() >= 992) { offset = 120; }
             else if($(window).width() < 480) { offset = 40; }
            
             // Get the page height
             var totalPageHeight = 335 + $('.cd-slider-nav').height()
                                     + pageContentHeight + offset
                                     + $('.tm-footer').height();
         
             // Adjust layout based on page height and window height
             if(totalPageHeight > $(window).height()) 
             {
                 $('.cd-hero-slider').addClass('small-screen');
                 $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
             }
             else 
             {
                 $('.cd-hero-slider').removeClass('small-screen');
                 $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
             }
         }
         
         function uploadVideo() {
         
             var videoWrapper = $('.cd-bg-video-wrapper');
             if( videoWrapper.is(':visible') ) {
                 // if visible - we are not on a mobile device 
                 var videoUrl = videoWrapper.data('video'),
                     
                 video = $('<video autoplay loop><source src="'+videoUrl+'.mp4" type="video/mp4" /></video>');
                 video.appendTo(videoWrapper);
         
                 // play video if first slide
                 if(videoWrapper.parent('.cd-bg-video.selected').length > 0) video.get(0).play();                 
             }
         }
         
         // Everything is loaded including images.            
         $(window).load(function(){
         
             adjustHeightOfPage(1); // Adjust page height
         
             // Background Video
             if($( window ).width() > 800) {
                 uploadVideo();
             }
         
             /* Gallery One pop up
             -----------------------------------------*/
             $('.gallery-first').magnificPopup({
                 delegate: 'a', // child items selector, by clicking on it popup will open
                 type: 'image',
                 gallery:{enabled:true}                
             });
         
             /* Gallery Two pop up
             -----------------------------------------*/
             $('.gallery-second').magnificPopup({
                 delegate: 'a', // child items selector, by clicking on it popup will open
                 type: 'image',
                 gallery:{enabled:true}                
             });
         
             /* Collapse menu after click 
             -----------------------------------------*/
             $('#tmNavbar a').click(function(){
                 $('#tmNavbar').collapse('hide');
         
                 adjustHeightOfPage($(this).data("no")); // Adjust page height       
             });
         
             /* Browser resized 
             -----------------------------------------*/
             $( window ).resize(function() {
                 var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                 
                 // wait 3 seconds
                 setTimeout(function() {
                     adjustHeightOfPage( currentPageNo );
                 }, 3000);
         
                 if($( window ).width() > 800) {
                    uploadVideo();
                 }
                 
             });
         
             // Play video only when visible
             // https://stackoverflow.com/questions/21163756/html5-and-javascript-to-play-videos-only-when-visible
             $('video').each(function(){
                 if ($(this).is(":in-viewport")) {
                     $(this)[0].play();
                 } else {
                     $(this)[0].pause();
                 }
             })
         
             // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
             $('body').addClass('loaded');
             $('.tm-current-year').text(new Date().getFullYear());
                        
         });
         
      </script> 
   </body>
</html>