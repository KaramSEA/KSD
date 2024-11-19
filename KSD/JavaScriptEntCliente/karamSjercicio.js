//Ejercicio 1
function buscarElemento(vector, elemento) {
    let posicion = null;
    for (let i = 0; i < vector.length; i++) {
        if (vector[i] === elemento) {
            posicion = i;
        }
    }
    return posicion;
}

const vector = [1, 2, 3, 4, 5];
const elementoBuscado = 3;

const resultado = buscarElemento(vector, elementoBuscado);
console.log( resultado !== null ? `El elemento ${elementoBuscado} se encuentra en la pos ${resultado}.` : `El elemento ${elementoBuscado} no se encuentra.` );

function agregarElemento(vector, elemento) {
    if (!vector.includes(elemento)) {
        vector.push(elemento);
        return true;
    }
    return false;
}

const vector1 = [1, 2, 3];
const elementoNuevo = 4;

if (agregarElemento(vector1, elementoNuevo)) {
    console.log(`El elemento ${elementoNuevo} fue agregado .`);
} else {
    console.log(`El elemento ${elementoNuevo} ya existe.`);
}

console.log(vector1);
