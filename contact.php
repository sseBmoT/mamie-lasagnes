<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <title>Lasagnes faites maison | Mamie Lasagne</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.png" type="image/png">
        <link rel="icon" sizes="32x32" href="assets/img/favicon/favicon_32x32.png" type="image/png">
        <link rel="icon" sizes="64x64" href="assets/img/favicon/favicon_64x64.png" type="image/png">
        <link rel="icon" sizes="96x96" href="assets/img/favicon/favicon_96x96.png" type="image/png">
        <link rel="icon" sizes="196x196" href="assets/img/favicon/favicon_196x196.png" type="image/png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/favicon_152x152.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/favicon_60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/favicon_76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/favicon_114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/favicon_120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/favicon_144x144.png">
        <meta name="msapplication-TileImage" content="assets/img/favicon/favicon_144x144.png">
        <meta name="msapplication-TileColor" content="#FFFFFF"> 
        <link rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="mobile-menu.css">
        <link rel="stylesheet" href="animate.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <!-- Facebook Pixel Code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js%27');
        fbq('init', '816284388817691'); 
        fbq('track', 'PageView');
        function unlockForm() {
            $('#form-button').prop("disabled", false);
        }
        function recaptchaExpired(){
            $('#form-button').prop("disabled", true);
        }
    </script>
    <noscript>
         <img height="1" width="1" 
            src="https://www.facebook.com/tr?id=816284388817691&ev=PageView
            &noscript=1"/>
    </noscript>
    <script>
        $(document).ready(function(){
            $('#form-button').prop("disabled", true);
            checkCookie();
        });
    </script>
        <!-- End Facebook Pixel Code -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style>select::-webkit-scrollbar{ width:1px; background-color:transparent }</style>
    </head>

<body>
    <!-- Navigation -->
    <div id="navbar" class="w-100 d-none d-md-block">
        <nav class="navbar navbar-expand navbar-light fixed-top">
            <div class="navbar-nav w-100">
                <ul id="navbar-items-list" class="nav d-flex justify-content-around align-items-center w-100">
                    <li class="nav-item d-none d-md-block">
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link text-uppercase" href="index.html#a-la-carte">La carte</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link text-uppercase" href="index.html#a-ldm">Les lasagnes du moment</a>
                    </li>
                    <li>
                        <a href="index.html#a-image-intro">
                            <img src="assets/img/logo_150x150.png" alt="Mamie Lasagnes" width="90" height="90" title="Mamie Lasagnes">
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link text-uppercase" href="index.html#a-evenement">Évènement</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link text-uppercase" href="index.html#a-footer">Contact</a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <div id="social-nav" class="mr-4">
                            <a href="tel:+33646309313"><div class="custom-icon icon-phone"></div></a>
                            <a href="https://www.facebook.com/mamielasagnes/" target="_blank"><div class="custom-icon icon-fb"></div></a>
                            <a href="https://www.instagram.com/mamie_lasagnes/" target="_blank"><div class="custom-icon icon-instagram"></div></a>
                            <a href="https://www.tripadvisor.fr" target="_blank"><div class="custom-icon icon-tripadvisor"></div></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wave-effect w-100" style="margin-top: 120px;"></div>
        </nav>
    </div>
    <!-- Navigation End -->
    <!-- Mobile Header -->
    <div id="mobile-header" class="d-block d-md-none">
        <nav class="navbar navbar-expand navbar-light">
            <div class="navbar-nav w-100 py-1">
                <ul id="navbar-items-list" class="nav d-flex justify-content-center align-items-center w-100">
                    <li>
                        <img src="assets/img/logo_150x150.png" alt="Mamie Lasagne" width="90"
                            height="90" title="Mamie Lasagne">
                    </li>
                </ul>
            </div>
            <div class="wave-effect w-100" style="margin-top: 120px;"></div>
        </nav>
    </div> 
    <!-- Mobile Header End -->
    <!-- Navigation End -->
    <section id="cookie-page">
        <div class="container my-5 pb-2 pt-5 text-center">
