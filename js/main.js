
$( document ).ready(function() {

//Show Thank you
if($(location).attr('href').search('contact=true') > 0){
	$('.thank-you').css('display','block');
}


//blurred header
var content = document.querySelector('.main-container');
var duplicate = content.cloneNode(true);

var contentBlurred = document.createElement('div');
contentBlurred.className = 'header-blurred';
contentBlurred.appendChild(duplicate);

var header = document.querySelector('.header-container');
header.appendChild(contentBlurred);



//Replace Name attributes in copied content
$('.header-blurred').html($('.header-blurred').html().replace(/name=/gi,'alt='));
//Replace ID attributes in copied content
$('.header-blurred').html($('.header-blurred').html().replace(/id=/gi,'title='));

var bodyScroll = -  $(this).scrollTop();

function updateHeader(){

	newBodyScroll = -  $(this).scrollTop();
	if (newBodyScroll != bodyScroll) {
		bodyScroll = newBodyScroll;
		$('.header-blurred').css('top', bodyScroll);
		if (bodyScroll < -140) {
			$('.header-container .logo').addClass('show');
			$('.s9-logo').addClass('hide');
		} else {
			$('.header-container .logo').removeClass('show');
			$('.s9-logo').removeClass('hide');
		}
	}
}


$( window ).bind( "scroll touchmove", function() {
	updateHeader();
});

//Close Menu On Click
$('.header-container nav a').click(function(){
	$("#setting-sg-menu").attr('checked',false);
});


//smooth scrolling
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});


});