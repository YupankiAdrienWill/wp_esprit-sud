document.getElementById('contact--1').addEventListener('click',funcContact);
document.getElementById('contact--2').addEventListener('click',funcContact);
document.getElementById('back').addEventListener('click',funcContact);
document.getElementById('close').addEventListener('click',funcContact);
document.getElementById('close2').addEventListener('click',funcContact);
function funcContact() {
      document.getElementById('form').classList.toggle("show");
      document.getElementById('body').classList.toggle("scrollForm");
      window.scrollTo(0,0);
}