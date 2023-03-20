// Menu bar on small screens
const menuIcon = document.querySelector(".navbar-menu-icon");
const navbarNav = document.querySelector(".navbar-nav");

menuIcon.addEventListener("click", () => {
    console.log(navbarNav.classList);
  navbarNav.classList.toggle("show");
});

// email validation
let validate = document.querySelector('#login');
let info = document.querySelector('.info');
let email = document.querySelector('#email');
let regex = /^[^]+\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
let password = document.querySelector('#password');
let passwordInfo = document.querySelector('.passwd-info')

validate.addEventListener("click",()=>{
  // email validation
  if(email.value == ""){
    info.innerText = "Please Enter A valid email address";
    info.style.color = "#000";
  } else if(email.value.match(regex)){
    info.innerText = "Congrats!You entered a valid email";
    info.style.color = "rgba(4,125,9,1)";
  } else{
    info.innerText = "Invalid Email";
    info.style.color = "rgba(255,0,0,1)";
  }

  // password validation
  if(password.value.length < 8){
    passwordInfo.innerText = "Password too short!Password should contain 8 or more characters";
    passwordInfo.style.color = "rgba(255,0,0,1)";
  } else{
    passwordInfo.innerText = "Password looks good!!";
    passwordInfo.style.color = "rgba(4,125,9,1)";
  }
})

// let success = document.querySelector('.alert-success');
// let btnClose = document.querySelector('.btn-close');
// btnClose.addEventListener('click', ()=>{
//   success.style.display = 'none';
// })