// When the user scrolls the page, execute myFunction 
window.onscroll = function() {addStick()};

// Get the header
var header = document.getElementById("site-navi-ui");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function addStick() {
 if (window.pageYOffset > sticky) {
    header.classList.add("site-navigation-sticky");
  } else {
    header.classList.remove("site-navigation-sticky");
  }
};