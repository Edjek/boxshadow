let boxshadow = document.querySelector('.boxshadow');
let wrap = document.querySelector('.wrap');
let hamburger = document.querySelector('.hamburger');
let menu_hamburger = document.querySelector('.menu-hamburger');

wrap.addEventListener('click', function () {
    hamburger.classList.toggle('active');
    menu_hamburger.classList.toggle('active');
    boxshadow.classList.toggle('active');
});