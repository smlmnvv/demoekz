let login = document.querySelector('.login');
let reg = document.querySelector('.reg');

let loginBtn = document.querySelector('.btn-login');
let regBtn = document.querySelector('.btn-reg');

regBtn.addEventListener('click', function()
{
    reg.classList.toggle('active');
    login.classList.toggle('none');
})

loginBtn.addEventListener('click', function()
{
    login.classList.toggle('none');
    reg.classList.toggle('active');
})