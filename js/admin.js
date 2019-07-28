function pull() {

  pullButtons = document.getElementsByClassName('pull')

  for (i = 0, len = pullButtons.length; i < len; i++) {

    pullButtons[i].classList.add("loading")

  }

}

function checkStatus() {

  checkStatusButtons = document.getElementsByClassName('checkStatus')

  for (i = 0, len = checkStatusButtons.length; i < len; i++) {

    checkStatusButtons[i].classList.add("loading")

  }

}
