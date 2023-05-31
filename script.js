const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const checkpassLink = document.querySelector('.checkpass-link');

registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});

// checkpassLink.addEventListener('click',()=>{
//     wrapper.classList.add('active');
// });