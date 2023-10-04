const questions = [
    {
        question: "問題1的文字",
        options: ["選項1", "選項2", "選項3", "選項4"],
        correctAnswer: 0  // 正確答案的索引
    },
    {
        question: "問題2的文字",
        options: ["選項1", "選項2", "選項3", "選項4"],
        correctAnswer: 2
    },
    // 添加更多問題...
];

let currentQuestionIndex = 0;
const questionElement = document.getElementById("question");
const optionsElement = document.getElementById("options");
const resultElement = document.getElementById("result");

function displayQuestion() {
    const currentQuestion = questions[currentQuestionIndex];
    questionElement.textContent = currentQuestion.question;

    optionsElement.innerHTML = "";
    currentQuestion.options.forEach((option, index) => {
        const button = document.createElement("button");
        button.textContent = option;
        button.onclick = () => checkAnswer(index);
        optionsElement.appendChild(button);
    });
}

function checkAnswer(selectedIndex) {
    const currentQuestion = questions[currentQuestionIndex];
    if (selectedIndex === currentQuestion.correctAnswer) {
        resultElement.textContent = "答對了！";
    } else {
        resultElement.textContent = "答錯了，正確答案是：" + currentQuestion.options[currentQuestion.correctAnswer];
    }

    currentQuestionIndex++;

    if (currentQuestionIndex < questions.length) {
        displayQuestion();
    } else {
        resultElement.textContent = "測驗結束！";
    }
}

// 啟動測驗
displayQuestion();
