import "./css/main.css";
import "jquery"
import "popper.js"
import "bootstrap"
import "bootstrap/dist/css/bootstrap.min.css";
// import Swiper styles
import './css/swiper-bundle.min.css';



window.onload = function () {
    setTimeout(function () {
        var preloader = document.getElementById('loader');
        if (!preloader.classList.contains('done')) {
            preloader.classList.add('done');
        }
    }, 400)
}


// configure Swiper to use modules
// init Swiper:
