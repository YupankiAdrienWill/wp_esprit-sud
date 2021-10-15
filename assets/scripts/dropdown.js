document.getElementById('menu-item-109').addEventListener("mouseover",dropdown('dropdown_catalog___content'));

function dropdown(content) {
      console.log(content);
}

document.getElementById('burger').addEventListener('click',functionBurger);
document.getElementById('navMenu').addEventListener('click',functionBurger);
      function functionBurger() {
            document.getElementById('navMenu').classList.toggle("show");
            document.getElementById('nav').classList.toggle('reset');
            }
function myFunction() {
                  var x = document.getElementById("navMenu");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                  } else {
                    x.style.display = "none";
                  }
                }