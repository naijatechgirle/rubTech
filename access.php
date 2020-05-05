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

    <title>Title page</title>

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
    <!-- Add your content of header -->
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

    <!-- Add your site or app content here -->
    <div class="container " style="margin-top: 70px;">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="template-example">
                    <h2 class="text-center">Access Control Systems</h2>
                    <p>
                        Access control systems can help you better keep important things safe, keep your family safe,
                        prevent theft, and even help you guard secrets, be it personal or business.
                    </p>
                    <img src="./assets/images/access-control-img2.jpeg" alt="access contol system"
                        class="img-responsive"><br>
                    <p>It is very easy to lose important things, when the wrong people have access to the right things.
                        Safeguarding your building and house or parts of your office from people you do not trust
                        completely is very important. It is your sole responsibility to keep the wrong people away from
                        the right things in your office or home, so that you do not lose very valuable things.
                        We at Rubtech Technologies are very conscious of security and safety, so we have developed the
                        very best access control systems and have access to procure and install international standard
                        systems to suit your needs, and secure you.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-md-5">
                <div class="template-example">
                    <div class="row">
                        <div class="col-xs-12 col-md-9">
                            <div class="section-container-spacer">
                                <h2 class="text-center">Get in touch</h2>
                                <small>fill the form below, and we will call you to discus, help you find the best
                                    solution to fit your very specification.</small>
                            </div>
                            <form id="myform" name="myform" action="form.php" method="post" onsubmit="return validate()">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your fullname(first and last name)"
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
                                            <input type="tel" name="mobile" class="form-control" id="mobile" pattern="["
                                                placeholder="Phone number" requred/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="text" name="text" rows="3" placeholder="Enter service(s)" reqired></textarea>
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
                            <a href="#" class="fa-icon" title="">
                                <i class="fa fa-phone" aria-hidden="true">08037963488</i>
                            </a>
                        </p>
                    </div>
                    <!-- <div>
                            <p><small>© Untitled | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small></p>
                        </div> -->

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