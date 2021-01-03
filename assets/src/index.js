import "./css/main.css";
import "jquery"
import "popper.js"
import "bootstrap"
import "bootstrap/dist/css/bootstrap.min.css";





window.onload = function () {
    setTimeout(function () {
        var preloader = document.getElementById('loader');
        if (!preloader.classList.contains('done')) {
            preloader.classList.add('done');
        }
    }, 300)
}

document.addEventListener("DOMContentLoaded", function () { 
    const inputContact = document.getElementsByClassName('wpcf7-form-control');
    console.log(inputContact)
    for (let index = 0; index < inputContact.length; index++) {
        const element = inputContact[index];
        if(screen.width < 600){
            element.setAttribute('style', 'width: 270px!important')
        }else{
            element.setAttribute('style', 'width: 600px!important')
        }
        console.log(element)
        
    }
 });




/*
var elemento = document.getElementsByClassName("ligthbox");
for(var i = 0; i < elemento.length; i++){
    elemento[i].className += " modal-link";
}
*/
        




// configure Swiper to use modules
// init Swiper:
