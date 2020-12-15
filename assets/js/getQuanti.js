document.querySelector('.quantity-input').addEventListener('onchange',function(e){
    e.preventDefault();

})

function getQuantity(){
    const input = document.querySelector('.quantity-input');
    return input.value;
}