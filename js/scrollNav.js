let scrollOffset = 10

window.onscroll = function (e) {

    let x = document.getElementById("topNav");

    let box1 = document.getElementById("box1");

    let box2 = document.getElementById("box2");

    let separator = document.getElementById("slash");

    let mainTitle = document.getElementById("mainTitle");

    if (window.scrollY > scrollOffset && x.classList.contains("scrolled")) {

      x.classList.remove("scrolled");

      box1.classList.add("boxCompressed");

      box2.classList.add("boxCompressed");

      separator.style.width = "0px";

      separator.style.margin = "-4px";

      mainTitle.classList.add("showTitle");

    } else if (window.scrollY < scrollOffset && !(x.classList.contains("scrolled"))) {

      x.classList.add("scrolled");

      mainTitle.classList.remove("showTitle");

      box1.classList.remove("boxCompressed");

      box2.classList.remove("boxCompressed");

      separator.style.width = "auto";

      separator.style.margin = "10px";

    }

};