<?php
  $mail = 'contact@mamielasagnes.fr'; // Déclaration de l'adresse de destination.

  //=====Declaration des messages au format texte et au format HTML.
  $message_txt = htmlentities($_POST["message"], ENT_QUOTES, "UTF-8");
  //==========

  //=====Definition du sujet.
  $sujet = "Commande de ".$_POST["prenom"]." ".$_POST["nom"]." pour le ".$_POST["date"]." à ".$_POST["heure"];
  //=========

  $header = 'MIME-Version: 1.0' . "\r\n";
  $header.= 'Content-type: text/html; charset=utf-8' . "\r\n";

  //=====Création du header de l'e-mail.
  $message.= "De: ".$_POST["email"].""." / ";
  $message.= "Nom: ".$_POST["nom"].""."/ ";
  $message.= "Prenom: ".$_POST["prenom"].""." / ";
  $message.= "Nom de l'entreprise: ".$_POST["entreprise"].""." / ";
  $message.= "Telephone: ".$_POST["telephone"].""." / ";
  $message.= "Sujet: Commande de ".$_POST["prenom"]." ".$_POST["nom"]." pour le ".$_POST["date"]." à ".$_POST["heure"]." / ";
  $message.= "Message:";

  //==========
  
  //=====Création du message.
  //=====Ajout du message au format texte.
  $message.= $passage_ligne.$_POST["date"]." à ".$_POST["heure"].$passage_ligne;
  $message.= $passage_ligne.$message_txt.$passage_ligne;
  //==========
  $message.= $passage_ligne."Envoyé depuis le site".$boundary.$passage_ligne;
  //==========
  $boundary = "-----=".md5(rand());
  //==========
  
  //=====Envoi de l'e-mail.
  mail($mail,$sujet,$message,$header);
  //==========
  header('refresh:5;url=http://mamie-lasagnes.fr/');
  echo '<h3 class="pb-2">Votre message à bien été envoyé, nous vous contacterons très bientôt.</h3>';
  echo '<h4 class="pb-2">Vous allez être redirigé dans quelques instants vers mamie-lasagnes.fr, veuillez patienter.</h4>';
  echo "<h4 class='pb-2'>Si vous n'etes toujours redirigé, cliquez <a href='http://mamie-lasagnes.fr'>ici</a></h4>";
