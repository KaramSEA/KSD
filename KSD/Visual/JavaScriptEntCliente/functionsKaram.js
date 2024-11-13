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
  
  