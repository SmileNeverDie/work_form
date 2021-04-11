const hamburdger = document.getElementById('hamburger');
const navUl = document.getElementById('nav-ul');
const cross = document.getElementById('cross');

hamburdger.addEventListener('click', () => {
    navUl.classList.add('show');
    cross.classList.add('show');
    hamburdger.classList.remove('show');
})

cross.addEventListener('click', () => {
    navUl.classList.remove('show');
    cross.classList.remove('show');
    hamburdger.classList.add('show');
})