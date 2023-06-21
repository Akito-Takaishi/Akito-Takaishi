/* When the user clicks on the button,
it will toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("MenuDropdown").classList.toggle("show");
}

/* Closes the dropdown if the user clicks outside of it*/
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
