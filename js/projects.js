function showDetail(identifier){

  title = $(identifier).data('title')
  cat = $(identifier).data('wincat')
  league = $(identifier).data('winleague')
  desc = $(identifier).data('desc')
  img = $(identifier).data('img')

  document.getElementById('popup').className = ''

  document.getElementById('pTitle').innerHTML = title
  document.getElementById('pDesc').innerHTML = desc

  document.getElementById('pImg').style.backgroundImage = 'url(' + img + ')'

  if (league == 1) {

    document.getElementById('pWin').innerHTML = "Project won <b>first</b> place in " + cat

  } else if (league == 2) {

    document.getElementById('pWin').innerHTML = "Project won <b>second</b> place in " + cat

  }

  resizePopup()

}

function resizePopup() {

  height = window.innerHeight;

  document.getElementById('pImg').style.height = (height - document.getElementById('pTextDetails').clientHeight - 180) + "px"

}

function fullScreenPopupImage() {

  elem = document.getElementById('pImg')

  elem2 = document.getElementById('enlarge')

  if (elem.className == "forceFullScreen") {

    elem.className = ""

    elem2.src = "enlarge.svg"

  } else {

    elem.className = "forceFullScreen"

    elem2.src = "close.svg"

  }

}

var onresize = function() {

  resizePopup()

}

window.addEventListener("resize", onresize);
