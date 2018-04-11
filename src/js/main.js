    //HOME
    //donuts
    const  runDonut = () => {
        for(let i=1; i<=74;i++){
            
            let currentBar=document.querySelector(".bar"+i);
            let currentContBar=document.querySelector(".contBar"+i);
            let currentAngle= i * 5
            let currentTranslate = i*20;
            let currentDelay = i * Math.random()*0.2;
            currentContBar.style.transform="rotate("+currentAngle+"deg) translateY(300px) ";
            currentBar.style.animation="bar 2s infinite  "+currentDelay+"s cubic-bezier(.17,.67,.24,.99)";
        }    
    }                                                             
    setTimeout(runDonut(),1000)
    const appearDonut = (number) => {
        let infoCadre=document.createElement("div")
        let pCadre=document.createElement("p")
        let flatLink=document.createElement("div")
        let skewLink=document.createElement("div")
        infoCadre.classList.add("infoCadre")
        flatLink.classList.add("linkR")
        skewLink.classList.add("linkSFlat1")
        skewLink.classList.add("linkR")
        let parentCadre;
        switch(number){
            case "1" :
            flatLink.classList.add("linkRFlat")
            infoCadre.classList.add("infoCadre1")
            parentCadre=document.querySelector(".bar23")
            infoCadre.style.transform="rotate(-115deg) translateY(-300px)"
            pCadre.innerHTML="32.500 comics sont paru depuis la création";
            break;
            case "2":
            flatLink.classList.add("linkRFlat2")
            infoCadre.classList.add("infoCadre2")
            parentCadre=document.querySelector(".bar60")
            infoCadre.style.transform="rotate(-300deg) translateY(-300px)"
            pCadre.innerHTML="Test2";
            break;
            case "3":
            flatLink.classList.add("linkRFlat3")
            infoCadre.classList.add("infoCadre3")
            parentCadre=document.querySelector(".bar10")
            infoCadre.style.transform="rotate(-50deg) translateY(-300px)"
            pCadre.innerHTML="Test3";
            break;
            

        }
        parentCadre.appendChild(infoCadre)
        infoCadre.appendChild(pCadre)
        infoCadre.appendChild(flatLink)
        pCadre.style.animation="textAppear 0.4s ease-in-out forwards 0.8s"
        flatLink.style.animation="lineAppear 0.4s ease-in-out forwards 0.4s"
        parentCadre.style.animation="donutSelect 0.4s ease-in-out forwards"
        
        setTimeout(function(){
            flatLink.style.opacity=1;
            pCadre.style.animation="textDisappear 0.4s ease-in-out forwards "
            flatLink.style.animation="lineDisappear 0.4s ease-in-out forwards 0.4s"
            setTimeout(function(){
                switch(number){
                case "1":
                    document.querySelector(".bar23").style.height="70px"
                    document.querySelector(".bar23").style.animation="donutDeselect 0.4s ease-in-out forwards 0.8s"
                break;
                case "2":
                    document.querySelector(".bar60").style.height="70px"
                    document.querySelector(".bar60").style.animation="donutDeselect 0.4s ease-in-out forwards 0.8s"
                break; 
                case "3":
                    document.querySelector(".bar10").style.height="70px"
                    document.querySelector(".bar10").style.animation="donutDeselect 0.4s ease-in-out forwards 0.8s"
                break;        
            }
        },900)
        },5000)

    }
    const swicthDonuts = () => {
        
        appearDonut("1")
        let k=1;
        setInterval(() => {
            k++
            let l= String(k)
            appearDonut(l)
        },6000)
    }
    swicthDonuts()

    
    