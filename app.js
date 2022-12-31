$(document).ready(function(){
    $("h2").css("color", "red", "font-family", "sans-serif", "font-weight", "bold").padding(5);
    $("*").margin(0).padding(0).css("box-sizing", "border-box");
    $("h1").css("font-family", "sans-serif").font-weight(800).margin(15, 0);
});
const uScore = document.getElementById('user_score');
const cScore = document.getElementById('computer_score');
const buttons = document.querySelectorAll('.selection button');
const showIcon = document.querySelector('.show i');
const computerShowIcon = document.querySelector('.computer i');

let user_score = 1;
let computer_score = 1;

const rockIcon = "fas fa-hand-rock";
const paperIcon = "fas fa-hand-paper";
const scissorsIcon = "fas fa-hand-scissors";

const randomClasses = [rockIcon, paperIcon, scissorsIcon];
const text2 = document.getElementById('Demo');

const tie = ()=>{
    text.innerHTML = "seri ! ";
    text.style.color = 'white';
    text2.innerHTML = text.innerHTML;
    text2.style.color = 'white';
}

const win = ()=>{
    text.innerHTML = "menang ! ";
    text.style.color = 'yellow';
    text2.innerHTML = text.innerHTML;
    text2.style.color = 'yellow';
}

const lose = ()=>{
    text.innerHTML = "kalah ! ";
    text.style.color = 'black';
    text2.innerHTML = text.innerHTML;
    text2.style.color = 'black';
}

const game = () =>{
    buttons.forEach(btn =>{
        btn.addEventListener('click',(e)=>{
           let clickedBtn = e.target.className;
           showIcon.className = clickedBtn;
           let randomNum = Math.floor(Math.random() * randomClasses.length);
           computerShowIcon.className = randomClasses[randomNum];

           if(showIcon.className === computerShowIcon.className){
               uScore.innerHTML = uScore.innerHTML;
               cScore.innerHTML = cScore.innerHTML;
               tie();
           }

           else if(showIcon.className === rockIcon && computerShowIcon.className === scissorsIcon){
               uScore.innerHTML = user_score;
               user_score++;
               win();
           }else if(showIcon.className === rockIcon && computerShowIcon.className === paperIcon){
               cScore.innerHTML = computer_score;
               computer_score++;
               lose();
           }else if(showIcon.className === paperIcon && computerShowIcon.className === scissorsIcon){
               cScore.innerHTML = computer_score;
               computer_score++;
               lose();
           }else if(showIcon.className === paperIcon && computerShowIcon.className === rockIcon){
               uScore.innerHTML = user_score;
               user_score++;
               win();
           }else if(showIcon.className === scissorsIcon && computerShowIcon.className === rockIcon){
               cScore.innerHTML = computer_score;
               computer_score++;
               lose();
           }else if(showIcon.className === scissorsIcon && computerShowIcon.className === paperIcon){
               uScore.innerHTML = user_score;
               user_score++;
               win();
           }
        });
    });
}

game();