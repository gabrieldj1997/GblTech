
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Eccentric portfolio - personal website template | Contact : W3layouts</title>


    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>

    <div class="inner-banner">
        <div class="w3l-header inner-w3l-header" id="home">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0">
                    <a class="navbar-brand m-0 text-primary" href="index.html"><span class="fa fa-gamepad"></span>
                        Eccentric
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mr-lg-4">
                                <a class="nav-link pl-0 pr-0 font-weight-bold" href="index.html">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-lg-4">
                                <a class="nav-link pl-0 pr-0 font-weight-bold" href="about.html">About</a>
                            </li>
                            <li class="nav-item mr-lg-4">
                                <a class="nav-link pl-0 pr-0 font-weight-bold" href="services.html">Services</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link pl-0 pr-0 font-weight-bold" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <section class="w3l-contacts-12 py-5">
        <div class="container py-md-3">
            <div class="contacts12-main">
                <div class="title-section">
                    <h3 class="main-title-w3 mb-md-5 mb-4">Want to get in touch? <br>Find me on
                        <a href="tel:+12-331-456-789" class="text-primary">phone</a>,
                        <a href="mailto:mymail@mail.com" class="text-primary">email</a>,
                        <a href="#twitter" class="text-primary">twitter</a>
                        or <a href="#linkedin" class="text-primary">linkedin</a>.</h3>
                </div>
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="">
                    <div class="main-input">
                        <input type="text" name="w3lName" placeholder="Enter your name" class="contact-input"
                            required="" />
                        <input type="email" name="w3lSender" placeholder="Enter your mail" class="contact-input"
                            required="" />
                        <input type="number" name="w3lPhone" placeholder="Your phone number" class="contact-input"
                            required="" />
                        <textarea class="contact-textarea contact-input" name="w3lMessage"
                            placeholder="Enter your message" required=""></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn-primary btn primary-btn-style">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <section class="w3l-footers-1">
        <div class="footer bg-secondary">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-8 footer-left">
                            <p class="m-0">© Copyright 2020 Eccentric Portfolio. Design by <a
                                    href="https://w3layouts.com">W3layouts</a></p>
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