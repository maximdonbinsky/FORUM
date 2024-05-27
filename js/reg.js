////////////////////////////////////////////////////////////////////////////
//////////////////// Регистрация //////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////

register.onclick = function(){
    modalBackSignup.style.display="grid";
   setTimeout(()=>{
        modalBackSignup.style.opacity="100%"; 
        modalSignup.style.transform="scale(1) rotate(1080deg)";
        },0);
}

let close = document.querySelectorAll(".close");
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

function boxShadowEmail() {
    email.style.boxShadow = "";
}
function boxShadowEmail_2() {
    email.style.boxShadow = "0 0 5px 5px white";
}
function boxShadowLoginReg() {
    loginSignup.style.boxShadow = "";
}
function boxShadowLoginReg_2() {
    loginSignup.style.boxShadow = "0 0 5px 5px white";
}
function boxShadowPasswordReg() {
    passwordSignup.style.boxShadow = "";
}
function boxShadowPasswordReg_2() {
    passwordSignup.style.boxShadow = "0 0 5px 5px white";
}
function boxShadowPasswordReg2() {
    passwordSignup2.style.boxShadow = "";
}
function boxShadowPasswordReg2_2() {
    passwordSignup2.style.boxShadow = "0 0 5px 5px white";
}

formSignup.onsubmit = ()=> {
   if(email.value.length == "") {
        boxShadowEmail_2();
        setTimeout(boxShadowEmail, 400);
        setTimeout(boxShadowEmail_2, 800);
        setTimeout(boxShadowEmail, 1200);
        setTimeout(boxShadowEmail_2, 1600);
        setTimeout(boxShadowEmail, 2000);
        return false;
   }
   if(loginSignup.value.length == "") {
        boxShadowLoginReg_2();
        setTimeout(boxShadowLoginReg, 400);
        setTimeout(boxShadowLoginReg_2, 800);
        setTimeout(boxShadowLoginReg, 1200);
        setTimeout(boxShadowLoginReg_2, 1600);
        setTimeout(boxShadowLoginReg, 2000);
        return false;
   }
   if(loginSignup.value.length < 3) {
        infoReg.style.fontSize = "0.9rem";
        infoReg.style.color = "Cyan";
        infoReg.innerHTML = "Логин должен содержать не менее 3 символов!";
        setTimeout(()=> {
            infoReg.style.fontSize = "1.4rem";
            infoReg.style.color = "white";
            infoReg.innerHTML = "Регистрация";
        },4000);
        return false;
   }
   if(passwordSignup.value.length == "") {
        boxShadowPasswordReg_2();
        setTimeout(boxShadowPasswordReg, 400);
        setTimeout(boxShadowPasswordReg_2, 800);
        setTimeout(boxShadowPasswordReg, 1200);
        setTimeout(boxShadowPasswordReg_2, 1600);
        setTimeout(boxShadowPasswordReg, 2000);
        return false;
   }
   if(passwordSignup.value.length < 6) {
        infoReg.style.fontSize = "0.9rem";
        infoReg.style.color = "Cyan";
        infoReg.innerHTML = "Пароль должен содержать не менее 6 символов!";
        setTimeout(()=> {
            infoReg.style.fontSize = "1.4rem";
            infoReg.style.color = "white";
            infoReg.innerHTML = "Регистрация";
        },4000);
       return false;
   }
   if(passwordSignup2.value.length == "") {
        boxShadowPasswordReg2_2();
        setTimeout(boxShadowPasswordReg2, 400);
        setTimeout(boxShadowPasswordReg2_2, 800);
        setTimeout(boxShadowPasswordReg2, 1200);
        setTimeout(boxShadowPasswordReg2_2, 1600);
        setTimeout(boxShadowPasswordReg2, 2000);
        return false;
   }
   if(passwordSignup.value != passwordSignup2.value) {
    infoReg.style.fontSize = "0.9rem";
    infoReg.style.color = "Cyan";
    infoReg.innerHTML = "Пароли не совпадают!";
    setTimeout(()=> {
        infoReg.style.fontSize = "1.4rem";
        infoReg.style.color = "white";
        infoReg.innerHTML = "Регистрация";
    },4000);
       return false;
   }


}

/////////////////////////////////////////////////////////////////////////////////
////////////////////// Авторизация /////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

logIn.onclick = function() {
   modalBackLogin.style.display="grid";
    setTimeout(()=> {
        modalBackLogin.style.opacity="100%";
        modalLogin.style.transform="scale(1) rotate(1080deg)";
    },0);
}

function boxShadowLoginLog() {
    login.style.boxShadow = "";
}
function boxShadowLoginLog_2() {
    login.style.boxShadow = "0 0 5px 5px white";
}
function boxShadowPasswordLog() {
    password.style.boxShadow = "";
}
function boxShadowPasswordLog_2() {
    password.style.boxShadow = "0 0 5px 5px white";
}

formLogin.onsubmit = ()=> {
   if(login.value.length == "") {
        boxShadowLoginLog_2();
        setTimeout(boxShadowLoginLog, 400);
        setTimeout(boxShadowLoginLog_2, 800);
        setTimeout(boxShadowLoginLog, 1200);
        setTimeout(boxShadowLoginLog_2, 1600);
        setTimeout(boxShadowLoginLog, 2000);
       return false;
   }
   if(password.value.length=="") {
        boxShadowPasswordLog_2();
        setTimeout(boxShadowPasswordLog, 400);
        setTimeout(boxShadowPasswordLog_2, 800);
        setTimeout(boxShadowPasswordLog, 1200);
        setTimeout(boxShadowPasswordLog_2, 1600);
        setTimeout(boxShadowPasswordLog, 2000);
       return false;
   }
}



