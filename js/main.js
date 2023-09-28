const DAW = document.getElementById('DAW').textContent;
const DWES = document.getElementById('DWES').textContent;
const DIW = document.getElementById('DIW').textContent;
const DWEC = document.getElementById('DWEC').textContent;
const EIE = document.getElementById('EIE').textContent;
const ITGS = document.getElementById('ITGS').textContent; 

function agregarMas(){
    // Obtener el texto actual textContent es como innerhtml
    let textoActual = DAW.textContent;
    textoActual += '+';
    DAW.textContent = textoActual;
}
