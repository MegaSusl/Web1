let output = document.getElementById('result');
let distance = document.getElementById('priceRange');

function changeValue(value){
  output.innerHTML = `${parseInt(value)}`;
  
  /* If this method is used, it is necessary to develop a transformation method. */ 
  let result = parseInt(value) / 64200;
  
  distance.style.marginLeft = `${result}px`;
}

changeValue(60000000);