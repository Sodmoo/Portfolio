//write repeater
const texts = [
    "WEB_DEVELOPER",
    "MOBILE_DEVELOPER",
    "GAME_DEVELOPER"
]
let speed  =100;
const textElements = document.querySelector(".typewriter-text");
let textIndex = 0;
let charcterIndex = 0;
function typeWriter(){
    if (charcterIndex < texts[textIndex].length){
        textElements.innerHTML += texts[textIndex].charAt(charcterIndex);
        charcterIndex++;
        setTimeout(typeWriter, speed);
    }
    else{
        setTimeout(eraseText, 1000)
    }
}
function eraseText(){
    if(textElements.innerHTML.length > 0){
        textElements.innerHTML = textElements.innerHTML.slice(0,-1);
        setTimeout(eraseText, 50)
    }
    else{
        textIndex = (textIndex + 1) % texts.length;
        charcterIndex = 0;
        setTimeout(typeWriter, 500)
    }
}
window.onload = typeWriter;
//navbar active

const cube = document.querySelector('.box');
const navs = document.querySelectorAll('.nav-list li');
navs.forEach((nav,idx)=>{
    nav.addEventListener('click',()=>{
        document.querySelector('.nav-list li.active').classList.remove('active');
        nav.classList.add('active');

        cube.style.transform = `rotateY(${idx * -90}deg)`;
    });
});
//resume section click tab-list
const resumelists=document.querySelectorAll('.resume-list');
const resumeboxs=document.querySelectorAll('.resume-box');
resumelists.forEach((list,idx)=>{
    list.addEventListener('click',()=>{
        document.querySelector('.resume-list.active').classList.remove('active');
        list.classList.add('active');

        document.querySelector('.resume-box.active').classList.remove('active');
        resumeboxs[idx].classList.add('active');
    });
});
//portfolia section click tab-list
const portfoliolists=document.querySelectorAll('.portfolio-list');
const portfolioboxs=document.querySelectorAll('.portfolio-box');
portfoliolists.forEach((list,idx)=>{
    list.addEventListener('click',()=>{
        document.querySelector('.portfolio-list.active').classList.remove('active');
        list.classList.add('active');

        document.querySelector('.portfolio-box.active').classList.remove('active');
        portfolioboxs[idx].classList.add('active');
    });
});



