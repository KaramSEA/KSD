function esPar(numero) {
    
    if (numero % 2 === 0) {
      return true;  
    } else {
      return false; 
    }
};

const determinarSigno = function (numero) {
    if (numero > 0) {
      return "positivo";
    } else if (numero < 0) {
      return "negativo";
    } else {
      return "cero";
    }
  };
  
  
const esImpar = function(numero) {
    return numero % 2 !== 0;
};

(function(){
  console.log("esta funcion se ejecuta de inmediato");
})();
const ini=(function(){
  return 4*8;
})();

function celsiusAFahrenheit(celius) {
  return (celius*9/5)+32;
}
const faren=function (grados) {
  return (grados * (9/5))+32;
}
console.log("hola")
  
const fac = function calculaFactorial(number) {
  for (let i = 0; i < number; i++) {
    return number*=i;
    
  }
}  
console