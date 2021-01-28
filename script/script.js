let fullWidther = (obj, limit) => {
    let sw = screen.width;
    if (sw < limit) {
        obj.style.width = sw + "px";
    } else {
        obj.style.width = limit + "px";
    }
}

function ready() {
    fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);

    window.addEventListener('resize', function(event) {
        fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);
    });

    links = document.getElementsByClassName('links__item');
    for (let i = 0; i < links.length; i++) {
        links[i].setAttribute('data-id', i);
        links[i].addEventListener('hover')
    }



}

document.addEventListener("DOMContentLoaded", ready);