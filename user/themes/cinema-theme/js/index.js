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

  // find the active or next object
  // loop through all pages to get the dates
  var dates = $('.program-item').each(function(idx){
    var e = $(this);

    var date = $(this).parent().data('title').split(', ');
    var day = date[1].split('.')[0];
    var month = date[1].split('.')[1];

    var startTime = $(this).find('.starting-time').html();
    var hours = startTime.split(":")[0];
    var minutes = startTime.split(":")[1];

    var duration = e.find('.duration').html().split(" ")[0];

    // make (future?) start date
    var startDate = new Date("2020-" + month + "-" + day + "T" + hours + ":" + minutes + ":00+01:00");
    var endDate = new Date(startDate.getTime() + duration*60000);

    // make start date for each program point
    scheduleExecution(startDate, function() {
      // make active and now
      e.addClass('active-item').addClass("now");
      // open the kids
      e.find('.accordeon').removeClass('closed');
    });

    // make end date for each program point
    scheduleExecution(endDate, function() {
      // make active and now
      e.removeClass('active-item').removeClass("now");
      // open the kids
      e.find('.accordeon').addClass('closed');
      // make next one active and next
      dates.eq(idx + 1).addClass('active-item').addClass("next");
      // open the kids
      dates.eq(idx + 1).find('.accordeon').removeClass('closed');
    });
  });
});


// this is the future function
function scheduleExecution(futureDate, callback) {
    // Set an intermediary timeout at every 1 hour interval, to avoid the
    // 32 bit limitation in setting the timeout delay
    var maxInterval = 60 * 60 * 1000;
    var now = new Date();

    if ((futureDate - now) > maxInterval) {
        // Wait for maxInterval milliseconds, but make
        // sure we don't go over the scheduled date
        setTimeout(
            function() { scheduleExecution(futureDate); },
            Math.min(futureDate - now, maxInterval));
    } else {
        // Set final timeout
        setTimeout(callback, futureDate - now);
    }
}
