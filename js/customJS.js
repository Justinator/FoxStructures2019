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
// Add tabIndex="-1" to mobile nav so that does not interfere with keyboard navigation
const x = document.getElementById('mobile-menu');

const y = x.getElementsByTagName('li');

y.setAttribute("tabindex", "-1");

// filter for our portfolio categories
filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("primaryButton");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

// Image rotation for manual portfolio slider
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
