function myFunction() {
  var x = document.getElementById("Navbar");
  if (x.className === "navigation-bar") {
    x.className += " responsive";
  } else {
    x.className = "navigation-bar";
  }
}
