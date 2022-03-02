"use strict";

// NAWGIACJA
let html = document.getElementsByTagName("html");

let langWrapper = document.querySelector(".language-wrapper");
let langButton = document.querySelector(".language-button");

langWrapper.addEventListener("click", function () {
  langButton.classList.toggle("active");
  setTimeout(function () {
    if (location.href == "http://127.0.0.1:5500/portfolio.html") {
      location.href = "http://127.0.0.1:5500/portfolioPL.html";
    } else {
      location.href = "http://127.0.0.1:5500/portfolio.html";
    }
  }, 500);
});

if (location.href == "http://127.0.0.1:5500/portfolioPL.html") {
  langButton.classList.toggle("active");
  html[0].setAttribute("lang", "pl");
}

let navOpenBtn = document.querySelector(".openbtn-wrapper");
let naviContainer = document.querySelector(".navi-container");
navOpenBtn.addEventListener("click", function () {
  let navOpenBtnSpan = document.querySelectorAll(".openbtn-wrapper > span");
  let nav = document.querySelector(".navi-container-mobile");
  nav.classList.toggle("active");
  navOpenBtnSpan.forEach((span) => span.classList.toggle("active"));
});

window.onscroll = function () {
  scrollNav();
};
word.innerHTML = word.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);
let navLinks = document.querySelectorAll(".nav-link");
let letters = document.querySelectorAll(".letter");
function showDownGlobal() {
  navLinks.forEach(function (link, i) {
    function showDown() {
      link.style.transform = "translateX(0px)";
    }
    setTimeout(showDown, 200 * i);
  });

  Array.from(letters).forEach(function (letter, i) {
    function down() {
      letter.classList.add("animate");
    }
    setTimeout(down, (i + 2) * 100);
  });
}

setTimeout(showDownGlobal, 2000);
function scrollNav() {
  if (window.pageYOffset > 80) {
    naviContainer.classList.add("active");
    langWrapper.style.display = "none";
  } else {
    naviContainer.classList.remove("active");
    langWrapper.style.display = "block";
  }
}
let containers = document.querySelectorAll(".section");

let linkOptions = {
  root: null,
  rootMargin: "-50px 0px -50px 0px",
  threshold: 0.3,
};

let linksObserver = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      navLinks.forEach(function (n) {
        n.children[0].classList.remove("active");
        if (
          entry.target.dataset.name ==
            n.href.replace("http://127.0.0.1:5500/portfolio.html#", "") ||
          entry.target.dataset.name ==
            n.href.replace("http://127.0.0.1:5500/portfolioPL.html#", "")
        ) {
          n.children[0].classList.add("active");
        }
      });
    }
  });
},
linkOptions);

containers.forEach((container) => linksObserver.observe(container));

let skillObj = [
  { name: "HTML", percent: "70%" },
  { name: "CSS", percent: "70%" },
  { name: "JAVASCRIPT", percent: "60%" },
  { name: "BOOSTRAP", percent: "80%" },
  { name: "GIT", percent: "50%" },
  { name: "WORDPRESS", percent: "60%" },
  { name: "PHP", percent: "25%" },
  { name: "UI/UX", percent: "30%" },
];
let dataSkillTemplate = document.querySelector("[data-skill-template]");
let skillCardContainer = document.querySelector("[skill-card-container]");

skillObj.forEach(function (skill) {
  let skillCard = dataSkillTemplate.content.cloneNode(true).children[0];
  let dataSkill = skillCard.querySelector("[data-skill]");
  let dataPercent = skillCard.querySelector("[data-percent]");
  dataSkill.textContent = skill.name;
  dataPercent.textContent = skill.percent;
  skillCardContainer.append(skillCard);
});
let skillDiv = document.querySelectorAll(".skills-div");
let skillBoxInside = document.querySelectorAll(".skill-box-dot");

let options = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0,
};
let moveObserver = new IntersectionObserver(function Moving(entries, observer) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.style.width = entry.target.children[0].innerHTML;
      moveObserver.unobserve(entry.target);
    }
  });
}, options);
let options1 = {
  root: null,
  rootMargin: "0px 0px 0px 0px",
  threshold: 0,
};
skillBoxInside.forEach((move) => moveObserver.observe(move));

