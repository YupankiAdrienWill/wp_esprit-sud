var topbutton = document.getElementById("backToTop");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    topbutton.style.display = "flex";
  } else {
    topbutton.style.display = "none";
  }
}

function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }