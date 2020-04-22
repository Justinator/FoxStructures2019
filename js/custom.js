"use strict";

// open menu
$(function () {
  $(".menuButtonWrap").click(function (e) {
    $("#mobile-menu").toggleClass("open");
    e.stopPropagation();
  });
}); //close menu

$(function () {
  $(".closeMenuButton").click(function (e) {
    $(".mobile-menu").removeClass("open");
  });
});
$(function () {
  $(".site").click(function (e) {
    if (!$(e.target).hasClass("menu")) {
      $(".mobile-menu").removeClass("open");
    }
  });
}); // Hamburger menu animation

$(function () {
  $(".menuButtonWrap").click(function (e) {
    $(".hamburger").toggleClass("is-active");
  });
}); // Toggle search

$(function () {
  $("#search").click(function (e) {
    $("#searchFormWrap").toggleClass("searchOpen");
    e.stopPropagation();
  });
}); // Toggle search icon

$(function () {
  $("#search").click(function (e) {
    $("#search").toggleClass("iconOpacity");
    e.stopPropagation();
  });
});
$(function () {
  $("#btnCloseUpdateBrowser").click(function (e) {
    $("#outdated").addClass("none");
    e.stopPropagation();
  });
}); // filter for our portfolio categories

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
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
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
} // Add active class to the current category button (highlight it)


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("filterButton");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}