let moveObserver1 = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("active");
      moveObserver.unobserve(entry.target);
    }
  });
},
options1);

skillDiv.forEach((move) => moveObserver1.observe(move));

let prev = document.querySelector(".prev");
let next = document.querySelector(".next");
let slides = document.querySelectorAll(".slide");
let dots = document.querySelectorAll(".dot");
let sliderOffsetX = 110;
let s = 0;

function initialSlidesPosition() {
  slides.forEach(
    (slide, i) =>
      (slide.style.transform = "translateX(" + sliderOffsetX * i + "%" + ")")
  );
}

function previousSlide() {
  s -= 1;
  if (s < 0) {
    s = slides.length - 1;
  }
  dots.forEach((dotActive) => dotActive.classList.remove("active"));
  dots[s].classList.add("active");
  slides.forEach(function (slide, i) {
    slide.style.transform =
      "translateX(" + -sliderOffsetX * (-i + s) + "%" + ")";
  });
}
function nextSlide() {
  s += 1;
  if (s >= slides.length) {
    s = 0;
  }
  dots.forEach((dotActive) => dotActive.classList.remove("active"));
  dots[s].classList.add("active");
  slides.forEach(function (slide, i) {
    slide.style.transform =
      "translateX(" + -sliderOffsetX * (-i + s) + "%" + ")";
  });
}
initialSlidesPosition();
function moveSlides() {
  prev.addEventListener("click", function () {
    previousSlide();
  });
  document.addEventListener("keydown", function (event) {
    if (event.code == "ArrowLeft") {
      previousSlide();
    }
  });
  next.addEventListener("click", function () {
    nextSlide();
  });
  document.addEventListener("keydown", function (event) {
    if (event.code == "ArrowRight") {
      nextSlide();
    }
  });
  dots.forEach(function (dot, dotIndex) {
    dot.addEventListener("click", function () {
      dots.forEach((dotActive) => dotActive.classList.remove("active"));
      this.classList.add("active");
      s = dotIndex;
      slides.forEach(function (slide, i) {
        slide.style.transform =
          "translateX(" + -sliderOffsetX * (-i + s) + "%" + ")";
      });
    });
  });
}

moveSlides();

let leftBracket = document.querySelectorAll(".left-bracket");
let rightBracket = document.querySelectorAll(".right-bracket");
let h2Inside = document.querySelectorAll(".h2-inside");
let bracketOptions = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0,
};

let bracketObserver = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("active");
      bracketObserver.unobserve(entry.target);
    }
  });
},
bracketOptions);

leftBracket.forEach((bracket) => bracketObserver.observe(bracket));
rightBracket.forEach((bracket) => bracketObserver.observe(bracket));
h2Inside.forEach((inside) => bracketObserver.observe(inside));

let content = document.querySelector(".content");
let loader = document.querySelector(".loader");
function appear() {
  content.style.display = "block";
}
setTimeout(appear, 2000);

function disappear() {
  loader.style.display = "none";
}
setTimeout(disappear, 3000);

// reviews

function reviews() {
  let arrLeft = document.querySelectorAll(".arrow-review-left");
  let arrRight = document.querySelectorAll(".arrow-review-right");
  let wrappers = document.querySelectorAll(".wrapper-review");
  let g = 0;

  function hide() {
    for (let i = 1; i < wrappers.length; i++) {
      wrappers[i].style.display = "none";
    }
  }
  hide();

  function arrowMove() {
    wrappers.forEach(function (n, i) {
      n.style.display = "none";
      n.style.opacity = "0";
      if (i % 2 == 0) {
        n.style.transform = "translateX(-50px)";
      } else {
        n.style.transform = "translateX(50px)";
      }
    });
    wrappers[g].style.display = "flex";
    setTimeout(() => {
      wrappers[g].style.opacity = "1";
      wrappers[g].style.transform = "translateX(0)";
    }, 50);
  }

  arrRight.forEach(function (arrow) {
    arrow.addEventListener("click", function () {
      g++;
      if (g >= wrappers.length) {
        g = 0;
      }
      arrowMove();
    });
  });
  arrLeft.forEach(function (arrow) {
    arrow.addEventListener("click", function () {
      g--;
      if (g < 0) {
        g = wrappers.length - 1;
      }
      arrowMove();
    });
  });
}
reviews();

