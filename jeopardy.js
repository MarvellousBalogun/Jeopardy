function adjustScore(teamId) {
    var inputElement = document.getElementById(teamId + "-input");
    var scoreElement = document.getElementById(teamId + "-score");

    if (inputElement.value.trim() !== "") {
        var newScore = parseInt(inputElement.value);
        var currentScore = parseInt(scoreElement.value);
        var updatedScore = currentScore + newScore;
        scoreElement.value= updatedScore;
        inputElement.value = ""; 
    }
}

let popup = document.getElementById("popup");
let question_text = document.getElementById("question_text");
let closePopup = document.getElementById("closePopup");
let questionTitle = document.getElementById("questionTitle");

let category1_1 = document.getElementById("Category1.1");
let category1_2 = document.getElementById("Category1.2");
let category1_3 = document.getElementById("Category1.3");
let category1_4 = document.getElementById("Category1.4");
let category1_5 = document.getElementById("Category1.5");

let category2_1 = document.getElementById("Category2.1");
let category2_2 = document.getElementById("Category2.2");
let category2_3 = document.getElementById("Category2.3");
let category2_4 = document.getElementById("Category2.4");
let category2_5 = document.getElementById("Category2.5");

let category3_1 = document.getElementById("Category3.1");
let category3_2 = document.getElementById("Category3.2");
let category3_3 = document.getElementById("Category3.3");
let category3_4 = document.getElementById("Category3.4");
let category3_5 = document.getElementById("Category3.5");

let category4_1 = document.getElementById("Category4.1");
let category4_2 = document.getElementById("Category4.2");
let category4_3 = document.getElementById("Category4.3");
let category4_4 = document.getElementById("Category4.4");
let category4_5 = document.getElementById("Category4.5");



closePopup.onclick = function(){
    popup.classList.remove("open-popup");
}



category1_1.onclick = function(){
    
    questionTitle.innerHTML = "Literature $100";
    question_text.innerHTML = 
    "This author wrote “Pride and Prejudice.”";
    popup.classList.add("open-popup");
}
category1_2.onclick = function(){
    
    questionTitle.innerHTML = "Literature $200";
    question_text.innerHTML = 
    "“To be or not to be” is a famous line from this Shakespeare play.";
    popup.classList.add("open-popup");
}
category1_3.onclick = function(){
    
    questionTitle.innerHTML = "Literature $300";
    question_text.innerHTML = 
    "This epic poem by Homer is about the fall of Troy.";
    popup.classList.add("open-popup");
}
category1_4.onclick = function(){
    
    questionTitle.innerHTML = "Literature $400";
    question_text.innerHTML = 
    "He is known for his horror novels, including “Carrie” and “The Shining.”";
    popup.classList.add("open-popup");
}
category1_5.onclick = function(){
    
    questionTitle.innerHTML = "Literature $500";
    question_text.innerHTML = 
    "The “Harry Potter” series was written by this author.";
    popup.classList.add("open-popup");
}




category2_1.onclick = function(){
    
    questionTitle.innerHTML = "World Capitals $100";
    question_text.innerHTML = 
    "This city is the capital of France.";
    popup.classList.add("open-popup");
}
category2_2.onclick = function(){
    
    questionTitle.innerHTML = "World Capitals $200";
    question_text.innerHTML = 
    "This city is the capital of Japan.";
    popup.classList.add("open-popup");
}
category2_3.onclick = function(){
    
    questionTitle.innerHTML = "World Capitals $300";
    question_text.innerHTML = 
    "Canberra is the capital of this country.";
    popup.classList.add("open-popup");
}
category2_4.onclick = function(){
    
    questionTitle.innerHTML = "World Capitals $400";
    question_text.innerHTML = 
    "Known as the “Eternal City,” it’s the capital of Italy.";
    popup.classList.add("open-popup");
}
category2_5.onclick = function(){
    
    questionTitle.innerHTML = "World Capitals $400";
    question_text.innerHTML = 
    "This Canadian city is the country’s capital.";
    popup.classList.add("open-popup");
}





category3_1.onclick = function(){
    
    questionTitle.innerHTML = "Science $100";
    question_text.innerHTML = 
    "This is the chemical symbol for water.";
    popup.classList.add("open-popup");
}
category3_2.onclick = function(){
    
    questionTitle.innerHTML = "Science $200";
    question_text.innerHTML = 
    "Newton is famous for this law of motion.";
    popup.classList.add("open-popup");
}
category3_3.onclick = function(){
    
    questionTitle.innerHTML = "Science $300";
    question_text.innerHTML = 
    "The study of life is known as this.";
    popup.classList.add("open-popup");
}
category3_4.onclick = function(){
    
    questionTitle.innerHTML = "Science $400";
    question_text.innerHTML = 
    "This planet is known as the Red Planet.";
    popup.classList.add("open-popup");
}
category3_5.onclick = function(){
    
    questionTitle.innerHTML = "Science $500";
    question_text.innerHTML = 
    "Einstein is renowned for this theory of relativity.";
    popup.classList.add("open-popup");
}




category4_1.onclick = function(){
    
    questionTitle.innerHTML = "American History $100";
    question_text.innerHTML = 
    "This document declared the independence of the 13 American colonies from Britain.";
    popup.classList.add("open-popup");
}
category4_2.onclick = function(){
    
    questionTitle.innerHTML = "American History $200";
    question_text.innerHTML = 
    "He was the first President of the United States.";
    popup.classList.add("open-popup");
}
category4_3.onclick = function(){
    
    questionTitle.innerHTML = "American History $300";
    question_text.innerHTML = 
    "This war was fought between the North and South regions of the United States.";
    popup.classList.add("open-popup");
}
category4_4.onclick = function(){
    
    questionTitle.innerHTML = "American History $400";
    question_text.innerHTML = 
    "This purchase doubled the size of the United States in 1803.";
    popup.classList.add("open-popup");
}
category4_5.onclick = function(){
    
    questionTitle.innerHTML = "American History $500";
    question_text.innerHTML = 
    "The “Gettysburg Address” was delivered by this president.";
    popup.classList.add("open-popup");
}