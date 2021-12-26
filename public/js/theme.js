function openCode(codeName) {
    var i;
    var x = document.getElementsByClassName("code");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(codeName).style.display = "block";
  }
