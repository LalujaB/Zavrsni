let btn = document.getElementById('showHide')

btn.addEventListener('click',function(){
    let boxComm = document.getElementById('showHideComm');
    if (boxComm.style.display === "none") {
        boxComm.style.display = "block";
        this.innerHTML = 'Hide comments';

    } else {
        boxComm.style.display = "none";
        this.innerHTML = 'Show comments';
    }
})

function checkDel(){
    let check = confirm("Do you really want to delete this post?")

    if(check){
        return true;
    }else{
        return false;
    }
}