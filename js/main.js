/* menu.onclick = function myFunction(){
 	var x = document.getElementById('myTopnav');

 	if (x.className === "topnav"){
 		x.className += " responsive";
 	} else{
 		x.className = "topnav";
 	}
 }*/
$('.carousel').carousel({
	interval:15000,
 wrap:true,
 touch: true
 });



$(function(){
  $('.scc').click(function(event) {
    var i_path = $(this).attr('src');
    $('body').append('<div class="overlay justify-content-center"></div><div class="magnify"><img src="'+i_path+'"><div class="close-popup text-white p-1">X</div></div>');
    $('.magnify').css({
	    left: ($(document).width() - $('.magnify').outerWidth())/2,
	 
            top: ($(window).height() - $('.magnify').outerHeight())/2
	  });
    $('.overlay, .magnify').fadeIn('fast');
  });
  
  $('body').on('click', '.close-popup, .overlay', function(event) {
    event.preventDefault();
 
    $('.overlay, .magnify').fadeOut('fast', function() {
      $('.close-popup, .magnify, .overlay').remove();
    });
  });
});