let sendBtn = document.getElementById("sendBtn");
let sendIcon = document.querySelector(".bi-send-check");
let sendText = document.querySelectorAll("#sendBtn > p");

sendBtn.addEventListener("click", function () {
  sendIcon.style.opacity = "1";
  this.children[0].style.opacity = "0";
});

// ANIMACJE ELEMENTÓW

let animateOptions = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0.3,
};
let contactInput = document.querySelectorAll(".styled-input");
let moveObserverAnimate = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("animate");
      moveObserver.unobserve(entry.target);
    }
  });
},
animateOptions);

moveObserverAnimate.observe(sliderContainer);
moveObserverAnimate.observe(containerReview);

contactInput.forEach((input) => moveObserverAnimate.observe(input));

// moving background elements
let backgroundElements = [
  { className: "background-element" },
  { className: "background-element1" },
  { className: "background-element2" },
  { className: "background-element3" },
];

backgroundElements.forEach(function (n) {
  let backgroundEl = document.createElement("div");
  backgroundEl.className = n.className;
  backgroundEl.classList.add("animate");
  backgroundEl.classList.add("background-elements");
  content.append(backgroundEl);
});

quizH3.innerHTML = quizH3.textContent.replace(
  /\S/g,
  "<span class='letterH3'>$&</span>"
);

let quizLetters = document.querySelectorAll(".letterH3");

let animateLettersOptions = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0.3,
};

let moveObserverLetterAnimate = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      Array.from(quizLetters).forEach(function (letter, i) {
        function down() {
          letter.classList.add("animate");
        }
        setTimeout(down, i * 50);
      });
      moveObserver.unobserve(entry.target);
    }
  });
},
animateLettersOptions);
moveObserverLetterAnimate.observe(quizH3);

let h2InsideContact = document.querySelectorAll(".h2-inside-contact");
h2InsideContact.forEach(
  (n) =>
    (n.innerHTML = n.textContent.replace(
      /\S/g,
      "<span class='letterContact'>$&</span>"
    ))
);
let contactLetters = document.querySelectorAll(".letterContact");

let animateLettersOptionsContact = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0.3,
};

let moveObserverLetterAnimateContact = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      Array.from(contactLetters).forEach(function (letter, i) {
        function down() {
          letter.classList.add("animate");
        }
        setTimeout(down, i * 50);
      });
      moveObserver.unobserve(entry.target);
    }
  });
},
animateLettersOptionsContact);
h2InsideContact.forEach((input) =>
  moveObserverLetterAnimateContact.observe(input)
);

// let contactLi = document.querySelectorAll(".contact-list > li");
// contactLi.forEach(
//   (n) =>
//     (n.innerHTML = n.textContent.replace(
//       /\S/g,
//       "<span class='contact-li'>$&</span>"
//     ))
// );
// let contaLiSpan = document.querySelectorAll(".contact-li");

// contactLi.forEach(function (contact) {
//   contact.addEventListener("mouseenter", function () {
//     let repeat = true;
//     Array.from(contaLiSpan).forEach(function (letter, i) {
//       letter.style.opacity = "0";
//       letter.style.transform = "translateX(50px)";

//       setTimeout(() => {
//         letter.style.opacity = "1";
//         letter.style.transform = "translateX(0)";
//       }, 100 * i);
//     });
//   });
// });
let socialIcon = document.querySelectorAll(".social-icon");
socialIcon.forEach(function (icon) {
  icon.addEventListener("mouseenter", function () {
    if (this.classList.contains("active")) {
      return;
    } else this.classList.add("active");
    setTimeout(() => this.classList.remove("active"), 2000);
  });
});
