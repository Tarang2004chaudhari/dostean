const aside = document.querySelector('aside');
const main = document.querySelector('main');
const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector('#close-btn');
menuBtn.onclick = () =>{
    aside.style.display="block";
} 
closeBtn.onclick = () =>{
    aside.style.display="none";
} 
// change theme
// const closeBtn = document.querySelector('#light-theme');
const themeToggler = document.querySelector('#ThemeChanger');
themeToggler.onclick = () =>{
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('i:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('i:nth-child(2)').classList.toggle('active');
} 
// Gallery Javascript
