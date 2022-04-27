let questionObj = {
  all: [
    (q1 = {
      question: "Jak mam na imie?",
      answers: ["Marek", "Stefan", "Piotr", "Łukasz"],
      poprawna: "Łukasz",
    }),
    (q2 = {
      question: "Jaki sport uprawiam najczęściej",
      answers: ["Tenis", "Pływanie", "Bieganie", "Piłka nożna"],
      poprawna: "Bieganie",
    }),
    (q3 = {
      question: "Mój ulubiony gatunek muzyczny?",
      answers: ["Rap", "Disco-polo", "Pop", "Muzyka Klasyczna"],
      poprawna: "Rap",
    }),
    (q4 = {
      question: "Ile mam rodzeństwa",
      answers: ["0", "3", "2", "Więcej"],
      poprawna: "2",
    }),
    (q5 = {
      question: "Kiedy mam urodziny?",
      answers: ["21.03", "22.07", "22.03", "20.04"],
      poprawna: "22.03",
    }),
    (q6 = {
      question: "Jaki język programowania znam najlepiej?",
      answers: ["Java", "Php", "Javascript", "Python"],
      poprawna: "Javascript",
    }),
    (q7 = {
      question: "Jaki kierunek na studiach ukończyłem?",
      answers: [
        "Budownictwo",
        "Energetyka",
        "Inżynieria Lądowa",
        "Architektura",
      ],
      poprawna: "Energetyka",
    }),
    (q8 = {
      question: "Pod jakim adresem mieszkam?",
      answers: [
        "Zielone Wzgórze 30",
        "Szafranowa 7",
        "Zielone Wzgórze 28",
        "Matemblewska 28",
      ],
      poprawna: "Zielone Wzgórze 30",
    }),
    (q9 = {
      question: "Czym pasjonuje się najbardziej, poza programowaniem?",
      answers: [
        "Motoryzacją",
        "Sklejaniem modeli",
        "Planszówkami",
        "Jazdą na koniach",
      ],
      poprawna: "Motoryzacją",
    }),
    (q10 = {
      question: "Na jakie stanowisko aplikuje?",
      answers: [
        "Front-end developer",
        "Back-end developer",
        "Administrator sieci",
        "Programista gier",
      ],
      poprawna: "Front-end developer",
    }),
    (q11 = {
      question: "Mój lubiony napój gazowany?",
      answers: ["Cola", "Sprite", "Schweppes", "Fanta"],
      poprawna: "Sprite",
    }),
    (q12 = {
      question: "Mój ulubiony kolor z dzieciństwa?",
      answers: ["Zielony", "Różowy", "Czerwony", "Niebieski"],
      poprawna: "Niebieski",
    }),
    (q13 = {
      question: "Cecha która mnie wyróżnia?",
      answers: [
        "Determinacja",
        "Otwartość",
        "Punktualność",
        "Wszystkie pozostałe",
      ],
      poprawna: "Wszystkie pozostałe",
    }),
    (q14 = {
      question: "Jaki kraj chciałbym odwiedzić?",
      answers: ["Kanada", "Słowacja", "Francja", "Japonia"],
      poprawna: "Japonia",
    }),
    (q15 = {
      question: "Jaki język opanowałem w bardzo wysokim stopniu?",
      answers: ["Angielski", "Szwedzki", "Niemiecki", "Chiński"],
      poprawna: "Angielski",
    }),
  ],
};

let koniecGry = questionObj.all.length;
let disabledButton;
let disabledHelper;
let currentRoundNumber = 0;
let comperable = 0;
let punkty = 0;
let answerObjectCopy = JSON.parse(JSON.stringify(questionObj));

let nextRound = document.querySelector(".nextRound");
let answers = document.querySelectorAll(".answer-col");
let question = document.querySelector(".question-col");
let wynikKoncowy = document.querySelector(".wynik-koncowy");
let restart = document.querySelector(".restart");
let comment = document.querySelector(".comment");
let roundNumber = document.querySelector(".round-number");
let letsStart = document.querySelector(".lets-start");
let fiftyFifty = document.querySelector(".helper");
let leftSpan = document.querySelector(".left-right");
let rightSpan = document.querySelector(".right-left");

function updateRoundNumber() {
  roundNumber.innerHTML = `${currentRoundNumber + 1}/${questionObj.all.length}`;
}
updateRoundNumber();

