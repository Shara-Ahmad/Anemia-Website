const quizData = [
    {
        question: "Do you have irregular heartbeats ?",
        a: "Never",
        b: "Sometimes",
        c: "Usually",
        d: "Everytime",
        correct: "c",
    },
    {
        question: "Has the colour of your skin turned pale or yellowish ?",
        a: "No",
        b: "Slightly",
        c: "maybe yes",
        d: "Yes",
        correct: "d",
    },
    {
        question: "Do you often experience fatigue and weakness?(Fatigue has many causes besides anemia,so don't assume that you're tired then you must be anemic.Some people learn that their haemoglobin is low,which indicates anemia)",
        a: "No",
        b: "Can't Say",
        c: "Maybe",
        d: "Yes",
        correct: "d",
    },
    {
        question: "Do you often experience shortness or difficulty in breathing ?",
        a: "Never",
        b: "Sometimes",
        c: "Frequently",
        d: "Everytime",
        correct: "b",
    },
    {
        question: "Do you feel dizzy or light headed ?",
        a: "Never",
        b: "Sometimes",
        c: "Frequently",
        d: "Everytime",
        correct: "d",
    },
    {
        question: "Do you experience chest pain ?",
        a: "Never",
        b: "Sometimes",
        c: "Frequently",
        d: "Everytime",
        correct: "d",
    },
    {
        question: "Do you experience headaches?",
        a: "Never",
        b: "Sometimes",
        c: "Frequently",
        d: "Everytime",
        correct: "d",
    },
    {
        question: "Do you experience headaches?",
        a: "Never",
        b: "Sometimes",
        c: "Frequently",
        d: "Everytime",
        correct: "c",
    },
 
];
 
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
 
 
let currentQuiz = 0
let score = 0
 
loadQuiz()
 
function loadQuiz() {
 
    deselectAnswers()
 
    const currentQuizData = quizData[currentQuiz]
 
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
 
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
 
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
 
 
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }
 
       currentQuiz++
 
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>You have ${score}/${quizData.length} chances of having Anemia</h2>
 
           <button onclick="location.reload()">Reload</button>
           `
       }
    }
})
