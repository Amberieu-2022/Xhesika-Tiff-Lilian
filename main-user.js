// SLIDER PAGE RESERVATION USER

let slide = ["./templates/img/slider/background.jpg", "./templates/img/slider/room.jpg", "./templates/img/slider/chamb.jpg"];
let slideNb = 0;

const right = document.getElementById("right");
const left = document.getElementById("left");

right.addEventListener('click', function () {

    slideNb++;

    if (slideNb > slide.length - 1) {
        slideNb = 0;
    }

    document.getElementById("slide").src = slide[slideNb];

    console.log(slideNb);

});

left.addEventListener('click', function() {
    slideNb--;

    if (slideNb < 0) {
        slideNb = 2;
    }

    document.getElementById("slide").src = slide[slideNb];

    console.log(slideNb);

});

setInterval(function(){

    slideNb++;
    
    if (slideNb > slide.length - 1) {
        slideNb = 0;
    }
    document.getElementById("slide").src = slide[slideNb];
}, 3000)



