const itemCounter = document.querySelector('.item-counter')
const cartPopup = document.querySelector('.cart-view-table-front')
const cartBtn = document.querySelector('.cart-btn')
const listCart = document.querySelectorAll('.list-cart')

cartBtn.addEventListener('click',(e)=>{
    e.preventDefault()
    cartPopup.classList.toggle('active')
})

window.addEventListener('load',()=>{
    const count = listCart.length
    itemCounter.innerHTML = count
})