function helper() {
  disabledHelper = false;
  fiftyFifty.addEventListener("click", function () {
    if (disabledHelper) {
      return;
    } else {
      leftSpan.style.width = "110%";
      rightSpan.style.width = "110%";
      this.style.pointerEvents = "none";

      let nonCorrect = Array.from(answers).filter(
        (answer) =>
          answer.innerHTML !== questionObj.all[currentRoundNumber].poprawna
      );
      let deleted1 = nonCorrect[Math.floor(Math.random() * nonCorrect.length)];
      let nonCorrectNext = nonCorrect.filter((n) => n !== deleted1);
      let deleted2 =
        nonCorrectNext[Math.floor(Math.random() * nonCorrectNext.length)];
      deleted1.textContent = "";
      deleted1.style.pointerEvents = "none";
      deleted2.textContent = "";
      deleted2.style.pointerEvents = "none";
    }
  });
}
helper();
function showAnswer() {
  for (let j = 0; j < answers.length; j++) {
    let randomAnswer = Math.floor(
      Math.random() * answerObjectCopy.all[currentRoundNumber].answers.length
    );

    question.textContent = answerObjectCopy.all[currentRoundNumber].question;
    answers[j].textContent =
      answerObjectCopy.all[currentRoundNumber].answers[randomAnswer];
    answerObjectCopy.all[currentRoundNumber].answers.splice(randomAnswer, 1);
  }
}

function answerButtonActions() {
  disabledButton = true;
  koniecGry--;
  comperable++;
  disabledHelper = true;
  answers.forEach((n) => (n.style.pointerEvents = "none"));
  if (koniecGry == 0) {
    setTimeout(end, 1000);
  }
}

function btnBasicProperties() {
  disabledButton = false;
  disabledHelper = false;
  answers.forEach((n) => (n.style.pointerEvents = "auto"));
  answers.forEach(function (answer) {
    answer.classList.remove("good");
    answer.classList.remove("bad");
    answer.classList.remove("winning-col");
  });
}

function goFurther() {
  if (comperable == currentRoundNumber) {
    return;
  } else {
    currentRoundNumber++;
    btnBasicProperties();
    showAnswer();
    updateRoundNumber();
    answers.forEach((answer) => (answer.style.pointerEvents = "auto"));
    if (currentRoundNumber == questionObj.all.length - 1) {
      nextRound.style.display = "none";
    }
  }
}
letsStart.addEventListener("click", function () {
  main.style.display = "flex";
  main.classList.add("animate");
  entry.style.display = "none";
  showAnswer();
});

nextRound.addEventListener("click", function () {
  goFurther();
});

document.addEventListener("keydown", function (event) {
  if (event.code == "Enter" || event.code == "Space") {
    goFurther();
  }
});

answers.forEach(function (answer) {
  answer.addEventListener("click", function (e) {
    if (disabledButton) {
      return;
    } else {
      if (
        e.target.textContent == questionObj.all[currentRoundNumber].poprawna
      ) {
        this.classList.add("good");
        punkty++;
        answerButtonActions();
      } else {
        this.classList.add("bad");
        answerButtonActions();
        Array.from(answers)
          .find(
            (answer) =>
              answer.innerHTML == questionObj.all[currentRoundNumber].poprawna
          )
          .classList.add("winning-col");
      }
    }
  });
});

function end() {
  gameContainer.style.display = "none";
  endContainer.style.display = "flex";
  endContainer.classList.add("animate");
  wynikKoncowy.textContent = `Twój wynik to ${punkty}/${questionObj.all.length}`;
  roundNumber.style.display = "none";

  if (punkty >= questionObj.all.length - 3) {
    comment.textContent = "WOW! Bardzo dobrze mnie znasz!";
  } else if (
    punkty <= questionObj.all.length - 4 &&
    punkty >= questionObj.all.length - 9
  ) {
    comment.textContent = "Nie jest tak źle, ale mogłoby być lepiej.  ";
  } else {
    comment.textContent =
      "Wynik średni, ale nie przejmuj się, może jeszcze mnie poznasz :).";
  }
}

restart.addEventListener("click", function () {
  gameContainer.style.display = "block";
  endContainer.style.display = "none";
  roundNumber.style.display = "block";
  leftSpan.style.width = "0%";
  rightSpan.style.width = "0%";
  fiftyFifty.style.pointerEvents = "auto";
  koniecGry = questionObj.all.length;
  currentRoundNumber = 0;
  comperable = 0;
  punkty = 0;
  answerObjectCopy = JSON.parse(JSON.stringify(questionObj));
  nextRound.style.display = "block";
  roundNumber.innerHTML = `1/${questionObj.all.length}`;
  showAnswer();
  btnBasicProperties();
});
