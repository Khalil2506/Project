
const Slider = document.querySelector("#Slider");
let SliderSession = document.querySelectorAll(".slider_session");
let SliderSessionLast = SliderSession[SliderSession.length -1];
const btnleft = document.getElementById("btn-left");
const btnright = document.getElementById("btn-right");

Slider.insertAdjacentElement('afterbegin',SliderSessionLast);

function next(){
    let SliderFirst = document.querySelectorAll(".slider_session")[0];
    Slider.style.marginleft = "-200%";
    Slider.style.transition = "all 0.5s";
    setTimeout(function(){
        Slider.style.transition = "none";
        Slider.insertAdjacentElement('beforeend',SliderFirst);
        Slider.style.marginleft = "-100%";
    },500);
}
function prev (){
    let SliderSession = document.querySelectorAll(".slider_session");
    let SliderSessionLast = SliderSession[SliderSession.length -1] ;
    Slider.style.marginleft = "0";
    Slider.style.transition = "all 0.5s";
    setTimeout(function(){
        Slider.style.transition = "none";
        Slider.insertAdjacentElement('afterbegin',SliderSessionLast);
        Slider.style.marginleft = "-100%";
    },500);
}
btnleft.addEventListener('click',function(){
    prev();
})
btnright.addEventListener('click',function(){
    next();
})
setInterval(function(){
    next();
},4000);


