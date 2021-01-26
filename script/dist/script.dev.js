"use strict";

function ready() {
  window.addEventListener('resize', function (event) {
    document.getElementsByClassName('news__all-news')[0].getElementsByClassName.width = "300px";
  });
}

document.addEventListener("DOMContentLoaded", ready);