
// Scroll Nav Hide/Show
(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".show-on-scroll").removeClass('active');

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

            // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 600) {
                $('.show-on-scroll').addClass('active');
            } else {
                $('.show-on-scroll').removeClass('active');
            }
        });
    });

});
}(jQuery));


// Testimonial Carousel
/*$(document).ready(function() {
  $('#testimonial-carousel').owlCarousel({
    loop: false,
    margin: 15,
    dots: false,
    autoplay: false,
    responsiveClass: true,
    smartSpeed :900,
    navText : ["<img src='/web/img/gallery-arrow-left.png'>","<img src='/web/img/gallery-arrow-right.png'>"],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      576: {
        items: 2,
        nav: true
      },
      768: {
        items: 3,
        nav: true
      },
      1200: {
        items: 2,
        nav: true
      },
      1440: {
        items: 5,
        nav: true
      }
    }
  })
});*/




/*jQuery(document).ready(function($) {

    var carousel = $("#testimonial-carousel");
    carousel.owlCarousel({
        loop : true,
        items : 4,
        margin:0,
        nav : true,
        autoWidth:true,
        autoHeight:true,
        dots : false,
        responsiveClass: true,
        smartSpeed :900,
        navText : ["<img src='/web/img/gallery-arrow-left.png'>","<img src='/web/img/gallery-arrow-right.png'>"],
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          576: {
            items: 2,
            nav: true
          },
          768: {
            items: 3,
            nav: true
          },
          1200: {
            items: 4,
            nav: true
          },
          1440: {
            items: 5,
            nav: true
          }
        }
    });

    checkClasses();
    carousel.on('translated.owl.carousel', function(event) {
        checkClasses();
    });

    function checkClasses(){
        var total = $('#testimonial-carousel .owl-stage .owl-item.active').length;

        $('#testimonial-carousel .owl-stage .owl-item').removeClass('firstActiveItem lastActiveItem');

        $('#testimonial-carousel .owl-stage .owl-item.active').each(function(index){
            if (index === 0) {
                // this is the first one
                $(this).addClass('firstActiveItem');
            }
            if (index === total - 1 && total>1) {
                // this is the last one
                $(this).addClass('lastActiveItem');
            }
        });
    }


});*/



// Testimonial Carousel
/*var brandSlider = $('#testimonial-carousel');
brandSlider.owlCarousel({
    loop: false,
    margin: 15,
    dots: false,
    autoplay: false,
    autoHeight:true,
    responsiveClass: true,
    smartSpeed :900,
    navText : ["<img src='/web/img/gallery-arrow-left.png'>","<img src='/web/img/gallery-arrow-right.png'>"],
    responsive: {
      0: {
          items: 1
      },
      340: {
          items: 2
      },
      480: {
          items: 3
      },
      768: {
          items: 4
      },
      992: {
          items: 2
      },
      1200: {
          items: 2
      }
    }
})
function brandSliderClasses() {
    brandSlider.each(function() {
        var total = $(this).find('.owl-item.active').length;
        $(this).find('.owl-item').removeClass('firstactiveitem');
        $(this).find('.owl-item').removeClass('lastactiveitem');
        $(this).find('.owl-item.active').each(function(index) {
            if (index === 0) {
                $(this).addClass('firstactiveitem')
            }
            if (index === total - 1 && total > 1) {
                $(this).addClass('lastactiveitem')
            }
        })
    })
}
brandSliderClasses();
brandSlider.on('translated.owl.carousel', function(event) {
    brandSliderClasses()
}); 
*/




// Smooth Scroll
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('.post-tabs a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.post-tabs a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.details-post-tabs a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
};



// Smooth Scroll
/*$(".details-post-tabs a[href^='#']").on('click', function(e) {

   // prevent default anchor click behavior
   e.preventDefault();

   // store hash
   var hash = this.hash;

   // animate
   $('html, body').animate({
       scrollTop: $(hash).offset().top
     }, 300, function(){

       // when done, add hash to url
       // (default click behaviour)
       window.location.hash = hash;
     });

});*/




/*$(document).ready(function() {
    $(".details-post-tabs a[href^='#']").bind('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        var target = $(this).attr("href"); // Set the target as variable

        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').stop().animate({
            scrollTop: $(target).offset().top
        }, 600, function() {
            location.hash = target; //attach the hash (#jumptarget) to the pageurl
        });
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        return false;
    });
});

$(window).scroll(function() {
    var scrollDistance = $(window).scrollTop();

    // Show/hide menu on scroll
    if (scrollDistance >= 350) {
       $('.details-post-tabs').fadeIn("fast");
    } else {
       $('.details-post-tabs').fadeOut("fast");
    }
  
    // Assign active class to nav links while scolling
    /*$('.item-box-area').each(function(i) {
        if ($(this).position().top <= scrollDistance) {
            $('.details-post-tabs a.active').removeClass('active');
            $('.details-post-tabs a').eq(i).addClass('active');
        }
    });*/
// }).scroll();*/




/*====================================
//  Equal Height Divs
======================================*/ 
// Select and loop the container element of the elements you want to equalise
/*$('.container').each(function(){

// Cache the highest
var highestBox = 0;

// Select and loop the elements you want to equalise
$('.small-place-box .place-body', this).each(function(){
  
  // If this box is higher than the cached highest then store it
  if($(this).height() > highestBox) {
    highestBox = $(this).height(); 
  }

});
      
// Set the height of all those children to whichever was highest 
$('.small-place-box .place-body', this).height(highestBox);
              
});*/