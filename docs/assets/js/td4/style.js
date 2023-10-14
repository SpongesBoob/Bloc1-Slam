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
function updateText() {
  var texte = document.getElementById("texte").value;
  var gras = document.getElementById("gras").checked;
  var italique = document.getElementById("italique").checked;
  var souligne = document.getElementById("souligne").checked;
  var barre = document.getElementById("barre").checked;
  var couleur = document.getElementById("couleur").value;
  var taille = document.getElementById("taille").value;

  var resultat = document.getElementById("resultat");
  resultat.innerHTML = texte;

  if (gras) {
    resultat.style.fontWeight = "bold";
  } else {
    resultat.style.fontWeight = "normal";
  }

  if (italique) {
    resultat.style.fontStyle = "italic";
  } else {
    resultat.style.fontStyle = "normal";
  }

  if (souligne) {
    resultat.style.textDecoration = "underline";
  } else {
    resultat.style.textDecoration = "none";
  }

  if (barre) {
    resultat.style.textDecoration = "line-through";
  }

  resultat.style.color = couleur;
  resultat.style.fontSize = taille + "px";
}
function attachEventListeners() {
  document.getElementById("clearButton").addEventListener("click", clearResult);
  document.getElementById("divideButton").addEventListener("click", function() { calculate('/') });
  document.getElementById("sevenButton").addEventListener("click", function() { appendToResult(7) });
  document.getElementById("eightButton").addEventListener("click", function() { appendToResult(8) });
  document.getElementById("nineButton").addEventListener("click", function() { appendToResult(9) });
  document.getElementById("multiplyButton").addEventListener("click", function() { calculate('*') });
  document.getElementById("fourButton").addEventListener("click", function() { appendToResult(4) });
  document.getElementById("fiveButton").addEventListener("click", function() { appendToResult(5) });
  document.getElementById("sixButton").addEventListener("click", function() { appendToResult(6) });
  document.getElementById("subtractButton").addEventListener("click", function() { calculate('-') });
  document.getElementById("oneButton").addEventListener("click", function() { appendToResult(1) });
  document.getElementById("twoButton").addEventListener("click", function() { appendToResult(2) });
  document.getElementById("threeButton").addEventListener("click", function() { appendToResult(3) });
  document.getElementById("addButton").addEventListener("click", function() { calculate('+') });
  document.getElementById("zeroButton").addEventListener("click", function() { appendToResult(0) });
  document.getElementById("decimalButton").addEventListener("click", function() { calculate('.') });
  document.getElementById("equalButton").addEventListener("click", function() { calculate('=') });
}
attachEventListeners();

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
// Récupérer la liste de tâches depuis le local storage
let tasks = JSON.parse(localStorage.getItem('tasks')) || [];

const taskInput = document.getElementById('taskInput');
const taskList = document.getElementById('taskList');
const saveNameInput = document.getElementById('saveName');
const loadSelect = document.getElementById('loadSelect');

// Afficher la liste de tâches
function displayTasks() {
  taskList.innerHTML = '';

  tasks.forEach((task, index) => {
    const li = document.createElement('li');
    li.innerHTML = `
      <input type="checkbox" onchange="toggleTask(${index})" ${task.completed ? 'checked' : ''}>
      <span class="${task.completed ? 'completed' : ''}">${task.name}</span>
      <button onclick="editTask(${index})">Modifier</button>
      <button onclick="deleteTask(${index})">Supprimer</button>
    `;
    taskList.appendChild(li);
  });
}

// Ajouter une nouvelle tâche
function addTask() {
  const newTask = { name: taskInput.value, completed: false };
  tasks.push(newTask);
  taskInput.value = '';
  saveTasks();
  displayTasks();
}

// Cocher/décocher une tâche
function toggleTask(index) {
  tasks[index].completed = !tasks[index].completed;
  saveTasks();
  displayTasks();
}

// Modifier une tâche
function editTask(index) {
  const newName = prompt('Entrez le nouveau nom de la tâche :');
  tasks[index].name = newName;
  saveTasks();
  displayTasks();
}

// Supprimer une tâche
function deleteTask(index) {
  tasks.splice(index, 1);
  saveTasks();
  displayTasks();
}

// Sauvegarder les tâches dans le local storage avec un nom choisi
function saveTasks() {
  const saveName = saveNameInput.value;
  if (saveName !== '') {
    localStorage.setItem(saveName, JSON.stringify(tasks));
    saveNameInput.value = '';
    updateLoadSelect();
  }
}

// Charger les tâches sauvegardées
function loadTasks() {
  const selectedSave = loadSelect.value;
  const savedTasks = JSON.parse(localStorage.getItem(selectedSave));
  if (savedTasks) {
    tasks = savedTasks;
    displayTasks();
  }
}

// Mettre à jour la liste des sauvegardes disponibles
function updateLoadSelect() {
  loadSelect.innerHTML = '<option value="">Choisir une sauvegarde</option>';
  for (let i = 0; i < localStorage.length; i++) {
    const key = localStorage.key(i);
    if (key !== 'tasks') {
      const option = document.createElement('option');
      option.value = key;
      option.textContent = key;
      loadSelect.appendChild(option);
    }
  }
}

// Charger les tâches sauvegardées lors du chargement de la page
updateLoadSelect();
displayTasks();