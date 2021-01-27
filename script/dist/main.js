var fullWidther;
(function (obj, limit) {
    var sw = screen.width;
    if (sw < limit) {
        obj.style.width = sw + "px";
    }
    else {
        obj = limit = "px";
    }
});
function ready() {
    fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);
    window.addEventListener('resize', function (event) {
        fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);
    });
}
document.addEventListener("DOMContentLoaded", ready);
