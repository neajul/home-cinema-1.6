// on load
$(function() {
  // initiate the main slider
  // make slider for different days
  var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    loop: false,
    allowTouchMove: false,
    // Navigation arrows
    navigation: {
      nextEl: '.custom-swiper-button-next',
      prevEl: '.custom-swiper-button-prev',
    },
  })

  // custom navigation for slider
  // make sure the date on top changes
  mySwiper.on('slideChange', function () {
    // get new title from data attribute of new slide
    var newTitle = $(mySwiper.slides[mySwiper.activeIndex]).data('title');
    // change the date
    $('.current-day').html(newTitle);
  });

  // accordeon function
  // find all accordeon trigers, add click funtion to them
  $('.accordeon.trigger').click(function(){
    // find siblings, toggle class
    $(this).siblings().toggleClass('closed');
    $(this).toggleClass('closed');
  });

  // cinema function!
  // defining the vimeo video
  var iframe = document.querySelector('iframe');
  var player = new Vimeo.Player(iframe);

  // opening the cinema function
  $('.enter').click(function(){
    $('.header').toggleClass('cinema-open');
    $('#body .wrapper').toggleClass('cinema-open');
    $(this).toggleClass('cinema-open');
    // depending on if we're opening or closing, other stuff happens with the video
    if ($(this).hasClass('cinema-open')) {
      // we are opening the cinema
      // play vimeo video
      player.play();
      player.setMuted(false);
      $({someValue: 0}).animate({someValue: 100}, {
          duration: 800,
          step: function() {
            player.setVolume(Math.ceil(this.someValue)/100);
          }
      });
    } else {
      // closing the cinema
      $({someValue: 100}).animate({someValue: 0}, {
          duration: 800,
          step: function() {
            player.setVolume(Math.ceil(this.someValue)/100);
          }, complete: function(){
            player.setMuted(true);
          },
      });
    }
  });

  // idle function for cinema
  var idleTimer = null;
  var idleState = false;
  var idleWait = 2000;
  $('*').bind('mousemove keydown scroll', function () {
      clearTimeout(idleTimer);
      if (idleState == true) {
          // Reactivated event
          $('.header').removeClass('fade-out');
      }
      idleState = false;
      idleTimer = setTimeout(function () {
          // Idle Event
          $('.header').addClass('fade-out');
          idleState = true; }, idleWait);
  });
  $("body").trigger("mousemove");
});
