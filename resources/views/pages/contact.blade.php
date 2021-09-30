<!doctype html>
<html lang="en">

<head>

    @include('layout.structure.head', ['title' => 'GBL Tech - Contato'])

</head>

<body>

    @includeIf('layout.structure.header', ["text" => " Contato", "position" => false])


    <section class="w3l-contacts-12 py-5">
        <div class="container py-md-3">
            <div class="contacts12-main">
                <div class="title-section">
                    <h3 class="main-title-w3 mb-md-5 mb-4">Qual seu pedido? <br>Fale comigo através do
                        <a href="https://api.whatsapp.com/send?phone=5561985863577" class="text-primary">whatsapp</a>,
                        <a href="https://t.me/Gabrieldj1997" class="text-primary">telegram</a>
                        ou <a href="https://www.linkedin.com/in/gabrieldj1997/" class="text-primary">linkedin</a>.
                    </h3>
                </div>
                <form action="#" method="#" class="form-cadaster">
                    <div class="main-input">
                        <input type="text" name="w3lName" placeholder="Digite seu nome" class="contact-input" required="" />
                        <input type="email" name="w3lSender" placeholder="Digite seu Email" class="contact-input" required="" />
                        <input type="number" name="w3lPhone" placeholder="Digite seu número" class="contact-input" required="" />
                        <textarea class="contact-textarea contact-input" name="w3lMessage" placeholder="Digite sua mensagem" required=""></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn-primary btn primary-btn-style">Enviar</button>
                    </div>
                </form>
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

    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>