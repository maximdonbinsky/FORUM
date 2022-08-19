<?
session_start();
$path=$_SERVER['DOCUMENT_ROOT'];

include "$path/system/db.php";

?>
<!DOCTYPE html>
<html lang="en">
<? include "$path/private/head.php";?>
<body>
    <div class="cont">
        <? include "$path/private/header.php"?>
        <main>
            <div class="forum">
                <div class="forum-info">
                    <div class="forum-h1">
                        <img src="/img/1.png" alt=""> 
                        <div>Новая тема</div>
                    </div>
                    <div class="cont_new_theme">
                       <form action="" method="post" class="create_theme">
                            <span>Название темы:</span></br>
                            <input type="text" name="theme" id=""></br>
                            <span>Текст сообщения:</span></br>
                            <textarea name="msg" id="" cols="90" rows="15"></textarea></br>
                            <input type="submit" name="create_theme" value="Создать тему">
                            <input type="button" id="button" value="Показать смайлы">
                            <div id="smile" hidden></div>
                            <script>
                            button.onclick=()=>{
                                    if(smile.hidden==true){
                                        smile.hidden=false;
                                        button.value="Скрыть смайлы";
                                    }
                                    else{
                                        smile.hidden=true;
                                        button.value="Показать смайлы";
                                    }
                                }
                                // //////////////////////////////////////////

                                let s="";
                                for(let i=1;i<=102;i++){
                                    s+=`<img class="smile" src="../img/smile/smile (${i}).gif">`;
                                    }
                                smile.innerHTML=s;
                                // //////////////////////////////////////////

                                smile.addEventListener('click', (event)=>{
                                    if(event.target.classList.contains('smile')){
                                        edit.value+=event.target.attributes['src'].value;
                                    }
                                });
                            </script>
                       </form> 
                    </div>
                </div>
            </div>
        </main>
       <? include "$path/private/footer.php"?>
    </div>  
</body>
</html>