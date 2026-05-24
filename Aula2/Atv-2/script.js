const form = document.querySelector('form');
const textarea = document.getElementById('mensagem');
const div = document.createElement('div');

div.textContent = "A mensagem é muito curta";
div.style.color = "red";

form.addEventListener('submit', function(evento){
    const texto = textarea.value.trim();

    if(texto.length < 20){
        evento.preventDefault();

        textarea.style.border = "2px solid red";
        textarea.after(div);
    }
});
textarea.addEventListener('input', function(){
    if(textarea.value.trim().length >= 20){
        textarea.style.border = "";
        div.textContent = "";
    }
    
});