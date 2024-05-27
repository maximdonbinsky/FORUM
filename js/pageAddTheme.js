window.onload = ()=> {


$(document).ready(function() {
    $('textarea#msg').litesmileys();
});





function boxShadow(){
    themeName.style.boxShadow = "";
}
function boxShadow_2(){
    themeName.style.boxShadow = "0 0 5px 5px red";
}
function boxShadow_3(){
    msg.style.boxShadow = "";
}
function boxShadow_4(){
    msg.style.boxShadow = "0 0 5px 5px red";
}

createTheme.onsubmit = () => {
    if(themeName.value == 0){
        themeName.style.boxShadow = "0 0 5px 5px red";
                    setTimeout(boxShadow, 400);
                    setTimeout(boxShadow_2, 800);
                    setTimeout(boxShadow, 1200);
                    setTimeout(boxShadow_2, 1600);
                    setTimeout(boxShadow, 2000);
        return false;
    }
    if(msg.value == 0){
        msg.style.boxShadow = "0 0 5px 5px red";
                    setTimeout(boxShadow_3, 400);
                    setTimeout(boxShadow_4, 800);
                    setTimeout(boxShadow_3, 1200);
                    setTimeout(boxShadow_4, 1600);
                    setTimeout(boxShadow_3, 2000);
        return false;
    }
}

}