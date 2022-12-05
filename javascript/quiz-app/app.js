const quizData = [
    {
        question: 'How old is florin?',
        a: '10',
        b: '17',
        c: '26',
        d: '110',
        correct: 'c'
    }, {
        question: 'What is the most used programming language in 2019?',
        a: 'Java',
        b: 'C',
        c: 'Python',
        d: 'JavaScript',
        corrent: 'd'
    }, {
        question: 'Who is he President of US?',
        a: 'Florin pop',
        b: 'Donald Trump',
        c: 'Ivan Saldano',
        d: 'Mihai Anderi', 
        correct: 'b'
    }, {
        question: 'What does HTML stand for?',
        a: 'Hypertext Markup Language',
        b: 'Cascading Style Sheet',
        c: 'Jason Object Notation',
        d: 'Helicopters Terminals Motorboats Lamborginis',
        correct: 'a'
    }, {
        question: 'What year was JavaScript launched?',
        a: '1996',
        b: '1995',
        c: '1994',
        d: 'none of the above',
        correct: 'd'
    }
];

const questionEl = document.getElementById('question');
const a_text = document.getElementById('a_text');
const b_text = document.getElementById('b_text');
const c_text = document.getElementById('c_text');
const d_text = document.getElementById('d_text');
const submitBtn = document.getElementById('submit');

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
    const currentQuizData = quizData[currentQuiz];

    questionEl.innerHTML = currentQuizData.question;
    a_text.innerHTML = currentQuizData.a;
    b_text.innerHTML = currentQuizData.b;
    c_text.innerHTML = currentQuizData.c;
    d_text.innerHTML = currentQuizData.d;
}

function getSelected() {
    const answerEls = document.querySelectorAll('.answer');

    answerEls.forEach((answerEl) => {
        if (answerEl.checked) {
            return answerEl.id;
        }
    });
    return undefined;
}

submitBtn.addEventListener('click', () => {
    currentQuiz++;

    const answer = getSelected();

    if (answer) {
        if(currentQuiz < quizData.length) {
            loadQuiz();
        } else {
            alert('You finished! Get yourself an Orange Lemonade');
        }
    }

});