$(document).ready(function(){
	$(".variable").slick({
	  dots: true,
	  infinite: true
	});
  $('.navbar-toggler').click(function(){
	   $(this).toggleClass("change");
	  $(this).next('.navbar-collapse').slideToggle();
  });
  $('.dropdown').click(function(e){
	  e.preventDefault();
	  $(this).toggleClass('open');
	  $(this).children('.dropdown-list').slideToggle();
  })
})