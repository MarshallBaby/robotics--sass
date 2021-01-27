"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

var fullWidther = function fullWidther(obj, limit) {
  var sw = screen.width;

  if (sw < limit) {
    obj.style.width = sw + "px";
  } else {
    obj = limit = "px";
  }
};

function ready() {
  fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);
  window.addEventListener('resize', function (event) {
    fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);
  });
  console.log(_typeof(document.querySelectorAll(".news__all-news")[0]));
}

document.addEventListener("DOMContentLoaded", ready);