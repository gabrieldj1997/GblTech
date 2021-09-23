<!doctype html>
<html lang="en">

@includeIf('..\layout.structure.head')

<body>

@includeIf('..\layout.structure.header')

@includeIf('..\layout.section.slider')

@includeIf('..\layout.section.about-me')

@includeIf('..\layout.section.galery')

@includeIf('..\layout.section.mobile')

@includeIf('..\layout.section.clients')

@includeIf('..\layout.section.services')

@includeIf('..\layout.section.cadaster')

@includeIf('..\layout.section.footer')

@includeIf('..\layout.section.button-to-top')

@includeIf('..\layout.structure.footer')

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

<script src="assets/js/momentum-slider.min.js"></script>
<script src="assets/js/index.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>


</body>
</html>