/*function validaUser(){
    let user = document.getElementById('form_usuarios');
    if(user.value == '')
    alert('Nome não informado');
    user.focus();
}
const init = () => {
    const inputUser = document.querySelector('input#user')
    const inputSenha = document.querySelector('input#senha')
    const submitButton = document.querySelector('.botao')

    if(submitButton){
        submitButton.addEventListener('click', {Event} => {
            Event.preventDefault();
            fetch('https://reqres.in/api/login',{
            method: 'POST',
            headers:{
                'ContentType':'application/json'
            }
            })
        })
    }
}
window.onload = init

const express = require('express');
const session = require('express-session');

const port = 3000;
let path = require('path');
const app = express();

app.use(session({secret:'onsw42dbbd24wsno'}));

app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');
app.use('/public', express.static(path.join(__dirname, 'public')));
app.set('views', path.join(__dirname, '/views'));

app.post('/',(req,res)=>{
    res.render('index')
})

app.get('/',(req,res)=>{
     res.render('index')
})

app.listen(port,()=>{
     console.log("servidor ok")
})
*/

function entrar(){
    let user = document.querySelector('input#user')
    let senha = document.querySelector('input#senha')

    let userLabel = document.querySelector('input#userLabel')
    let senhaLabel = document.querySelector('input#senhaLabel')

    let errorMsg = document.querySelector('#errorMsg')
    let listaUser

}





