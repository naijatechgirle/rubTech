<?php
session_start();

if($_SESSION['mailsent']){
    echo  '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta content="description" name="description" />
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="./assets/favicon.ico" rel="icon" />

    <title>rubtech.com/success</title>

    <link href="./assets/stylesheets/main.css" rel="stylesheet" />
    <link href="./assets/stylesheets/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top bg-danger" style="background-color: #343A40;">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.html" style="font-family: magento;">rub<span
                            class="navColor">tech</span></a>
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                            <a href="./index.html" class="anchor-link">Home</a>
                        </li>
                        <li>
                            <a href="./index.html#contact-section-container" class="anchor-link">Contact Us</a>
                        </li>
                        <li>
                            <a href="./index.html#services" class="btn btn-default navbar-btn">Products</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" id="noPad" style="color:black; margin:auto;">
        <div>
            <h2 class="text-center" style="justify-content: center; margin: auto;">Thanks for contacting us, we will get back to you shortly.</h2>
        </div>
    </div>


    <footer class="footer-container white-text-container bg-danger" id="contact-section-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-bottom: 30px;">
                    <h4>About us</h4>
                    <div>
                        <p><a href="#">Find Us</a></p>
                        <p><a href="#services">Our Services</a></p>
                        <p><a href="#services">Our Products</a></p>
                    </div>
                </div>

                <div class="col-md-4 contact" style="margin-bottom: 30px;">
                    <h4>Contact Us</h4>
                    <div>
                        <p>
                            #30 Mbari Street, Opp. Tweeter Bites, Owerri, Imo State.
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"> 08037963488</i>
                        </p>
                    </div>

                </div>

                <div class="col-md-4">

                    <h4>Find Us</h4>

                    <div class="form-group">
                        <a href="#" class="fa-icon" title="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="fa-icon" title="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="fa-icon" title="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid bg-light px-0">
        <div class="text-center p-0">
            <small class="m-0 p-0">
                Copyright &copy;
                <script>
                new Date().getFullYear() > 2010 && document.write(`-` + new Date().getFullYear());
                </script>
                <a class="navbar-bran" href="./index.html" style="font-family: magento;">rub<span class="navColor">tech
                    </span></a>| All rights reserved |
                <a href="./privacy.html" class="navColor">Privacy Policies</a>
            </small>
		</div>
    </div>	
    
    <script>
        document.addEventListener(`DOMContentLoaded`, function(event) {
            navbarToggleSidebar();
        });
	</script>
	<script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>

    </body>
</html>';
    } else if($_SESSION['mailsent'] === false) {
    echo '
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta content="description" name="description" />
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no" />

    <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="./assets/favicon.ico" rel="icon" />

    <title>rubtech.com/failed</title>

    <link href="./assets/stylesheets/main.css" rel="stylesheet" />
    <link href="./assets/stylesheets/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top bg-danger" style="background-color: #343A40;">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.html" style="font-family: magento;">rub<span
                            class="navColor">tech</span></a>
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                            <a href="./index.html" class="anchor-link">Home</a>
                        </li>
                        <li>
                            <a href="./index.html#contact-section-container" class="anchor-link">Contact Us</a>
                        </li>
                        <li>
                            <a href="./index.html#services" class="btn btn-default navbar-btn">Products</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" id="noPad" style="color:black; margin:auto;">
        <div>
            <h2 class="text-center" style="justify-content: center; margin: auto;">Oops! Please fill the form again.</h2>
        </div>
    </div>



    <div class="container-fluid bg-light px-0">
        <div class="text-center p-0">
            <small class="m-0 p-0">
                Copyright &copy;
                <script>
                new Date().getFullYear() > 2010 && document.write(`-` + new Date().getFullYear());
                </script>
                <a class="navbar-bran" href="./index.html" style="font-family: magento;">rub<span class="navColor">tech
                    </span></a>| All rights reserved |
                <a href="./privacy.html" class="navColor">Privacy Policies</a>
            </small>
		</div>
    </div>	
    
    <script>
        document.addEventListener(`DOMContentLoaded`, function(event) {
            navbarToggleSidebar();
        });
	</script>
	<script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>

    </body>
</html>';
    }