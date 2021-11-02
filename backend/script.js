const items = document.getElementById('items');
const templateCard = document.getElementById('template-card').content;
const fragment = document.createDocumentFragment();
let listado = {};

document.addEventListener('DOMContentLoaded', () => {
  fetchData();
});
items.addEventListener('click', e =>{
  agregarElemento(e);
});

const fetchData = async () => {
  try {
    const res = await fetch('backend/data.json');
    const data = await res.json();
    pintarCards(data);
  } catch (error) {
    console.log(error);
  }
};

const pintarCards = data => {
  data.forEach(element => {
    
    templateCard.getElementById('question').textContent = element.question;
    templateCard.getElementById('rightAnswer').textContent = element.rightAnswer;
    templateCard.getElementById('wrongAnswer1').textContent = element.wrongAnswer1;
    templateCard.getElementById('wrongAnswer2').textContent = element.wrongAnswer2;
    templateCard.getElementById('wrongAnswer3').textContent = element.wrongAnswer3;

    const clone = templateCard.cloneNode(true);
    fragment.appendChild(clone);
  });
  items.appendChild(fragment)
}

const agregarElemento = e => {
  if(e.target.classList.contains('btn-dark')){
    agregarListado(e.target.parentElement);
  }
  e.stopPropagation();
};