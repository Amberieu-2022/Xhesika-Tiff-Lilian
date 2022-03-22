const menu = document.getElementsByClassName('categories');
const btn = document.getElementsByClassName("btn-summary");
for (let element of btn){
    for(let elements of menu){
       element.addEventListener('click', function(){
        elements.classList.toggle('show');
    }); 
    }
    
}

