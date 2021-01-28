let fullWidther = (obj, limit) => {
    let sw = screen.width;
    if (sw < limit) {
        obj.style.width = sw + "px";
    } else {
        obj.style.width = limit + "px";
    }
}

function linksSwitch(event) {
    let id = event.target.getAttribute("data-id");
    for (let i = 0; i < $(".links__item").length; i++) {
        $(".links__item")[i].classList.remove('links__item_active');
    }
    $(".links__item")[id].classList.add('links__item_active');
    $(".links__subtitle")[0].innerHTML = linksData[id].title;
    $(".links__desrc")[0].innerHTML = linksData[id].descr;
}

let linksData = [];

function LinksDataConstructor(title, descr) {
    this.title = title;
    this.descr = descr;
}

let isMobileMunuOpen = false;

function mobileMenuSwitcher() {
    isMobileMunuOpen = !isMobileMunuOpen;
    if (isMobileMunuOpen) {
        $(".mobile-menu")[0].style.left = "0%";
        $("body").css("overflow", "hidden");
    } else {
        $(".mobile-menu")[0].style.left = "100%";
        $("body").css("overflow", "scroll");
        console.log("awdawd");
    }
}

function ready() {
    document.getElementById("mobile-menu-button").addEventListener('click', mobileMenuSwitcher);
    document.getElementById("mobile-menu-button-exit").addEventListener('click', mobileMenuSwitcher);

    fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);
    // fullWidther(document.querySelectorAll(".partners__line")[0], 1400);


    window.addEventListener('resize', function(event) {
        fullWidther(document.querySelectorAll(".news__all-news")[0], 1400);
        // fullWidther(document.querySelectorAll(".partners__line")[0], 1400);
    });

    links = document.getElementsByClassName('links__item');
    for (let i = 0; i < links.length; i++) {
        links[i].setAttribute('data-id', i);
        links[i].addEventListener("mouseover", linksSwitch);
    }
    for (let i = 0; i < links.length; i++) {
        linksData[i] = new LinksDataConstructor(links[i].getAttribute('data-title'), links[i].innerHTML);
        links[i].innerHTML = links[i].getAttribute('data-title');
    }

}

document.addEventListener("DOMContentLoaded", ready);