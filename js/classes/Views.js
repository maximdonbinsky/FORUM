class Views
{
    constructor(pageForum)
    {
        this.pageForum = pageForum;
    }

    addViews = ()=> 
    {
        const forum = document.querySelector('.forum');
        forum.onclick = (data) => {
            if(data.target.dataset.forumTop) {
                fetch(`/system/views.php?id=${data.target.dataset.forumTop}&key=${this.pageForum}`)
            }
        }
    }
}