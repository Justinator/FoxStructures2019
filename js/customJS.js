// open menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".mobile-menu").addClass("open");
        	e.stopPropagation();
    });
});
//close menu
$(function() {
    $(".closeMenuButton").click(function(e){
        	$(".mobile-menu").removeClass("open");
    });
});
$(function() {
    $(".site").click(function(e){
    	if(!$(e.target).hasClass("menu")){
        	$(".mobile-menu").removeClass("open");
    	}
    });
});

$(function() {
  $(".menuTextWrap").click(function(e){
    if($(".menu").hasClass("open")){
          document.querySelector(".linkList").addEventListener("click", closeMenu);
            $(".menu").removeClass("open");
          }
        });
  });
//smooth scroll to elements in inner services nav

$(document).on('click', 'a[href^="#aluminum"]', function (event) {

    event.preventDefault();


    $('html, body').animate({

      scrollTop: $($.attr(this, 'href')).offset().top

     -150}, 1000);

});
