toggle = () =>{
    document.querySelector('.root').classList.toggle('login')
    document.querySelector('.root').classList.toggle('register')
}

setTimeout(()=>{
    document.querySelector('.root').classList.add('login')
})