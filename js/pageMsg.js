$(document).ready(function() {
    $('textarea#comment').litesmileys();
    $('textarea#editText').litesmileys();
    $('textarea#quotingText').litesmileys();
});


function boxShadow(){
    comment.style.boxShadow = "";
}
function boxShadow_2(){
    comment.style.boxShadow = "0 0 5px 5px red";

}
addComment.onsubmit = ()=> {
    if(comment.value == "") {
        comment.style.boxShadow = "0 0 5px 5px red";
                    setTimeout(boxShadow, 400);
                    setTimeout(boxShadow_2, 800);
                    setTimeout(boxShadow, 1200);
                    setTimeout(boxShadow_2, 1600);
                    setTimeout(boxShadow, 2000);
        return false;
    } 
}


let selectText = document.querySelectorAll(".select__text");
let modalAnswers = document.querySelectorAll(".modal__quoting");
let boxModal = document.querySelectorAll(".box__modal");
let fal = false;
for(let i = 0; i < selectText.length; i++) {
    selectText[i].onclick = (event)=> {
        event.preventDefault();
        if(fal == false) {
            boxModal[i].classList.add("cont__open");
            modalAnswers[i].innerHTML = "<i class='bi bi-caret-up-fill'></i>";
            fal = true;
        }
        else {
            boxModal[i].classList.remove("cont__open");
            modalAnswers[i].innerHTML = "<i class='bi bi-caret-down-fill'></i>";
            fal = false;
        }
    }
}



let closeEdit = document.querySelectorAll(".closeEdit");
    for(let i = 0; i < closeEdit.length; i++) {
    closeEdit[i].onclick = ()=> {
        if(editMsgBack.style.display = "grid"){
                editMsgBack.style.opacity = "0"; 
                modalEdit.style.transform = "scale(0)";
                setTimeout(()=> {
                editMsgBack.style.display = "none";
                },1500);
            }
    }
    }



let closeQuoting = document.querySelectorAll(".closeQuoting");
    for(let i = 0; i < closeQuoting.length; i++) {
    closeQuoting[i].onclick = ()=> {
        if(quotingMsgBack.style.display = "grid"){
                quotingMsgBack.style.opacity = "0"; 
                modalQuoting.style.transform = "scale(0)";
                setTimeout(()=> {
                quotingMsgBack.style.display = "none";
                },1500);
            }
    }
    }




















