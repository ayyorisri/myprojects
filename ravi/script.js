$(document).ready(function(){
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};

	$(".variable").slick({
	  dots: true,
	  infinite: true,
	  autoplay:true
	});
	if( isMobile.any() ) {
		$('.navbar-toggler').click(function(){
		   	$(this).toggleClass("change");
		  	$(this).next('.navbar-collapse').slideToggle();
	  	});
	  	$('.dropdown').click(function(e){
		  e.preventDefault();
		  $(this).toggleClass('open');
		  $(this).children('.dropdown-list').slideToggle();
	  	}) 
	}
  
})