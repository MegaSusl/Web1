let output = document.getElementById('result');
let distance = document.getElementById('distance');

function changeValue(value){
  output.innerHTML = `${50 - parseInt(value)}`;
  
  /* If this method is used, it is necessary to develop a transformation method. */ 
  let result = parseInt(value) * 4 + 60;
  
  distance.style.marginLeft = `${result}px`;
}

changeValue(40);