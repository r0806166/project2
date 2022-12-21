<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebDec</title>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



    <!-- Custom styles for this template -->

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/logo/WIT_ALL.svg" alt="logo webdec"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#about">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#about">Web Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="">Repair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="">Webshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="contact" class="contact section-bg bgi">
        <div class="container">

            <div class="section-title text-center contact_verzonden">
                <h2 class="text-uppercase heading_lines_fact">Uw bericht is succesvol verzonden!</h2>
                <p>Wij zullen u zo spoedig mogelijk contacteren.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <?php
                    $name = $_POST["name"];
                    $visitor_email = $_POST["email"];
                    $message = $_POST["message"];
                    $email_from = "webdeconline@gmail.com";
                    $email_suject = "New Form Submission";
                    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
                    $to = "webdeconline@gmail.com";
                    $headers = "From: $email_from \r\n";
                    $headers = "Reply-To: $visitor_email \r\n";
                    mail($to,$email_suject,$email_body,$headers);
                    header("Location: index.html");
                    ?>
                </div>
                <div class="col-lg-6">
                    <p><i class="far fa-paper-plane"></i></p>
                </div>
            </div>
        </div>
    </section>

    <!--
==================================================
footer
==================================================
-->

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3 class="text-uppercase">webdec</h3>
                            <p class="pb-3"><em>Voel u vrij oms ons te contacteren!</em></p>
                            <p>
                                Kleinhoefstraat 4<br>
                                2440 Geel<br><br>
                                <strong>Tel:</strong> (+32) 0478810227<br>
                                <strong>Email:</strong> webdeconline@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Menu</h4>
                        <ul>
                            <li><i></i> <a href="#">Home</a></li>
                            <li><i></i> <a href="index.html">About us </a></li>
                            <li><i></i> <a href="index.html">Web Development</a></li>
                            <li><i></i> <a href="index.html">Repair</a></li>
                            <li><i></i> <a href="index.html">Webshop</a></li>
                            <li><i></i> <a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 about-img">
                        <img class="portfolio_img" src="img/logo/WIT_ALL.svg" alt="logo webdec">
                        <div class="copyright">
                            &copy; Copyright <strong><span>WEBDEC</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            Designed by <a href="index.html">WEBDEC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
