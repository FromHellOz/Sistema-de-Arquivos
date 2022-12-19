/*function validaUser(){
    let user = document.getElementById('form_usuarios');
    if(user.value == '')
    alert('Nome não informado');
    user.focus();
}*/
const init = () => {
    const inputUser = document.querySelector('input#user')
    const inputSenha = document.querySelector('input#senha')
    const submitButton = document.querySelector('.botao')

    if(submitButton){
        submitButton.addEventListener('click', {Event} => {
            Event.preventDefault();
            fetch('https://reqres.in/api/login',{

            })
        })
    }
}
window.onload = init