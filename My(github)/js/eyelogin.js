
/*let icon = document.querySelector('#Open');
let input = document.querySelector('input');
let container = document.querySelector('form');

icon && icon.addEventListener('click', function() {
  
container.classList.toggle('visible');
 if(container.classList.contains('visible')) {
   icon.src = 'imagens/closed.png';
   input.type = 'text';

 } else{
    icon.src = 'imagens/Open.png';
    input.type = 'password';

 }

});
icon.addEventListener('click', function(){
container.classList.toggle('visible');
  if(container.classList.contains('visible')){
    icon.src ='imagens/closed.png'
    input.type = 'text';
  }else{
    icon.src ='imagens/Open.png'
    input.type = 'password';
  }
});
//esse ta funcionando*/
let input = document.querySelector('#input input');
let img = document.querySelector('#input img');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});

/*let icon = document.querySelector('#Open');
let input = document.querySelector('#password');
let container = document.querySelector('form');

icon && icon.addEventListener('click', function() {
  
container.classList.toggle('visible');
 if(container.classList.contains('visible')) {
   icon.src = 'imagens/closed.png';
   input.type = 'text';

 } else{
    icon.src = 'imagens/Open.png';
    input.type = 'password';

 }

});*/


