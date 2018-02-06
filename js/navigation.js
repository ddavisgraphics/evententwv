$(document).ready(function() {
	$('.toggle-menu').click(function() {
		$('nav').toggle();
	});
});


// Css Tricks Smooth Scroll
// =========================================

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

// Email Validation and AJAX Call
// ===========================================

$(function(){
  // $('form').ajaxSubmit({
  //   url: 'email.php',
  //     success: function() {
  //         $('#contact').hide();
  //         $('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
  //       }

  // });
});