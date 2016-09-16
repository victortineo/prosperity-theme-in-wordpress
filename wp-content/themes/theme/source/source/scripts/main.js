$( document ).ready(function() {

var themeUrl = 'http://localhost/prosperity/wp-content/themes/theme/assets/';
var $window = $(window);
/* * * * * * * * * * * * * * * * * * 
* 				MENU 
* * * * * * * * * * * * * * * * * * */
var $hamburger = $('.hamburger');
var $menu = $('.menu');
var $menusite = $('.menu-site');
$menu.find('a').on('click', toggleMenu);
$hamburger.on('click', toggleMenu);
function toggleMenu(event) {
	$hamburger.toggleClass('is-active');
	$menu.toggleClass('is-active');
	setTimeout(function(){
		$(this).parent().toggleClass('is-active');
	}, 500);
};
$window.scroll(function(event) {
	if ($window.scrollTop()>=5){
    $menusite.addClass('active');
	} else {
    $menusite.removeClass('active');
	}
});
$window.trigger('scroll');
var $divFix = $('.mod-postit-header');
var $body = $('body');
$window.resize(function() {
	if($window.width()>950) {
		$body.css('padding-top', $divFix.outerHeight()-1+'px');
		$menusite.css('top', $divFix.outerHeight()-1+'px');
	} else {
		$body.css('padding-top', $menusite.outerHeight()+$divFix.outerHeight()+'px');
		$menusite.css('top', $divFix.outerHeight()-1+'px');
	}
});
$window.trigger('resize');
/* * * * * * * * * * * * * * * * * * 
* 			OWL-CAROUSEL 
* * * * * * * * * * * * * * * * * * */
var url = 'http://madknow.com.br/prosperity/wp-content/themes/theme/assets/libraries/owl.carousel/dist/owl.carousel.min.js';
$.getScript( url, function() {
	var owl =  $("#slider-site");
  	owl.owlCarousel({
      autoplay: true,
      loop: true,
      items: 1,
      animateOut: 'fadeOut',
      responsive: {
      	970: {
      		mouseDrag: false
      	}
      }
  	});
  	// Next and Prev
  	var $prev = $('.controls .button.prev');
  	var $next = $('.controls .button.next');
  	$prev.on('click', function(event) {
  		event.preventDefault();
  		owl.trigger('prev.owl.carousel', [300]);
  	});
  	$next.on('click', function(event) {
  		event.preventDefault();
  		owl.trigger('next.owl.carousel');
  	});
    // Navigation
    var $navOWL = $('.data-slide');
    $navOWL.on('click', function(event) {
      event.preventDefault();
      var position = $(this).data('slide');
      console.log(position);
      owl.trigger("to.owl.carousel", [position, 500, true]);
    });
/* * * * * * * * * * * * * * * * * * 
* 		OWL-CAROUSEL SERVICES
* * * * * * * * * * * * * * * * * * */
	var owl2 =  $("#slider-services");
  	owl2.owlCarousel({
      items: 4,
      dots: true,
      responsive: {
        0: {
          items: 1,
        },
        480: {
          items: 2,
        },
        768: {
          items: 3,
        },
        970: {
          items: 4,
        }
      }
  	});
/* * * * * * * * * * * * * * * * * * 
*     OWL-CAROUSEL CLIENTS
* * * * * * * * * * * * * * * * * * */
  var owl3 =  $("#slider-clients");
    owl3.owlCarousel({
      items: 6,
      animateOut: 'fadeOut',
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 2
        },
        768: {
          items: 4
        },
        970: {
          items: 6
        }
      }
    });
});
/* * * * * * * * * * * * * * * * * * 
*           SEARCH SITE
* * * * * * * * * * * * * * * * * * */
var $search = $('.search-site');
var $searchBox = $('#search');
var $searchToggle = $('#search #search-toggle');
var $inputSearch = $('#menu-search');
var $submitSearch = $('#submit-search');

$inputSearch.keyup(function(event) {
  if (event.keyCode == 13) {
    toggleSearch;
  }
});
$search.on('click', toggleSearch);
$searchToggle.on('click', toggleSearch);
$submitSearch.on('click', toggleSearch);
function toggleSearch(event) {
  $searchBox.toggleClass('is-active');
};
/* * * * * * * * * * * * * * * * * * 
*           ZIG ZAG
* * * * * * * * * * * * * * * * * * */
$window.resize(function() {
  zigzag();
}); // Window resize
$window.trigger('resize');
 zigzag();
// Function
function zigzag(e) {
  var count = 0;
  $('.zig__content-n1').each(function(e) {
    count++;
    var $zigHeight = $('.zig__n'+count+' .zig__content-n2');
    var $height = $zigHeight.innerHeight();
    $zigContent2 = $('.zig__n'+count+' .zig__content-n1').css('height', $height+'px');
  });
}
url = 'libraries/bootstrap/dist/js/bootstrap.min.js';
$.getScript( themeUrl+url, function(){

});

});