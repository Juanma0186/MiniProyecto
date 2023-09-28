const DAW = document.getElementById('asignaturas').textContent; 
/*
Falta el onclick y depende cómo lo hagamos necesitaremos estas constantes:

const DWES = document.getElementById('').textContent;
const DIW = document.getElementById('').textContent;
const DWEC = document.getElementById('').textContent;
const EIE = document.getElementById('').textContent;
const ITGS = document.getElementById('').textContent;

const textoOriginal = document.getElementById('').textContent;
*/


function agregarMas(){
    // Obtener el texto actual textContent es como innerhtml
    let textoActual = DAW.textContent;
    // Agregar el símbolo "+" al texto
    textoActual += '+';
    DAW.textContent = textoActual;
}


// Agregar un evento de clic al botón. En caso de no onclick.
agregarButton.addEventListener('click', agregarMas);
