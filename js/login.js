const login = document.querySelector('.login');

const loginform = document.querySelector("#login_form");
const forget = document.querySelector('.forget');

const forgetform = document.querySelector("#forget_form");

if(loginform.classList.contains("active"))
{
    login.onclick = () =>{
        forgetform.classList.add("active");
        loginform.classList.remove("active");
    }
}

