// on dom content loaded
document.addEventListener('DOMContentLoaded', function() {

    // get the navbar
    var navbar = document.getElementById('hamburgerMenu');
    // add a click event listener to the navbar
    navbar.addEventListener('click', function(event) {
        console.log('clicked');
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }

    });
});