?>
    </div>
  </section>
  <span class="anchor" id="a-footer"></span>
    <div id="footer" style="position: absolute; bottom: 0; width: 100%">
        <div id="bottom-wave-effet" class="wave-effect w-100" style="transform: rotateX(180deg)"></div>
        <div class="row pb-2 justify-content-center" style="width: 100%; margin-right: 0px; margin-left: 0px;">
            <div class="col-lg-2 text-center">
            <a href="index.html" class="smooth-scrolling"><img src="assets/img/logo_150x150.png" alt="Mamie Lasagne" width="90" height="90"></a>
            </div>
            <div class="col-lg-4 text-center mt-lg-0 mt-3">
                <h4 class="text-uppercase">Mamie Lasagnes</h4>
                <div class="--separator-sm --secondary-separator "></div>
                <div class="d-flex flex-column mx-auto" style="max-width: 400px">
                    <div class="d-flex"><div class="custom-icon icon-position-yellow"></div><p class="text-uppercase"><a href="https://g.page/mamie-lasagnes?gm" target="_blank">5 allée du val des ouvriers 34980 COMBAILLAUX</a></p></div>
                    <div class="d-flex"><div class="custom-icon icon-clock-yellow"></div> <p class="text-uppercase font-12">Livraison vendredi, samedi & dimanche de 18h à 22h</p></div>
                    <div class="d-flex"><div class="custom-icon icon-mail-yellow"></div><p class="text-uppercase"><a href="mailto:contact@mamielasagnes.fr">CONTACT@MAMIELASAGNES.FR</a></p></div>
                    <div class="d-flex"><div class="custom-icon icon-phone-yellow"></div><p class="text-uppercase"><a href="tel:+33646309313">+33 (0) 6 46 30 93 13</a></p></div>
                </div>
            </div>
            <div class="--vertical-secondary-separator d-none d-lg-block"></div>
            <div class="col-lg-3 align-items-center mt-lg-0 mt-3">
                <div class="text-center">
                    <h4 class="text-uppercase">Navigation</h4>
                    <div class="--separator-sm --secondary-separator"></div>
                </div>
                <ul id="nav-menu">
                    <li class="text-uppercase"><a href="index.html#a-image-intro">Accueil</a></li>
                    <li class="text-uppercase"><a href="index.html#a-formules">Les formules</a></li>
                    <li><br></li>
                    <li class="text-uppercase"><a href="index.html#a-evenement">Evénements</a></li>
                    <li class="text-uppercase"><a href="index.html#a-la-carte">La carte</a></li>
                    <li class="text-uppercase"><a href="index.html#a-ldm">Les lasagnes du moment</a></li>
                    <li class="text-uppercase"><a href="index.html#a-edf">Fabrication</a></li>
                </ul>
            </div>
            <div class="--vertical-secondary-separator d-none d-lg-block"></div>
            <div class="col-lg-2 text-center mt-lg-3 mt-1">
                <br>
                <div class="--separator-sm --secondary-separator"></div>
                <p><a class="text-uppercase" href="legals.html">Information</a></p>
                <p><a class="text-uppercase" data-toggle="modal" data-target="#contact-modal" style="cursor: pointer">Nous contacter</a></p>
                <div id="social-nav">
                    <a href="tel:+33633417167"><div class="custom-icon icon-phone"></div></a>
                    <a href="https://www.facebook.com/mamielasagnes/" target="_blank"><div class="custom-icon icon-fb"></div></a>
                    <a href="https://www.instagram.com/mamie_lasagnes/" target="_blank"><div class="custom-icon icon-instagram"></div></a>
                    <a href="https://www.tripadvisor.fr" target="_blank" class="mr-1"><div class="custom-icon icon-tripadvisor"></div></a>
                </div>
            </div>
        </div>
        <div id="end-footer" class="mt-3">
            <p class="text-uppercase text-center text-white p-2">© 2020 Mamie Lasagnes | Tous droits réservés | <a href="legals.html">Mentions
                    légales</a></p>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Cookies Message -->

    <!-- Cookies Message End -->
    <!-- Mobile Menu -->
    <div id="mobile-menu-nav" class="menu d-inline-flex d-md-none">
        <nav class="menu__nav">
            <ul class="r-list menu__list text-center">
                <li class="menu__group">
                    <a href="index.html#image-intro" class="menu__link">
                        <img src="assets/img/logo_150x150.png" alt="Mamie Lasagne" width="90"
                            height="90">
                    </a>
                </li>
                <div class="menu__group__container">
                    <li class="menu__group">
                        <a href="index.html#la-carte" class="r-link menu__link text-uppercase">La carte</a>
                    </li>
                    <div class="--separator-sm --secondary-separator"></div>
                    <li class="menu__group">
                        <a href="index.html#ldm" class="r-link menu__link text-uppercase">Les lasagnes du moment</a>
                    </li>
                    <div class="--separator-sm --secondary-separator"></div>
                    <li class="menu__group">
                        <a href="index.html#evenement" class="r-link menu__link text-uppercase">événement</a>
                    </li>
                    <div class="--separator-sm --secondary-separator"></div>
                    <li class="menu__group">
                        <a href="index.html#footer" class="r-link menu__link text-uppercase">Contact</a>
                    </li>
                </div>
                <div id="social-nav">
                    <a href="tel:+33633417167"><div class="custom-icon icon-phone-white"></div></a>
                    <a href="https://www.facebook.com/mamielasagnes/" target="_blank"><div class="custom-icon icon-fb-white"></div></a>
                    <a href="https://www.instagram.com/mamie_lasagnes/" target="_blank"><div class="custom-icon icon-instagram-white"></div></a>
                    <a href="https://www.tripadvisor.fr" target="_blank" class="mr-1"><div class="custom-icon icon-tripadvisor-white"></div></a>
                </div>
            </ul>
        </nav>
        <div class="menu__toggle">
            <button class="r-button menu__hamburger">
                <span class="m-hamburger">
                    <span class="m-hamburger__label">Open menu</span>
                </span>
            </button>
        </div>  
    </div>
    <!-- Mobile Menu End -->
    <!-- Contact Modal -->
    <div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="contact-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center flex-column">
                    <button id="modal-close-btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title font-weight-bold" id="contact-modal-label">Commandez</h3>
                    <div class="--separator-md --secondary-separator"></div>
                </div>
                <div class="modal-body">
                <form action="contact.php" method="POST" id="contact-form">
                        <div class="form-group">
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="lastname">Nom*</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="text" class="form-control light" id="nom" name="nom" placeholder="Votre nom" required data-msg="Ce champs est obligatoire">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="firstname">Prénom*</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="text" class="form-control light" id="prenom" name="prenom" placeholder="Votre prénom" required data-msg="Ce champs est obligatoire">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="lastname">Nom de l'entreprise</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="text" class="form-control light" id="entreprise" name="entreprise" placeholder="Le nom de votre entreprise">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">    
                                    <label for="email">Email*</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="text" class="form-control light" id="email" name="email" placeholder="Votre email" required data-msg="Ce champs est obligatoire">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="telephone">Téléphone</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="text" class="form-control light" id="telephone" name="telephone" placeholder="Votre téléphone">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="sujet">Adresse</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="text" class="form-control light" id="adresse" name="adresse" placeholder="L'adresse de la livraison"></textarea>
                                </div> 
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="message" required>Date</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="date" name="date" id="date">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="message" required>Heure</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <input type="time" name="heure" id="heure">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="message" required="">Message</label>
                                    <div class="--separator-sm --secondary-separator"></div>
                                    <textarea class="form-control light" id="message" name="message" placeholder="Votre message"></textarea>
                                </div>
                            </div>
                        </div>
                        <span class="">les champs suivis d'une * sont obligatoires</span>
                        <div class="d-flex flex-column">
                            <div class="g-recaptcha" data-sitekey="6LeFFskUAAAAAG3snI33MV3Btp_yOWpuhy7Dwf6I" data-callback="unlockForm" data-expired-callback="recaptchaExpired"></div>
                            <button type="submit" id="form-button" class="btn btn-sm semi-bold text-uppercase d-inline-block mx-2 pr-2 mt-2" disabled style="height: 78px; width: auto;">Envoyer</button>
                        </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
    <!-- Contact Modal End -->
    <!-- Cookies Message -->
    <div id="cookie-msg" class="animated row align-items-center justify-content-center pb-3 pb-md-0">
        <div class="alert custom-alert text-center col-md-8" role="alert">
                Nous utilisons des cookies pour des fonctionnalités liées aux réseaux sociaux, réaliser des statistiques, 
                vous proposer un contenu personnalisé et de la publicité, y compris sur des sites tiers. En cliquant sur "J'ACCEPTE", 
                en continuant votre navigation ou en cliquant sur le site, vous acceptez cette utilisation ainsi que le partage de 
                vos données avec nos partenaires. Pour en savoir plus sur notre utilisation des cookies, nos partenaires et la manière 
                de retirer votre consentement veuillez consulter la page "En savoir plus".
        </div>
        <div class="mt-1 col-md-2 text-center">
            <button type="button" id="cookie-btn" class="btn btn-sm font-weight-bold d-inline-block ml-2 pr-2" aria-label="Close">J'ACCEPTE</button>
            <a class="ml-2" href="cookies.html">En savoir plus</a>
        </div>
    </div>
    <!-- Cookies Message End -->
    <!-- Back to Top -->
    <a href="#mobile-header" class="smooth-scrolling"><div class="backToTop animated d-none d-md-block"></div></a>

    <script src="mobile-menu.js"></script>
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                if (this.hash !== "" && $(this).hasClass('smooth-scrolling')) {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });
        });
        $(window).scroll(function(){
            if($(window).scrollTop() > 50) {
                $(".menu").css("--uiMenuCircleBgColor", "#10434b");
                $(".m-hamburger").css("--uiHamburgerBgColor", "#FFF");
            }else{
                $(".menu").css("--uiMenuCircleBgColor", "#FFF");
                $(".m-hamburger").css("--uiHamburgerBgColor", "#10434b");
            }

            if($(window).scrollTop() > 1000){
                $(".backToTop").css("visibility", "visible");
                $(".backToTop").removeClass('fadeOut');
                $(".backToTop").addClass('fadeIn');
            }else{
                $(".backToTop").removeClass('fadeIn');
                $(".backToTop").addClass('fadeOut');
            }
        })     

        $("#contact-form").validate({
            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.prevent-defaut').click( function(e) {
            e.preventDefault();
        });

        $('#cookie-btn').click( function(e) {
            setCookie("MLCOOKIES", "true", 15);
            $('#cookie-msg').addClass('slideOutDown');

        })

        let menu_state = 0;
        $('.menu__toggle').click( function(e) {
            if(menu_state && $(window).scrollTop() < 50){
                $(".menu").css("--uiMenuCircleBgColor", "#FFF");
                $(".m-hamburger").css("--uiHamburgerBgColor", "#10434b");
                menu_state++;
            }else{
                $(".menu").css("--uiMenuCircleBgColor", "#10434b");
                $(".m-hamburger").css("--uiHamburgerBgColor", "#FFF");
                menu_state--;
            }
        })

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var accepted = getCookie("MLCOOKIES");
            if (accepted == "") {
                $('#cookie-msg').addClass('slideInUp');
                $('#cookie-msg').css("visibility", "visible");
            }
        }
    </script>
</body>

</html>