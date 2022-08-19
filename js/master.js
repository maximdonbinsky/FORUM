window.onload=function(){

// ////////Регистрация////////////////////////////////

register.onclick=function(){
     modalBackSignup.style.display="grid";
    setTimeout(()=>{
         modalBackSignup.style.opacity="100%"; 
         modalSignup.style.transform="scale(1) rotate(1080deg)";
         },0);
}

let close=document.querySelectorAll(".close");
for(let i=0; i<close.length; i++){
    close[i].onclick=()=>{
        if(modalBackSignup.style.display="grid"){
            modalBackSignup.style.opacity="0"; 
            modalSignup.style.transform="scale(0) rotate(0)";
            setTimeout(()=>{
                modalBackSignup.style.display="none";
            },1500);
        }
        if(modalBackLogin.style.display="grid"){
            modalBackLogin.style.opacity="0";
            modalLogin.style.transform="scale(0) rotate(0)";
            setTimeout(()=>{
                modalBackLogin.style.display="none";
            },1500);
            
        }       
    }
}

formSignup.onsubmit=()=>{
    if(email.value.length==""){
        alert("Введите e-mail!");
        return false;
    }
    if(loginSignup.value.length==""){
        alert("Введите логин!");
        return false;
    }
    if(loginSignup.value.length<3){
        alert("Логин слишком короткий!");
        return false;
    }
    if(passwordSignup.value.length==""){
        alert("Введите пароль!");
        return false;
    }
    if(passwordSignup.value.length<6){
        alert("Пароль должен содержать не менее 6 символов!");
        return false;
    }
    if(passwordSignup2.value.length==""){
        alert("Подтвердите пароль!");
        return false;
    }
    if(passwordSignup.value!=passwordSignup2.value){
        alert("Пароли не совпадают!");
        return false;
    }


}

// /////////Авторизация///////////////////////////////

logIn.onclick=function(){
    modalBackLogin.style.display="grid";
     setTimeout(()=>{
         modalBackLogin.style.opacity="100%";
         modalLogin.style.transform="scale(1) rotate(1080deg)";
     },0);
}

formLogin.onsubmit=()=>{
    if(login.value.length==""){
        alert("Введите логин!");
        return false;
    }
    if(password.value.length==""){
        alert("Введите пароль!");
        return false;
    }
}

///////////////////////СТАТИСТИКА ФОРУМА//////////////////////////////////

///////////////////////Онлайн////////////////////////////////////////

function online(){
    $.ajax({
    url:"/system/online.php",
    success:function(event){
        stat_online.innerHTML=event;
        }
    })
}
online();
// setInterval(online,2000);























































}