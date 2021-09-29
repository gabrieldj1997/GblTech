<!doctype html>
<html lang="en">

<head>

    @include('layout.structure.head', ['title' => 'Sobre'])

</head>

<body>

    @includeIf('layout.structure.header', ["text" => " Sobre  GBL Tech", "position" => false])


    <div class="w3l-about py-5">
        <div class="container py-lg-3">
            <div class="row about-content mb-lg-5">
                <div class="col-lg-6 pr-md-5">
                    <div class="image-block">
                        <img src="assets/images/me.png" class="img-fluid myphoto" alt="my photo" />
                        <img src="assets/images/cross.png" class="img-fluid pos" alt="dots" />
                    </div>
                </div>
                <div class="col-lg-6 info pl-lg-5 mt-lg-0 mt-5 pt-lg-0 pt-3 align-center">
                    <h4 class="">GBL Tech</h4>
                    <p class="mt-md-4 mt-3 mb-0">
                        Empresa criada com propósito de trazer inovações e facilidades para seu negócio.
                        Queremos ajudar você a crescer e prestar um serviço digno de parceira, deixando a parte tecnológica para a GBL Tech
                        e deixando você com mais tempo livre e sem preocupações.
                    </p>
                    <br />
                    <p class="m-0 mb-2">GBL Tech</p>
                    <h6>19/09/2021</h6>
                </div>
            </div>
        </div>
    </div>

    <section class="w3l-about-bottom py-5" id="about">
        <div class="container py-lg-5 py-md-3">
            <div class="row middle-grids">
                <div class="col-lg-7 advantage-grid-info">
                    <div class="advantage_left">
                        <h4>About my profile </h4>
                        <p class="">Accomplished web designer & front-end developer with extensive experience
                            building WordPress driven websites, HTML5, CSS3 and various web scripting technologies,
                            web standards and project management. Provide a diverse range of services including custom
                            theme/application/plugin development, SEO/SEM, and branding to an array of clients from a
                            variety of industries. Enthusiastic web professional motivated by challenging projects and
                            deadlines.</p>
                        <p class="mb-0">Nulla pellentesque mi non laoreet eleifend. Integer sed porttitor mollisar
                            lorem, at molestie arcust pulvinar ut. Proina fermentum est. Cras mist ipsum, consectetur
                            ipsum in, egestas tellus ipsu vestibulum tellus accumsan nec tristique justo.
                        </p>
                        <a href="#resume" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">Download CV</a>
                        <a href="#contact" class="secondary-btn-style btn-secondary btn mt-lg-5 mt-4 ml-1">Hire
                            Me</a>
                    </div>
                </div>
                <div class="col-lg-5 advantage-grid-info1">
                    <div class="advantage_left1 mt-lg-0 mt-5">
                        <img src="assets/images/about.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w3l-skills py-5" id="skills">
        <div class="container py-lg-5 py-md-3">
            <div class="modal-spa">
                <div class="row skills">
                    <div class="col-lg-6 bar-grids bargrids-left">
                        <h4> Minhas Skills </h4>
                        <h6>Back-End (.NET, Laravel, Node) <span> 90% </span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active bg-primary" style="width: 90%">
                            </div>
                        </div>
                        <h6>Banco (MySql, SqlServer, Oracel)<span> 70% </span></h6>
                        <div class="progress  w3-bar-grids">
                            <div class="progress-bar progress-bar-striped active" style="width: 70%">
                            </div>
                        </div>
                        <h6>Front-End (React, Bootstrap, Blade)<span>55% </span></h6>
                        <div class="progress  w3-bar-grids">
                            <div class="progress-bar progress-bar-striped active" style="width: 55%">
                            </div>
                        </div>
                        <h6>Sistemas Operacionais<span> 60% </span></h6>
                        <div class="progress  w3-bar-grids prgs-w3-last">
                            <div class="progress-bar progress-bar-striped active" style="width: 60%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bar-grids w3-bar-grids mt-lg-0 mt-5">
                        <h4> My Hobbies </h4>
                        <div class="row pl-lg-5 pr-lg-5">
                            <div class="col-4 hobbies-grid1 grid1">
                                <span class="fa fa-codepen bg-secondary"></span>
                                <h5>Coding</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid2">
                                <span class="fa fa-hourglass bg-secondary"></span>
                                <h5>Research</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid3">
                                <span class="fa fa-camera bg-secondary"></span>
                                <h5>Photography</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid4">
                                <span class="fa fa-plane bg-secondary"></span>
                                <h5>Travelling</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid5">
                                <span class="fa fa-headphones bg-secondary"></span>
                                <h5>Music</h5>
                            </div>
                            <div class="col-4 hobbies-grid1 grid6">
                                <span class="fa fa-tint bg-secondary"></span>
                                <h5>Thinking</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="w3l-block py-5">
        <div class="container py-lg-3">
            <h3 class="title mb-md-5 mb-4">Featured projects </h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 content" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/alexandra.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-sm-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/bench.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 content mt-md-0 mt-4" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <div class="content-overlay"></div>
                        <a class="image-zoom" href="#img">
                            <img src="assets/images/alexandra.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">This is a title</h3>
                                <p class="content-text">This is a short description</p>
                            </div>
                        </a>
                    </span>
                </div>
                <div class="content text-center mt-sm-5 mt-4">
                    <a href="#portfolio" class="btn btn-primary primary-btn-style">View more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="w3l-footers-1">
        <div class="footer bg-secondary">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-8 footer-left">
                            <p class="m-0">© Copyright 2020 Eccentric Portfolio. Design by <a href="https://w3layouts.com">W3layouts</a></p>
                        </div>
                        <div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
                            <ul class="social m-0 p-0">
                                <li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
                                <li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }


        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>

    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>