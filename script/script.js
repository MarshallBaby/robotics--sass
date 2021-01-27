function ready() {
    
    window.addEventListener('resize', function(event) {
        let sw = screen.width;
        if(sw < 1400){
            document.querySelectorAll(".news__all-news")[0].style.width = sw + "px";
        }else{
            document.querySelectorAll(".news__all-news")[0].style.width = "1400px";
        }
    });
}

document.addEventListener("DOMContentLoaded", ready);