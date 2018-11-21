/* When the user clicks the button, 
toggle between hiding/showing the dropdown content */
function toggleMenuDropdown() {
    document.getElementById("dropdownLinks").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.burgerIcon')) {
    var dropdownLinks = document.getElementById("dropdownLinks");
      if (dropdownLinks.classList.contains('show')) {
        dropdownLinks.classList.remove('show');
      }
  }
}