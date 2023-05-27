//import * as flsFunctions from './modules/functions.js';

//flsFunctions.isWebp();

// For login.html
    const wrapper = document.querySelector('.login__main__wrapper');
    const loginLink = document.querySelector('.login__main__login__link');
    const registerLink = document.querySelector('.login__main__register__link');

    if(registerLink){
        registerLink.addEventListener('click', ()=> {
            wrapper.classList.add('active-login');
        })
    }

    if(loginLink){
        loginLink.addEventListener('click', ()=> {
            wrapper.classList.remove('active-login');
        })
    }

// Date for formula FDD
let PRB = 6;
let Modulation = 6;
let J = 1;
let coderate = 0.92578125;
let Mimo = 1;
let controlInfo = 0.75;
//---------------------
// Date for formula TDD
let Dl = 2;
let Ul = 6;
let Ssf = 2;
let Dw = 3;
    // ----------------------------------------------------------------------------------------------------------------------------------

    let range = document.querySelector('.input-range');
    let rangeNum = document.querySelector('.input-range__num');
    let showRange = document.querySelector('.showForUser');
    let showForUser = document.querySelector('.showForUserModule');
    if(range, rangeNum){
        range.oninput = function(){
            rangeNum.innerHTML = this.value;
            if(this.value == 10){
                showRange.value = 0.455078125;
                showForUser.value = "64QAM";
                Modulation = 6;
            }
            if(this.value == 1){
                showRange.value = 0.076171875;
                showForUser.value = "QPSK";
                Modulation = 2;
            }
            if(this.value == 2){
                showRange.value = 0.1171875;
                showForUser.value = "QPSK";
                Modulation = 2;
            }
            if(this.value == 3){
                showRange.value = 0.1884765625;
                showForUser.value = "QPSK";
                Modulation = 2;
            }
            if(this.value == 4){
                showRange.value = 0.30078125;
                showForUser.value = "QPSK";
                Modulation = 2;
            }
            if(this.value == 5){
                showRange.value = 0.4384765625;
                showForUser.value = "QPSK";
                Modulation = 2;
            }
            if(this.value == 6){
                showRange.value = 0.587890625;
                showForUser.value = "QPSK";
                Modulation = 2;
            }
            if(this.value == 7){
                showRange.value = 0.369140625;
                showForUser.value = "16QAM";
                Modulation = 4;
            }
            if(this.value == 8){
                showRange.value = 0.478515625;
                showForUser.value = "16QAM";
                Modulation = 4;
            }
            if(this.value == 9){
                showRange.value = 0.6015625;
                showForUser.value = "16QAM";
                Modulation = 4;
            }
            if(this.value == 11){
                showRange.value = 0.5537109375;
                showForUser.value = "64QAM";
                Modulation = 6;
            }
            if(this.value == 12){
                showRange.value = 0.650390625;
                showForUser.value = "64QAM";
                Modulation = 6;
            }
            if(this.value == 13){
                showRange.value = 0.75390625;
                showForUser.value = "64QAM";
                Modulation = 6;
            }
            if(this.value == 14){
                showRange.value = 0.8525390625;
                showForUser.value = "64QAM";
                Modulation = 6;
            }
            if(this.value == 15){
                showRange.value = 0.92578125;
                showForUser.value = "64QAM";
                Modulation = 6;
            }
        coderate = showRange.value;
        }
    }

    // ----------------------------------------------------------------------------------------------------------------------------------
    
    let moduleZero = document.querySelector("#modulation__btn1");
    let moduleFirst = document.querySelector("#modulation__btn2");
    let calcHidden = document.querySelector(".hidden-calc");
    let calcShow = document.querySelector(".show-calc");
    if(moduleZero, moduleFirst){
        moduleZero.oninput = function(){
            calcHidden.classList.add('active');
            calcShow.classList.remove('active');
            coderate = 0.92578125;
            Modulation = 6;
        }
        moduleFirst.oninput = function(){
            calcHidden.classList.remove('active');
            calcShow.classList.add('active');
            coderate = 0.92578125;
            Modulation = 6;
        }
    }

// --------------------------------------------------------------------------------------------------------------------------------------

    let onlyTddZeroBtn = document.querySelector("#onlyTddbtn1");
    let onlyTddFirstBtn = document.querySelector("#onlyTddbtn2");
    let onlyTddCalcHidden = document.querySelector(".hidden-calc_onlyTdd");
    if(onlyTddFirstBtn, onlyTddZeroBtn){
        onlyTddZeroBtn.oninput = function(){
            onlyTddCalcHidden.classList.add('active');
        }
        onlyTddFirstBtn.oninput = function(){
            onlyTddCalcHidden.classList.remove('active');
        }
    }
