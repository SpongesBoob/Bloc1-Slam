function updateText() {
    var texte = document.getElementById("texte").value;
    var gras = document.getElementById("gras").checked;
    var italique = document.getElementById("italique").checked;
    var souligne = document.getElementById("souligne").checked;
    var barre = document.getElementById("barre").checked;
    var couleur = document.getElementById("couleur").value;
    var taille = document.getElementById("taille").value;
    var style = document.getElementById("style").value;

    var resultat = document.getElementById("resultat");
    resultat.innerHTML = texte;
    resultat.style.fontWeight = gras ? "bold" : "normal";
    resultat.style.fontStyle = italique ? "italic" : "normal";
    resultat.style.textDecoration = souligne ? "underline" : "none";
    resultat.style.textDecoration += barre ? " line-through" : "";
    resultat.style.color = couleur;
    resultat.style.fontSize = taille + "px";
    resultat.style.textTransform = style;
}

let resultField = document.getElementById('result');
let currentOperation = '';
let currentNumber = '';
let result = 0;

function appendToResult(number) {
  currentNumber += number;
  resultField.value = currentNumber;
}

function calculate(operation) {
  if (operation === '=') {
    result = eval(result + currentOperation + currentNumber);
    currentNumber = '';
    currentOperation = '';
    resultField.value = result;
  } else {
    currentOperation = operation;
    result = parseFloat(currentNumber);
    currentNumber = '';
    resultField.value = result + currentOperation;
  }
}
  
function clearResult() {
  result = 0;
  currentNumber = '';
  currentOperation = '';
  resultField.value = '';
}