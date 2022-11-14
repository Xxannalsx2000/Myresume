const foodmenu =document.querySelector('.food-menu-content-main');

foodmenu.addEventListener('click',function(e){
    if(e.target.nodeName=="I"){
        e.target.classList.toggle('faactive');
        // if(e.target.getAttribute('class').indexof('.faactive')==-1){
        //     e.target.setAttribute('class','fa-regular fa-heart faactive');
        // }else{
        //     e.target.setAttribute('class','fa-regular fa-heart');
        // }
    }
})