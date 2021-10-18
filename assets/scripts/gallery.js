function changeback(backUrl,idTarget, title, content) {
  document.getElementById(idTarget).style.backgroundImage = 'url(\''+backUrl+'\')';
  document.getElementById('title').innerHTML = title;
  document.getElementById('content').innerHTML = content;
}

