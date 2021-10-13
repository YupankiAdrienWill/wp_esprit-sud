function changeback(backUrl,idTarget, title) {
  document.getElementById(idTarget).style.backgroundImage = 'url(\''+backUrl+'\')';
  document.getElementById('title').innerHTML = title;
}

