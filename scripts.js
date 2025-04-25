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


