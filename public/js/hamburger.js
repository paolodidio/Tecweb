function myFunction() {
  var x = document.getElementById("Navbar");
  if (x.className == "navigation-bar") {
    x.className += " responsive";
  } else {
    x.className = "navigation-bar";
  }
}

function myFunction1() {
  var x = document.getElementById("AdminNavbar");
  if (x.className === "navigation-bar") {
    x.className += " responsive";
  } else {
    x.className = "navigation-bar";
  }
}
