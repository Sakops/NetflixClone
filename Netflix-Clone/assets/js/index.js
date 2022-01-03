//Question 1
const targetDiv = document.getElementById("answer1");
const button = document.getElementById("question1");

button.onclick = function(){
    if(targetDiv.style.display !== "none"){
        targetDiv.style.display = "none";
        targetDiv.style.marginBottom = "0.4em"

    }else{
        targetDiv.style.display = "block";
    }
}
//Question 2
const question2 = document.getElementById("answer2");
const question2Btn = document.getElementById("question2");
question2Btn.onclick = function(){
    if(question2.style.display !== "none"){
        question2.style.display = "none";
    }else{
        question2.style.display = "block";
        question2.style.marginBottom = "0.4em"
    }
}
//Question 3
const question3 = document.getElementById("answer3");
const question3Btn = document.getElementById("question3");
question3Btn.onclick = function(){
    if(question3.style.display !== "none"){
        question3.style.display = "none";
    }else{
        question3.style.display = "block";
        question3.style.marginBottom = "0.4em"
    }
} 
//Question 4
const question4 = document.getElementById("answer4");
const question4Btn = document.getElementById("question4");
question4Btn.onclick = function(){
    if(question4.style.display !== "none"){
        question4.style.display = "none";
    }else{
        question4.style.display = "block";
        question4.style.marginBottom = "0.4em"
    }
} 
//Question 5
const question5 = document.getElementById("answer5");
const question5Btn = document.getElementById("question5");
question5Btn.onclick = function(){
    if(question5.style.display !== "none"){
        question5.style.display = "none";
    }else{
        question5.style.display = "block";
        question5.style.marginBottom = "0.4em"
    }
} 
