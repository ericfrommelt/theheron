$(document).ready(function() {

  // Toggle mobile nav
  var $menuBtn = $('#menu-button');
  var $menuWrap = $('#menu-wrapper');
  var $burgerTop = $('div.burger-top');
  var $burgerMiddle = $('div.burger-middle');
  var $burgerBottom = $('div.burger-bottom');
  var $menuItem = $('#navlist-mobile a');
  var menuOpen = false;

  function toggleMenu() {
    if (menuOpen === false) {
      $menuWrap.addClass('menu-open').removeClass('menu-closed');
      $burgerTop.addClass('burger-open').removeClass('burger-closed');
      $burgerMiddle.addClass('burger-open').removeClass('burger-closed');
      $burgerBottom.addClass('burger-open').removeClass('burger-closed');
      menuOpen = true;
    } else if (menuOpen === true) {
      $menuWrap.addClass('menu-closed').removeClass('menu-open');
      $burgerTop.addClass('burger-closed').removeClass('burger-open');
      $burgerMiddle.addClass('burger-closed').removeClass('burger-open');
      $burgerBottom.addClass('burger-closed').removeClass('burger-open');
      menuOpen = false;
    }
  }

  $menuBtn.on('click', function() {
    toggleMenu();
  });

  $menuItem.on('click', function() {
    toggleMenu();
  });

  //News
  // This is all quick and dirty, needs to be refactored
  var $newsItemOne = $('#news-list li:nth-child(1)');
  var $newsItemTwo = $('#news-list li:nth-child(2)');
  var $newsItemThree = $('#news-list li:nth-child(3)');
  var $newsItemFour = $('#news-list li:nth-child(4)');
  var $newsBtn = $('#news-nav div');

  $newsItemOne.addClass('show-news').removeClass('hide-news');

  $newsBtn.on('click', function() {
    if ($(this).hasClass('dot-1')) {
      $newsItemOne.addClass('show-news').removeClass('hide-news');
      $newsItemTwo.addClass('hide-news').removeClass('show-news');
      $newsItemThree.addClass('hide-news').removeClass('show-news');
      $newsItemFour.addClass('hide-news').removeClass('show-news');
    } else if ($(this).hasClass('dot-2')) {
      $newsItemOne.addClass('hide-news').removeClass('show-news');
      $newsItemTwo.addClass('show-news').removeClass('hide-news');
      $newsItemThree.addClass('hide-news').removeClass('show-news');
      $newsItemFour.addClass('hide-news').removeClass('show-news');
    } else if ($(this).hasClass('dot-3')) {
      $newsItemOne.addClass('hide-news').removeClass('show-news');
      $newsItemTwo.addClass('hide-news').removeClass('show-news');
      $newsItemThree.addClass('show-news').removeClass('hide-news');
      $newsItemFour.addClass('hide-news').removeClass('show-news');
    } else if ($(this).hasClass('dot-4')) {
      $newsItemOne.addClass('hide-news').removeClass('show-news');
      $newsItemTwo.addClass('hide-news').removeClass('show-news');
      $newsItemThree.addClass('hide-news').removeClass('show-news');
      $newsItemFour.addClass('show-news').removeClass('hide-news');
    }

    if ($(this).hasClass('circle-nav-off')) {
      $(this).addClass('circle-nav-on').removeClass('circle-nav-off');
      $(this).siblings().addClass('circle-nav-off').removeClass('circle-nav-on');
    }
  });


  // Smooth scrolling
  $(document).ready(function () {
    $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();

      var target = this.hash, $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 80 // - 200px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
      });
  });
});
