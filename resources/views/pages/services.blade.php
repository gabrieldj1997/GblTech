
<!doctype html>
<html lang="en">

<head>

@include('layout.structure.head', ["title" => "GBL Tech - Servicos"])

</head>

<body>

    @include('layout.structure.header', ["text" => "Servicos", "position" => false])

    <div class="w3-services py-5" id="services">
        <div class="container py-lg-3">
            <div class="title-section">
                <h3 class="main-title-w3">Nossos Serviços</h3>
                <div class="title-line">
                </div>
            </div>
            <div class="row w3-services-grids mt-lg-5 mt-4">
                <div class="col-lg-5 w3-services-left-grid">
                    <h4>O que fazemos?</h4>
                    <p>Nós na GBL levamos a solução para seus problemas para aplicação web ou mobile. Criamos aplicação de tarefas automatizadas
                        como tarefas repetidas por exemplo, nunca mais se preocupe em preencher uma tabela a mão, aplicativos que captura dados
                        e os centraliza em um lugar só, podendo cria gráficos automaticamente. Não se preocupe mais em deixar seus clientes esperando por uma resposta
                        quando se pode ter um BOT para te auxiliar. Traga-nos seu problema e eu lhe entregamos a solução!
                    </p>
                    <div class="more">
                        <a href="#section-services" class="btn-primary btn primary-btn-style mt-lg-5 mt-4">Mostre-me mais</a>
                    </div>
                </div>
                <div class="col-lg-7 w3-services-right-grid mt-lg-0 mt-5 pl-lg-5">
                    <div class="row w3-icon-grid-gap1">
                        <div class="col-md-6 col-sm-6 w3-icon-grid1">
                            <a href="#link">
                                <span class="fa fa-codepen text-primary" aria-hidden="true"></span>
                                <h3>Web design</h3>
                                <div class="clearfix"></div>
                            </a>
                            <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 w3-icon-grid1">
                            <a href="#link">
                                <span class="fa fa-mobile text-primary" aria-hidden="true"></span>
                                <h3>Mobile Apps</h3>
                                <div class="clearfix"></div>
                            </a>
                            <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 w3-icon-grid1">
                            <a href="#link">
                                <span class="fa fa-hourglass text-primary" aria-hidden="true"></span>
                                <h3>Animation</h3>
                                <div class="clearfix"></div>
                            </a>
                            <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 w3-icon-grid1">
                            <a href="#link">
                                <span class="fa fa-modx text-primary" aria-hidden="true"></span>
                                <h3>Photoshop</h3>
                                <div class="clearfix"></div>
                            </a>
                            <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 w3-icon-grid1">
                            <a href="#link">
                                <span class="fa fa-bar-chart text-primary" aria-hidden="true"></span>
                                <h3>Marketing</h3>
                                <div class="clearfix"></div>
                            </a>
                            <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                        </div>
                        <div class="col-md-6 col-sm-6 w3-icon-grid1">
                            <a href="#link">
                                <span class="fa fa-shopping-bag text-primary" aria-hidden="true"></span>
                                <h3>Development</h3>
                                <div class="clearfix"></div>
                            </a>
                            <p>Lorem ipsum dolor sit amet, init sed adipisci ngelit. In euismod faucibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3l-services-block py-5" id="classes">
        <div class="container py-lg-5 py-md-3">
            <div class="services-block_grids_bottom">
                <div class="row">
                    <div class="col-lg-4 col-md-6 service_grid_btm_left">
                        <div class="service_grid_btm_left1">
                            <div class="service_grid_btm_left2">
                                <span class="fa fa-desktop text-primary" aria-hidden="true"></span>
                                <h5>web development</h5>
                                <p>Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.</p>
                            </div>
                            <img src="assets/images/sarah.jpg" alt=" " class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service_grid_btm_left mt-md-0 mt-sm-5 mt-4">
                        <div class="service_grid_btm_left1">
                            <div class="service_grid_btm_left2">
                                <span class="fa fa-camera-retro text-primary" aria-hidden="true"></span>
                                <h5>Photography</h5>
                                <p>Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.</p>
                            </div>
                            <img src="assets/images/bench.jpg" alt=" " class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service_grid_btm_left mt-lg-0 mt-sm-5 mt-4">
                        <div class="service_grid_btm_left1">
                            <div class="service_grid_btm_left2">
                                <span class="fa fa-apple text-primary" aria-hidden="true"></span>
                                <h5>Apps development</h5>
                                <p>Maecenas sodales eu velit in varius. vitae sem vitae urna tempus commodo.</p>
                            </div>
                            <img src="assets/images/alexandra.jpg" alt=" " class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3l-open-block-services py-5">
        <div class="container py-lg-3">
            <h3 class="head-title">What I Expert in</h3>
            <div class="row mt-5 pt-3">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <span class="fa fa-laptop service-icon bg-primary" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">Web design</h4>
                        <div class="open-description">
                            <p>Maecenas sodales eu commodo ligula eget dolor dolor sit amet ligula</p>
                            <a href="#read" class="text-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5 pt-md-0 pt-3">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <span class="fa fa-caret-square-o-up service-icon bg-primary" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">Graphic design</h4>
                        <div class="open-description">
                            <p>Maecenas sodales eu commodo ligula eget dolor dolor sit amet ligula</p>
                            <a href="#read" class="text-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 pt-lg-0 pt-3">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <span class="fa fa-adjust service-icon bg-primary" aria-hidden="true"></span>
                        </div>
                        <h4 class="mission">SEO</h4>
                        <div class="open-description">
                            <p>Maecenas sodales eu commodo ligula eget dolor dolor sit amet ligula</p>
                            <a href="#read" class="text-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3l-services py-5" id="section-services">
        <div class="container principles-grids principles-grids1 py-lg-3">
            <div class="scrollbar -services-scroll">
                <div class="row abt-btm pt-4">
                    <div class="col-lg-3 col-sm-6 bottom-gds">
                        <div class="elite-services1">
                            <div class="bott-img">
                                <div class="icon-holder bg-primary">
                                    <span class="fa fa-laptop service-icon" aria-hidden="true"></span>
                                </div>
                                <h4 class="mission">Webdesign</h4>
                                <div class="description">
                                    <p>Enean eget dolor dolor sit amet commodo ligula</p>
                                    <a href="#read" class="text-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 bottom-gds mt-md-0 mt-5">
                        <div class="elite-services2">
                            <div class="bott-img">
                                <div class="icon-holder bg-primary">
                                    <span class="fa fa-grav service-icon aria-hidden=" true"></span>
                                </div>
                                <h4 class="mission">Graphic design</h4>
                                <div class="description">
                                    <p>Commodo ligula eget dolor dolor sit amet ligula</p>
                                    <a href="#read" class="text-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 bottom-gds mt-lg-0 mt-5">
                        <div class="elite-services3">
                            <div class="bott-img">
                                <div class="icon-holder bg-primary">
                                    <span class="fa fa-caret-square-o-up service-icon" aria-hidden="true"></span>
                                </div>
                                <h4 class="mission">UI Design</h4>
                                <div class="description">
                                    <p>Enean eget dolor dolor sit amet commodo ligula</p>
                                    <a href="#read" class="text-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 bottom-gds mt-lg-0 mt-5">
                        <div class="elite-services4">
                            <div class="bott-img">
                                <div class="icon-holder bg-primary">
                                    <span class="fa fa-adjust service-icon" aria-hidden="true"></span>
                                </div>
                                <h4 class="mission">Branding</h4>
                                <div class="description">
                                    <p>Commodo ligula eget dolor dolor sit amet ligula</p>
                                    <a href="#read" class="text-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.structure.footer')

    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>

        window.onscroll = function () {
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
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>