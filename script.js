let burger = document.getElementById('burger')
let navbar = document.getElementById('navbar')

burger.addEventListener('click', (event) => {
    navbar.classList.toggle('open-burger');
})