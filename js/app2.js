


//console.log('hello')

// image zoom
$('.toggle-img').click( function(){
   $(this).toggleClass('big'); 
});

//equal heights
$(function() {
$(".content").not($(".contenthalf .content")).matchHeight();
});


/*set contenthalf to module.height / 2 */

//$.fn.matchHeight._throttle = 500;


$.fn.matchHeight._afterUpdate = function (event, groups) {
    // do something after all updates are applied
    //alert($('.module').height());
    var height = ($('.module .content').height() / 2);
    height = height - 60; /*head + foot / 2*/
    // height = 310;
   
    $('.contenthalf .content').height(height);

}
$(".story").matchHeight({
    byRow: false,
});

$(function() {
    $('.post').matchHeight();
});
$(".match").matchHeight({
    byRow: false,
});

$(function() {
    $('.eqhItem').matchHeight();
});

// removing even heights on smaller screens
if ($(window).width() < 992) {
    $('.match, .story, .eqhItem').matchHeight({ remove: true });
  }
if ($(window).width() < 1199) {
    $('.story').matchHeight({ remove: true });
  }




/* ---- scroll to top ----*/
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
	// accordion
	$("button[data-toggle='collapse'],  a[data-toggle='collapse']").on('click', function (event) {
	    
	    setTimeout(function () {
	      $.fn.matchHeight._update();
	      //  $.fn.matchHeight._apply(".match");
	    }, 350);
	   
	});

/*------ topbar ------*/


	$('.open .dropdown-toggle').on('click', function (event) {

	    var width = 400;

	    $("main").css('transform', 'translatey(' + 0 + 'px)');

	});

	
	$('.nav-main li a').on('click', function (event) {

	    $('.nav-main li').removeClass('open');
	    if (!($(this).hasClass("dropdown-toggle"))) {
	        $("main").css('transform', 'translatey(' + 0 + 'px)');
	        $("footer").css('transform', 'translatey(' + 0 + 'px)');
	    }
	});

    
	$('body').on('click', function (event) {
        
	    if ( $('.menu-large').hasClass('open') )
            {
	        $("main").css('transform', 'translatey(' + 0 + 'px)');
	        $("footer").css('transform', 'translatey(' + 0 + 'px)');
	}
	});
    

	$('.dropdown-toggle').on('click', function (event) {
	  
	    if ($(window).width() > 767)
            {
	    var width = 400;


	    if (($(this).parent().hasClass("open"))) {
	        $("main").css('transform', 'translatey(' + 0 + 'px)');

	        $("footer").css('transform', 'translatey(' + 0 + 'px)');
	    }
	    else
	    {
	        $("main").css('transform', 'translatey(' + width + 'px)');
	        $("footer").css('transform', 'translatey(' + width + 'px)');
	    }
	    }

	});

	if(window.location.href.indexOf("index") > -1) {
	    
	    $('.home').addClass("open");
	}

	if (window.location.href.indexOf("tjenester") > -1) {

	    $('.tjenester').addClass("open");
	}
    
});

/* ------ animate fullsize search field ----*/
$(function() { 

    $('a[href="#triggerSearch"]').on('click', function(event) {
		event.preventDefault();
		//$('.topbar-search .input-group > input').val('');
		$('.topbar-search').toggleClass('open');
		$('a[href="#triggerSearch"]').closest('li').toggleClass('active');

		if ($('.topbar-search').hasClass('open')) {
			/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
			setTimeout(function() { 
				$('.topbar-search .form-control').focus();
			}, 100);
		}			
	});

	$(document).on('keyup', function(event) {
		if (event.which == 27 && $('.topbar-search').hasClass('open')) {
			$('a[href="#triggerSearch"]').trigger('click');
		}
	});
    
});

/*---- animate end ----*/
/* ----- Show hide admin section in create workspace --- */

$('.needHelp').click(function(){
    if($(this).is(":checked")) {
        $('.disabled').show();
        $('.editable').hide();
    } else {
    	$('.disabled').hide();
    	$('.editable').show();
   }
});