// -------------------------For FDD-------------------------------------------------------------------------------------------------------------

if(onlyTddFirstBtn, moduleFirst){
    document.querySelector("#SecondInput1").oninput = function(){
        J = this.value;
        console.log(J);
    }
    document.querySelector("#SecondInput2").oninput = function(){
        Mimo = this.value;
        console.log(Mimo);
    }
    
    document.querySelectorAll(".bw1").forEach((element) => {
        element.oninput = function(){
            PRB = element.value;
            console.log(PRB, Mimo);
        }
    })
    
    document.querySelector("#select-modulation1").oninput = function(){
        Modulation = this.value;
        console.log(Modulation);
    }
    
    document.querySelector("#select-modulation2").oninput = function(){
        coderate = this.value;
        console.log(coderate);
    }
    
    document.querySelector("#coderate1").oninput = function(){
        controlInfo = this.value;
        console.log(controlInfo);
    }
}


// -----------For TDD------------------

if(moduleFirst){
    document.querySelector("#TddOnly2").oninput = function(){
        Dw = this.value;
    }
}


function getUlDl(){
    if(FirstInputUl.checked){
        switch(TddOnlyFirst.value){
            case "1":
                DlUl = 6;
                Ssf = 2;
                break;
            case "2":
                DlUl = 4;
                Ssf = 2;
                break;
            case "3":
                DlUl = 2;
                Ssf = 2;
            break;
            case "4":
                DlUl = 3;
                Ssf = 1;
                break;
            case "5":
                DlUl = 2;
                Ssf = 1;
            break;
            case "6":
                DlUl = 1;
                Ssf = 1;
                break;
            case "7":
                DlUl = 5;
                Ssf = 2;
            break;
        }
    }
    if(FirstInputDl.checked){
        switch(TddOnlyFirst.value){
            case "1":
                DlUl = 2;
                Ssf = 2;
                break;
            case "2":
                DlUl = 4;
                Ssf = 2;
                break;
            case "3":
                DlUl = 6;
                Ssf = 2;
            break;
            case "4":
                DlUl = 6;
                Ssf = 1;
                break;
            case "5":
                DlUl = 7;
                Ssf = 1;
            break;
            case "6":
                DlUl = 8;
                Ssf = 1;
                break;
            case "7":
                DlUl = 3;
                Ssf = 2;
            break;
    }
}
}

let DlUl = 6;
let FirstInputDl = document.querySelector("#FirstInputDl");
let FirstInputUl = document.querySelector("#FirstInputUl");
let TddOnlyFirst = document.querySelector("#TddOnly1")
if(TddOnlyFirst, FirstInputDl){
    TddOnlyFirst.oninput = function(){
        getUlDl();
    }
    
    FirstInputDl.oninput = function(){
        getUlDl();
    }
    
    FirstInputUl.oninput = function(){
        getUlDl();
    }

    document.querySelectorAll('input, select').forEach((element) => {
        element.onchange = function(){
            if(onlyTddZeroBtn.checked){
                let answer = (((((14*DlUl)+(Dw*Ssf)) * Modulation)/10)*12*PRB*Mimo*J*coderate)/1000 * controlInfo;
                let buf = answer.toFixed(1);
                document.querySelector('.calculator__end').innerHTML = buf + " Мб/c";
            }
            if(onlyTddFirstBtn.checked){
                let answer = (168*PRB*Modulation*Mimo*J*coderate)/1000 * controlInfo;
                let buf = answer.toFixed(1);
                document.querySelector('.calculator__end').innerHTML = buf + " Мб/c";
            }
    
        }
    })
    
}

// For testing

let testingInput = document.querySelectorAll(".testingInput");
let testingButton = document.querySelector(".button__test");
let hiddenTest = document.querySelector(".base__testing__answer_right");
let answerTest = document.querySelector(".base__testing__answer_right_question");
if(testingButton){

    testingButton.addEventListener('click', ()=> {
        let testingCounter = 0;
       // if(hiddenTest.classList.contains("active")){
        //    hiddenTest.classList.remove("active");
       // }
        hiddenTest.classList.add("active__base");
        testingInput.forEach((element) => {
            if(element.checked & element.value == "1"){
                testingCounter++;
            }

        })
        answerTest.innerHTML = " Вы правильно ответили на " + testingCounter + " из 5 ответов.";
        console.log(testingCounter);
        })
    }
