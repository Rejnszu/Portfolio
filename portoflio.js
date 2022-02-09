"use strict";

// NAWGIACJA
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
function showDownGlobal() {
  let navLinks = document.querySelectorAll(".nav-link");
  navLinks.forEach(function (link, i) {
    function showDown() {
      link.style.transform = "translateX(0px)";
    }
    setInterval(showDown, 200 * i);
  });
}
setInterval(showDownGlobal, 2000);
function scrollNav() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    naviContainer.classList.add("active");
  } else {
    naviContainer.classList.remove("active");
  }
}

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

skillBoxInside.forEach((move) => moveObserver.observe(move));

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
    wrappers.forEach((n) => (n.style.display = "none"));
    wrappers[g].style.display = "flex";
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
