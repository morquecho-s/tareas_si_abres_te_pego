function generateRandomNumber(digits) {
    let randomNumber = '';
    for (let i = 0; i < digits; i++) {
        randomNumber += Math.floor(Math.random() * 10);
    }
    return randomNumber;
}

const button_matricula  = document.getElementById('button_matricula'),
matricula_field   = document.getElementById('matricula_field'),
materia_field = document.getElementById('materia_field'),
button_limpiar = document.getElementById('button_limpiar');

button_matricula.addEventListener('click', function(){
    matricula_field.value = parseInt(generateRandomNumber(10));
})

button_limpiar.addEventListener('click', function(){
    materia_field.value = "";
    matricula_field.value = 0;
});
