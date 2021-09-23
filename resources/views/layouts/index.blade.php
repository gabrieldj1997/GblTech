<!doctype html>
<html lang="en">

@yield('head')

<body>

@yield('header')

@yield('slider')

@yield('about-me')

@yield('galery')

@yield('mobile')

@yield('clients')

@yield('services')

@yield('cadaster')

@yield('footer')

@yield('button-to-top')

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
<script>
  (function () {

    var slidersContainer = document.querySelector('.sliders-container');


    var msNumbers = new MomentumSlider({
      el: slidersContainer,
      cssClass: 'ms--numbers',
      range: [1, 4],
      rangeContent: function (i) {
        return '0' + i;
      },
      style: {
        transform: [{
          scale: [0.4, 1]
        }],
        opacity: [0, 1]
      },

      interactive: false
    });



    var titles = [
      'Branding ',
      'Awesome',
      'Creative',
      'Portfolio'
    ];

    var msTitles = new MomentumSlider({
      el: slidersContainer,
      cssClass: 'ms--titles',
      range: [0, 3],
      rangeContent: function (i) {
        return '<h3>' + titles[i] + '</h3>';
      },
      vertical: true,
      reverse: true,
      style: {
        opacity: [0, 1]
      },

      interactive: false
    });



    var msLinks = new MomentumSlider({
      el: slidersContainer,
      cssClass: 'ms--links',
      range: [0, 3],
      rangeContent: function () {
        return '<a href="about.html" class="ms-slide__link btn">View More</a>';
      },
      vertical: true,
      interactive: false
    });



    var pagination = document.querySelector('.pagination');
    var paginationItems = [].slice.call(pagination.children);


    var msImages = new MomentumSlider({

      el: slidersContainer,

      cssClass: 'ms--images',

      range: [0, 3],
      rangeContent: function () {
        return '<div class="ms-slide__image-container"><div class="ms-slide__image"></div></div>';
      },

      sync: [msNumbers, msTitles, msLinks],

      style: {
        '.ms-slide__image': {
          transform: [{
            scale: [1.5, 1]
          }]
        }
      },



      change: function (newIndex, oldIndex) {
        if (typeof oldIndex !== 'undefined') {
          paginationItems[oldIndex].classList.remove('pagination__item--active');
        }
        paginationItems[newIndex].classList.add('pagination__item--active');
      }
    });



    pagination.addEventListener('click', function (e) {
      if (e.target.matches('.pagination__button')) {
        var index = paginationItems.indexOf(e.target.parentNode);
        msImages.select(index);
      }
    });

  })();
</script>

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