let menu = document.querySelector('#menu-bar');
let times = document.querySelector('#times');
let menuList = document.querySelector('.menu-list');
let header = document.querySelector('.header');
let rotater = document.querySelector('.rotater');
menu.onclick = () =>{
    times.classList.toggle('fa-xmark');
    if(times.classList.contains('fa-xmark')){
        rotater.style.visibility="hidden";
    }else{
        rotater.style.visibility="visible";
    }
    menuList.classList.toggle('active');
}
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    menu.classList.remove('active');
}

document.querySelectorAll('.img-container img').forEach(image =>{
    image.onclick = () =>{
        document.querySelector('.popup-img').style.display='block';
        document.querySelector('.popup-img img').src = image.getAttribute('src');
    }
     document.querySelector('.popup-img span').onclick = () =>{
        document.querySelector('.popup-img').style.display='none';
     }
});

document.querySelectorAll('.single-menu img').forEach(image =>{
    image.onclick = () =>{
        document.querySelector('.popup-img-menu').style.display='block';
        document.querySelector('.popup-img-menu img').src = image.getAttribute('src');
    }
     document.querySelector('.popup-img-menu span').onclick = () =>{
        document.querySelector('.popup-img-menu').style.display='none';
     }
});