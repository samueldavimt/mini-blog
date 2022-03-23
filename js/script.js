let listCategories = document.querySelector("#list-categories")
let categories = document.querySelector('.categories')

listCategories.addEventListener("mouseover",function(e){
    categories.style = 'max-height: 200px';  
})

listCategories.addEventListener("mouseout",function(e){
    categories.style = 'max-height: 0px';    
})