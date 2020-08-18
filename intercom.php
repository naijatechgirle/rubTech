<?php
session_start();

$_SESSION['mailsent'] = null;
?>
<!DOCTYPE html>
<html lang="en">

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

    <title>rubtech.com/intercom-systems</title>

    <link href="./assets/stylesheets/main.css" rel="stylesheet" />
    <link href="./assets/stylesheets/style.css" rel="stylesheet" />
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2486740551543591');
    fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=2486740551543591&ev=PageView
    &noscript=1" />
    </noscript>
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

    <div class="container " style="margin-top: 70px;">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="template-example">
                    <h2 class="text-center">Intercom Systems</h2>
                    <p>Our intercom system provides a two-way communication electronic device that contains circuitry for the purpose of transmitting and receiving audio and video transmissions. Our intercom system ranges from home intercom system, office intercom system, wired and wireless intercom system. We have display and non-display phone boxes as well as PABX with console that enables local and international calls. Also, we are capable of providing and programming small and multiple intercom extensions.</p>
                    <img src="./assets/images/solar-lights-img3.jpg" alt="Street Lights"
                        class="img-responsive"><br>
                         <p>
                    The need for communication is high in our modern day world. Whether it
                    is to get your kids on an errand, or to tell your secretary not to let anyone in till further
                    notice, or even to let your partner know that the meal is ready, intercoms are something that every
                    household and office needs.
                    </p>
                    <p>
                    Whether you need to connect your entire office building, or just two parts of your
                    house, Rubtech Technologies has the perfect solution for you. Even, better, our solutions are very
                    pocket friendly, and high quality, you will never have any need for maintenance.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="template-example">
                    <div class="row">
                        <div class="col-xs-12 col-md-9">
                            <div class="section-container-spacer">
                                <h2 class="text-center">Get in touch</h2>
                                <p>To get yourself an intercom solution please fill the form bellow and
                    we will get back to you soon, so we can discuss and find a solution that best matches your needs.</p>
                            </div>
                            <form id="myform" name="myform" action="form.php" method="post" onsubmit="return validate()">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name(first and last name)"
                                                autofocus rquired/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Email" requred/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="tel" name="mobile" class="form-control" id="mobile"  pattern="[0-9]{11}"
                                                placeholder="Phone number" requred/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="service" name="service" rows="3" placeholder="Enter service(s)" reqired></textarea>
                                </div>
                                <div>

                                    <button type="submit" class="btn btn-primary d-block" id="button">Send
                                        message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                new Date().getFullYear() > 2010 && document.write('-' + new Date().getFullYear());
                </script>
                <a class="navbar-bran" href="./index.html" style="font-family: magento;">rub<span class="navColor">tech
                    </span></a>| All rights reserved |
                <a href="./privacy.html" class="navColor">Privacy Policies</a>
            </small>
		</div>
	</div>	

	<script>
        document.addEventListener('DOMContentLoaded', function(event) {
            navbarToggleSidebar();
        });
	</script>
	<script type="text/javascript" src="./js/main.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</body>

</html>