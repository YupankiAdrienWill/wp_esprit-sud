document.getElementById('burger').addEventListener('click',functionBurger);
document.getElementById('navMenu').addEventListener('click',functionBurger);
function functionBurger() {
      document.getElementById('navMenu').classList.toggle("show");
      document.getElementById('nav').classList.toggle('reset');
}