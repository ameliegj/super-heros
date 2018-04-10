//ANIMATION

for(let i=1; i<=74;i++){
    let currentBar=document.querySelector(".bar"+i);
    let currentContBar=document.querySelector(".contBar"+i);
    console.log(currentBar);
    let currentAngle= i * 5
    let currentTranslate = i*20;
    let currentDelay = i * Math.random()*0.2;
    currentContBar.style.transform=" rotate("+currentAngle+"deg) translateY(300px) ";
    currentBar.style.animation="bar 0.6s 3  "+currentDelay+"s cubic-bezier(.17,.67,.24,.99)";

}