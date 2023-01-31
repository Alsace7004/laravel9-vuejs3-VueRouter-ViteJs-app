/**
 *
    We have selected all button elements using the document.querySelectorAll() method and stored them in buttons variable.
    We are using the forEach() method to loop through all the button elements.
    We are adding a click event listener to each button element.
    In the event handler function, we are using the forEach() method to loop through all button elements and removing the active class 
    if there is any, using the remove() method.
    We are using this keyword to get the currently clicked button element and adding an active class to it using add() method.
 * 
**/
//alert("Hello from js_files")
/****************************************************************/
console.log("Hello from js_files")
console.log("Sign from template js file working on sidebar...")
console.log("Sign from template js file working on header...")
/************************Active-Items************************/
let items = document.querySelectorAll('.item')
//console.log("Valeur des items:",items)
items.forEach(item=>{
    item.addEventListener('click',function (){
        items.forEach(it=>it.classList.remove('active'))
        this.classList.add('active')
    })
})
/************************Collapsible-Sidebar************************/
let ic = document.querySelector(".icon_container")
ic.addEventListener('click',()=>{
    document.querySelector('body').classList.toggle('collapse')
})
/***************************************************************/