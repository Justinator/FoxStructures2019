// declare all variables
var menuButton = document.querySelector(".menuButtonWrap");
var mobileMenu = document.querySelector("#mobile-menu");
var hamburger = document.querySelector(".hamburger");
var search = document.querySelector("#search");
var searchWrapper = document.querySelector("#searchFormWrap");
var closeNotification = document.querySelector("#btnCloseUpdateBrowser");
var outdated = document.querySelector("#outdated");

// add event listeners
menuButton.addEventListener("click", toggleMobileMenu);
search.addEventListener("click", toggleSearchForm);
closeNotification.addEventListener("click", closeOutdatedNotification);
// functions
// open menu
function toggleMobileMenu() {
  mobileMenu.classList.toggle("open");
  hamburger.classList.toggle("is-active");
}
// Toggle search form and search icons
function toggleSearchForm() {
  searchWrapper.classList.toggle("searchOpen");
  search.classList.toggle("iconOpacity");
  console.log("clicked");
}
function closeOutdatedNotification() {
  outdated.classList.add("none");
}