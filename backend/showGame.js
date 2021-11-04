const game = document.getElementById('game');
const templateCard = document.getElementById('template-card').content;
const fragment = document.createDocumentFragment();

document.addEventListener('DOMContentLoaded', ()=>{
  fetchData();
});

const fetchData = async () => {
  try {
    const res = await fetch('backend/data.json');
    const data = await res.json();
    showAnswers(data);
  } catch (error) {
    console.log(error);
  }
};

const showAnswers = data => {
    templateCard.getElementById('question').textContent = data[0].question;
    templateCard.getElementById('answer1').textContent = data[0].rightAnswer;
    templateCard.getElementById('answer2').textContent = data[0].wrongAnswer1;
    templateCard.getElementById('answer3').textContent = data[0].wrongAnswer2;
    templateCard.getElementById('answer4').textContent = data[0].wrongAnswer3;

    const clone = templateCard.cloneNode(true);
    fragment.appendChild(clone);
    game.appendChild(fragment);
};