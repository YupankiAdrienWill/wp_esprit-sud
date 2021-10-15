/* document.getElementById('menu-item-109').addEventListener("mouseover",dropdown('dropdown_catalog___content'));

function dropdown(content) {
      console.log(content);
}

document.getElementById('burger').addEventListener('click',functionBurger);
document.getElementById('navMenu').addEventListener('click',functionBurger);
      function functionBurger() {
            document.getElementById('navMenu').classList.toggle("show");
            document.getElementById('nav').classList.toggle('reset');
            } */
function myFunction() {
                  var x = document.getElementById("navMenu");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                  } else {
                    x.style.display = "none";
                  }
                }
         

function closeFunction() {
  var y = document.getElementById("navMenu");
  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
}

var x =document.getElementById('forMobile');
var y =document.getElementById('navMenu');

window.onclick = function(event) {
  if (event.target == x) {
    y.style.display = "none";
  }
}