<!doctype html>
<html lang="en">

<head>

    @include('layout.structure.head', ['title' => 'Sobre'])

</head>

<body>

    @includeIf('layout.structure.header', ["text" => " Sobre GBL Tech", "position" => false])


    <div class="w3l-about py-5">
        <div class="container py-lg-3">
            <div class="row about-content mb-lg-5">
                <div class="col-lg-6 pr-md-5">
                    <div class="image-block">
                        <img src="assets/images/me.png" class="img-fluid myphoto" alt="my photo" style="border-radius: 100%;box-shadow: 0px 0px 59px #01e4f4;" />
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
            <h1>Equipe</h1>
            <div class="row">

            </div>
        </div>
    </section>

    <section class="w3l-block py-5">
        <div class="container py-lg-3">
            <h3 class="title mb-md-5 mb-4">Projetos</h3>
            <div class="row justify-content-center">
                <div class="col-md-3 project-card">
                    <div class="content-overlay"></div>
                    <a class="image-zoom" href="#img">
                        <img src="assets/images/alexandra.jpg" class="img-fluid w3layouts agileits" alt="portfolio-img">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">This is a title</h3>
                            <p class="content-text">This is a short description</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('layout.structure.footer')

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