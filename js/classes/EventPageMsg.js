class EventPageMsg
{
    constructor(pageForum)
    {
        this.pageForum = pageForum;
    }
    eventOnclick = ()=>
    {
        const forumBox = document.querySelector(".forum__box");
        const forum = document.querySelector(".forum");

        forum.onclick = (data) => {
            console.log(data);

            //удаление темы с коментариями
            if(data.target.dataset.delTheme) {
                delThemeBack.style.display="grid";
                setTimeout(()=>{
                    delThemeBack.style.opacity="100%"; 
                    modalDelTheme.style.transform="scale(1)";
                    },0);
                
                document.body.onclick = (e) => {
                    if(e.target.id === 'buttThemeNo') {
                        delThemeBack.style.opacity = "0"; 
                        modalDelTheme.style.transform = "scale(0)";
                        setTimeout(()=>{
                            delThemeBack.style.display = "none";
                        },1500);
                    }
        
                    if(e.target.id === "buttThemeYes") {
                        delThemeBack.style.opacity = "0"; 
                        modalDelTheme.style.transform = "scale(0)";
                        setTimeout(()=>{
                            delThemeBack.style.display = "none";
                        },1500);
        
                        fetch(`/system/deleteTheme.php?id=${data.target.dataset.delTheme}&key=${this.pageForum}`)
                        fetch(`/system/deleteComment.php?idTheme=${data.target.dataset.delTheme}&key=${this.pageForum}`)
                        .then(()=>{
                            let deleteTheme = document.querySelectorAll(`[data-theme-id = "${data.target.dataset.delTheme}"]`);
                            for(let elem1 of deleteTheme){
                                forumBox.removeChild(elem1);
                            }
                            window.location.href = `../public/${this.pageForum}.php`;
                        }) 
                    }
                }
            }  
            
            //удаление комментариев
            if(data.target.dataset.delComment) {
                delMsgBack.style.display="grid";
                setTimeout(()=>{
                    delMsgBack.style.opacity="100%"; 
                    modalDel.style.transform="scale(1)";
                    },0);
                
                document.body.onclick = (e) => {
                    if(e.target.id === 'buttNo') {
                        delMsgBack.style.opacity = "0"; 
                        modalDel.style.transform = "scale(0)";
                        setTimeout(()=>{
                            delMsgBack.style.display = "none";
                        },1500);
                    }
        
                    if(e.target.id === "buttYes") {
                        delMsgBack.style.opacity = "0"; 
                        modalDel.style.transform = "scale(0)";
                        setTimeout(()=>{
                            delMsgBack.style.display = "none";
                        },1500);
        
                        fetch(`/system/deleteComment.php?id=${data.target.dataset.delComment}&key=${this.pageForum}`)
                            .then(()=>{
                                let deleteComment = document.querySelectorAll(`[data-comment-id = "${data.target.dataset.delComment}"]`);
                                for(let elem2 of deleteComment){
                                    forumBox.removeChild(elem2);
                                }
                            })
                    }
                }
            }

            //удаление ответов к комментариям
            if(data.target.dataset.delQuoting) {
                fetch(`/system/deleteQuoting.php?id=${data.target.dataset.delQuoting}&key=${this.pageForum}`)
                    // .then(()=>{
            //             const boxModal = document.querySelector(".box__quoting");
            //             // const deleteQuoting = document.querySelectorAll(`[data-quoting-id = "${data.target.dataset.delQuoting}"]`);
            //             boxModal.filter(`[data-quoting-id = "${data.target.dataset.delQuoting}"]`).remove();
                                
                                
            //                 // }
            //             // })              
            }

            //редактирование темы
            if(data.target.dataset.editTheme) {
                fetch(`/system/editTheme.php?id=${data.target.dataset.editTheme}&key=${this.pageForum}`)
                .then(response => response.json())
                .then(data => {
                    for(let row of data){
                        editText.innerHTML = `${row.msg}`;
                    }
                })
                editMsgBack.style.display="grid";
                setTimeout(()=>{
                    editMsgBack.style.opacity="100%"; 
                    modalEdit.style.transform="scale(.85)";
                    },0);
                formEdit.onsubmit = ()=> {
                    let form = new FormData(formEdit);
                    fetch(`/system/updateTheme.php?id=${data.target.dataset.editTheme}&key=${this.pageForum}`,{
                        method: "post",
                        body: form
                    })
                    editMsgBack.style.opacity="0"; 
                    modalEdit.style.transform="scale(0)";
                    setTimeout(()=>{
                        editMsgBack.style.display="none";
                    },1500);
                    setTimeout(fetch(`/system/editTheme.php?id=${data.target.dataset.editTheme}&key=${this.pageForum}`)
                        .then(response => response.json())
                        .then(data => {
                        for(let row of data){
                            msg111.innerHTML = `<pre class="editMsg">${row.msg}</pre>`;
                        }
                    }),100);
                return false; 
                } 
            }
            //редактирование комментариев
            if(data.target.dataset.editComment) {
                fetch(`/system/editComment.php?id=${data.target.dataset.editComment}&key=${this.pageForum}`)
                .then(response => response.json())
                .then(data => {
                    for(let row of data){
                        editText.innerHTML = `${row.comment}`;
                    }
                })
                editMsgBack.style.display = "grid";
                setTimeout(()=>{
                    editMsgBack.style.opacity = "100%";
                    modalEdit.style.transform = "scale(.85)";
                },0);
                formEdit.onsubmit = ()=> {
                    if(editText.value == "") {
                        function boxShadow(){
                            editText.style.boxShadow = "";
                        }
                        function boxShadow_2(){
                            editText.style.boxShadow = "0 0 5px 5px red";
                        }
                        editText.style.boxShadow = "0 0 5px 5px red";
                        setTimeout(boxShadow, 400);
                        setTimeout(boxShadow_2, 800);
                        setTimeout(boxShadow, 1200);
                        setTimeout(boxShadow_2, 1600);
                        setTimeout(boxShadow, 2000);
                        return false;
                    }
                    else {
                        let form = new FormData(formEdit);
                        fetch(`/system/updateComment.php?id=${data.target.dataset.editComment}&key=${this.pageForum}`,{
                            method: "post",
                            body: form 
                        })
                        if(editMsgBack.style.display = "grid"){
                            editMsgBack.style.opacity = "0"; 
                            modalEdit.style.transform = "scale(0)";
                            setTimeout(()=>{
                            editMsgBack.style.display = "none";
                            },1500);
                        }
                        let editComment11 = document.querySelectorAll(`[data-text-id = "${data.target.dataset.editComment}"]`);       
                        setTimeout(fetch(`/system/editComment.php?id=${data.target.dataset.editComment}&key=${this.pageForum}`)
                            .then(response => response.json())
                            .then(data => {
                            for(let row of data){
                                editComment11.forEach((elem) => {
                                    elem.innerHTML = `<pre class="editMsg">${row.comment}</pre>`;                      
                                })                                   
                            }
                        }),100);
                        return false;  
                    }   
                } 
            }

            //ответы
            var queryString = location.search
            let params = new URLSearchParams(queryString)
            let id_theme = parseInt(params.get("id"))
            if(data.target.dataset.quotingComment){
                fetch(`/system/editComment.php?id=${data.target.dataset.quotingComment}&key=${this.pageForum}`)
                .then(response => response.json())
                .then(data => {
                    for(let row of data){
                        quoting.innerHTML = `<pre">${row.comment}</pre>`;
                    }
                })
                quotingMsgBack.style.display="grid";
                setTimeout(()=>{
                    quotingMsgBack.style.opacity="100%"; 
                    modalQuoting.style.transform="scale(.85)";
                    },0);
                formQuoting.onsubmit = ()=> {
                    if(quotingText.value == "") {
                        function boxShadow(){
                            quotingText.style.boxShadow = "";
                        }
                        function boxShadow_2(){
                            quotingText.style.boxShadow = "0 0 5px 5px red";
                        }
                        quotingText.style.boxShadow = "0 0 5px 5px red";
                        setTimeout(boxShadow, 400);
                        setTimeout(boxShadow_2, 800);
                        setTimeout(boxShadow, 1200);
                        setTimeout(boxShadow_2, 1600);
                        setTimeout(boxShadow, 2000);
                        return false;
                    }
                    else {
                        let formQuot = new FormData(formQuoting);
                        fetch(`/system/quoting.php?idComment=${data.target.dataset.quotingComment}&idTheme=${id_theme}&key=${this.pageForum}`,{
                            method: "post",
                            body: formQuot
                        })
                        quotingMsgBack.style.opacity="0"; 
                        modalQuoting.style.transform="scale(0)";
                        setTimeout(()=>{
                        quotingMsgBack.style.display="none";
                        },1500);
                        let boxModal = document.querySelectorAll(`[data-box-modal = "${data.target.dataset.quotingComment}"]`);
                        setTimeout(fetch(`/system/showQuoting.php?idComment=${data.target.dataset.quotingComment}&idTheme=${id_theme}&key=${this.pageForum}`)
                            .then(response => response.json())
                            .then(data => {                  
                                for(let row of data){ 
                                    let divQuoting = document.createElement("div");
                                    divQuoting.classList.add("box__quoting"); 
                                    divQuoting.innerHTML = `<div id="quoting111"><b><i class="bi bi-person-fill"></i> ${row.user}:</b> <span> ${row.msg}</span></div>`;
                                    boxModal.forEach((elem)=> {
                                        elem.append(divQuoting);
                                    })                                                                                                                                   
                                }
                        }),1000);
                        return false;
                        // header("Location: ".$_SERVER['REQUEST_URI']);
                    } 
                }
            }  
        }
    }
}