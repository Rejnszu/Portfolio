("use strict");

// EKRAN ŁADOWANIA
console.log(window.location.origin);
let content = document.querySelector(".content");
let loader = document.querySelector(".loader");

setTimeout(() => (content.style.display = "block"), 500);

setTimeout(() => (loader.style.display = "none"), 1500);

// NAWIGACJA
let mobileNavigation = document.querySelector(".navi-container-mobile");
let navOpenBtn = document.querySelector(".openbtn-wrapper");
let naviContainer = document.querySelector(".navi-container");
let navOpenBtnSpan = document.querySelectorAll(".openbtn-wrapper > span");
const navLinkMobile = document.querySelectorAll(".nav-link-mobile");
let langWrapper = document.querySelector(".language-wrapper");
let langButton = document.querySelector(".language-button");

function mobileMenuHandler(handler) {
  handler.addEventListener("click", function () {
    mobileNavigation.classList.toggle("active");
    navOpenBtnSpan.forEach((span) => span.classList.toggle("active"));
  });
}

mobileMenuHandler(navOpenBtn);
navLinkMobile.forEach((mobileNavLink) => {
  mobileMenuHandler(mobileNavLink);
});

const legend = document.getElementById("legend");
legend.innerHTML = legend.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);

let navLinksDesktop = document.querySelectorAll(".nav-link-desktop");
let letters = document.querySelectorAll(".letter");
function showDownGlobal() {
  navLinksDesktop.forEach(function (link, i) {
    function showDown() {
      link.style.transform = "translateX(0px)";
    }
    setTimeout(showDown, 200 * (i + 6));
  });

  Array.from(letters).forEach(function (letter, i) {
    function down() {
      letter.classList.add("animate");
    }
    setTimeout(down, (i + 2) * 100);
  });
}

setTimeout(showDownGlobal, 400);

function scrollNav() {
  if (window.pageYOffset > 80) {
    naviContainer.classList.add("active");
    langWrapper.style.display = "none";
    navLinksDesktop.forEach((n) => (n.style.color = "white"));
    navLinksDesktop.forEach((n) => n.children[0].classList.add("color"));
  } else {
    naviContainer.classList.remove("active");
    langWrapper.style.display = "block";
    navLinksDesktop.forEach((n) => (n.style.color = "black"));
    navLinksDesktop.forEach((n) => n.children[0].classList.remove("color"));
  }
}
window.onscroll = function () {
  scrollNav();
};

let containers = document.querySelectorAll(".section");

let linkOptions = {
  root: null,
  rootMargin: "-40px 0px -40px 0px",
  threshold: 0.2,
};

let linksObserver = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      navLinksDesktop.forEach(function (navLink) {
        navLink.children[0].classList.remove("active");
        console.log(navLink.href);
        if (
          entry.target.dataset.name ==
            navLink.href.replace(`${window.location.origin}/Portfolio/#`, "") ||
          entry.target.dataset.name ==
            navLink.href.replace(
              `${window.location.origin}/Portfolio/portfolio_en/#`,
              ""
            )
        ) {
          navLink.children[0].classList.add("active");
        }
      });
    }
  });
},
linkOptions);

containers.forEach((container) => linksObserver.observe(container));

// UMIEJĘTNOŚCI KODOWANIA
let skillObj = [
  { name: "HTML", percent: "80%" },
  { name: "CSS", percent: "80%" },
  { name: "Sass", percent: "50%" },
  { name: "BOOTSTRAP", percent: "70%" },
  { name: "JAVASCRIPT", percent: "70%" },
  { name: "REACT", percent: "65%" },
  { name: "REDUX", percent: "80%" },
  { name: "WORDPRESS", percent: "40%" },
  { name: "PHP", percent: "30%" },
  { name: "GIT", percent: "60%" },
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
skillBoxInside.forEach((skill) => {
  skill.style.width = skill.children[0].innerHTML;
});
let options = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0,
};
let moveObserverInsideSkills = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("active");
      moveObserverInsideSkills.unobserve(entry.target);
    }
  });
},
options);
skillBoxInside.forEach((move) => moveObserverInsideSkills.observe(move));
let options1 = {
  root: null,
  rootMargin: "0px 0px 0px 0px",
  threshold: 0,
};

let moveObserverSkillsWrapper = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("active");
      moveObserverSkillsWrapper.unobserve(entry.target);
    }
  });
},
options1);

skillDiv.forEach((move) => moveObserverSkillsWrapper.observe(move));

// PORTFOLIO
//<------Navigation------>
const portfolioLinks = document.querySelectorAll(".nav__portfolio li a");
const portfolioRows = document.querySelectorAll(".row--portfolio");

portfolioLinks.forEach((link) => {
  link.addEventListener("click", () => {
    portfolioRows.forEach((row) => {
      row.classList.remove("active");
      if (link.getAttribute("data-nav") == row.getAttribute("data-row")) {
        row.classList.add("active");
      }
    });
  });
});
//<------More info------>
let hiddenInfo = document.querySelectorAll(".hidden-info");
let infoBtn = document.querySelectorAll(".info-btn");

infoBtn.forEach(function (btn) {
  btn.addEventListener("click", function () {
    Array.from(this.children).forEach((btn) => btn.classList.toggle("hide"));
    this.previousElementSibling.classList.toggle("active");
  });
});

// HEADERY
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

// REVIEWS

function reviews() {
  let arrLeft = document.querySelectorAll(".arrow-review-left");
  let arrRight = document.querySelectorAll(".arrow-review-right");
  let wrappers = document.querySelectorAll(".wrapper-review");
  let currentReview = 0;

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
    wrappers[currentReview].style.display = "flex";
    setTimeout(() => {
      wrappers[currentReview].style.opacity = "1";
      wrappers[currentReview].style.transform = "translateX(0)";
    }, 50);
  }

  arrRight.forEach(function (arrow) {
    arrow.addEventListener("click", function () {
      currentReview++;
      if (currentReview >= wrappers.length) {
        currentReview = 0;
      }
      arrowMove();
    });
  });
  arrLeft.forEach(function (arrow) {
    arrow.addEventListener("click", function () {
      currentReview--;
      if (currentReview < 0) {
        currentReview = wrappers.length - 1;
      }
      arrowMove();
    });
  });
}
reviews();

// ANIMACJE ELEMENTÓW
let portfolioColumns = document.querySelectorAll(".col-portfolio");
const skillsLegend = document.querySelector(".skills__legend");
let animateOptions = {
  root: null,
  rootMargin: "-60px 0px -60px 0px",
  threshold: 0.4,
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
      moveObserverAnimate.unobserve(entry.target);
    }
  });
},
animateOptions);

moveObserverAnimate.observe(containerReview);
moveObserverAnimate.observe(skillsLegend);
portfolioColumns.forEach((col) => moveObserverAnimate.observe(col));
contactInput.forEach((input) => moveObserverAnimate.observe(input));
portfolioLinks.forEach((link) => moveObserverAnimate.observe(link));
// Elementy latajace w tle
let backgroundElements = [
  { className: "background-element" },
  { className: "background-element1" },
  { className: "background-element2" },
  { className: "background-element3" },
];

backgroundElements.forEach(function (element) {
  let backgroundEl = document.createElement("div");
  backgroundEl.className = element.className;
  backgroundEl.classList.add("animate");
  backgroundEl.classList.add("background-elements");
  content.append(backgroundEl);
});

// ANIMACJA HEADERA QUIZU

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
Array.from(quizLetters).forEach(function (letter, i) {
  letter.style.opacity = "0";
  letter.style.color = "black";
  if (i % 2 == 0) {
    letter.style.transform = "translate(50px, 50px)";
  } else {
    letter.style.transform = "translate(50px, -50px)";
  }
});
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
        setTimeout(down, i * 30);
      });
      moveObserverLetterAnimate.unobserve(entry.target);
    }
  });
},
animateLettersOptions);
moveObserverLetterAnimate.observe(quizH3);

// KONTAKT
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
        setTimeout(down, i * 30);
      });
      moveObserverLetterAnimateContact.unobserve(entry.target);
    }
  });
},
animateLettersOptionsContact);

h2InsideContact.forEach((input) =>
  moveObserverLetterAnimateContact.observe(input)
);

// GETTING CONTACT INFO
const fetchDataForm = document.querySelector(".fetch-data__form");
const contactList = document.querySelector(".contact-list");
const fetchDataInput = document.querySelector(".fetch-data__input");
const fetchDataError = document.querySelector(".fetch-data__error");
const fetchDataLoadingText = document.querySelector(".fetch-data__loading");
moveObserverAnimate.observe(fetchDataForm);

const fetchPassword = async () => {
  fetchDataLoadingText.style.display = "block";
  fetchDataError.style.display = "none";
  const response = await fetch(
    "https://portfolio-7eeaf-default-rtdb.firebaseio.com/password.json"
  );
  const password = await response.json();
  return password;
};

const fetchContact = async () => {
  const response = await fetch(
    "https://portfolio-7eeaf-default-rtdb.firebaseio.com/contact.json"
  );
  const data = await response.json();
  return data;
};

function animateContactLetters() {
  let contactLi = document.querySelectorAll(".contact-list > li");
  contactLi.forEach(
    (n) =>
      (n.innerHTML = n.textContent.replace(
        /\S/g,
        "<span class='contact-li'>$&</span>"
      ))
  );
  let contactLiSpan = document.querySelectorAll(".contact-li");

  Array.from(contactLiSpan).forEach(function (letter, i) {
    letter.style.opacity = "0";
    letter.style.color = "black";
    if (i % 2 == 0) {
      letter.style.transform = "translate(50px, 50px)";
    } else {
      letter.style.transform = "translate(50px, -50px)";
    }
  });
  setTimeout(() => {
    Array.from(contactLiSpan).forEach(function (letter, i) {
      setTimeout(() => letter.classList.add("animate"), i * 30);
    });
  }, 1);
}

fetchDataForm.addEventListener("submit", (e) => {
  e.preventDefault();

  fetchPassword().then((password) => {
    if (fetchDataInput.value === password) {
      fetchContact().then((data) => {
        fetchDataLoadingText.style.display = "none";
        contactList.children[0].innerText += data.phone;
        contactList.children[1].innerText += data.email;
        fetchDataForm.style.display = "none";
        contactList.style.display = "flex";
        fetchDataError.style.display = "none";
        animateContactLetters();
      });
    } else {
      fetchDataLoadingText.style.display = "none";
      fetchDataError.style.display = "block";
      return;
    }
  });
});

let socialIcon = document.querySelectorAll(".social-icon");
socialIcon.forEach(function (icon) {
  icon.addEventListener("mouseenter", function () {
    if (this.classList.contains("active")) {
      return;
    } else this.classList.add("active");
    setTimeout(() => this.classList.remove("active"), 2000);
  });
});

// PrACtical skills animation
let practicalSkills = document.querySelectorAll(".practice-skills-list> li");
practicalSkills.forEach(function (n, i) {
  if (i % 2 == 0) {
    n.style.transform = "translate(50px,50px)";
  } else {
    n.style.transform = "translate(-50px,50px)";
  }
});
let practicalSkillsAnimate = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0.3,
};

let moveObserverPracticalSkills = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("active");
      moveObserverPracticalSkills.unobserve(entry.target);
    }
  });
},
practicalSkillsAnimate);
practicalSkills.forEach((input) => moveObserverPracticalSkills.observe(input));

// SCROLL TOP
document.querySelectorAll(".go_top").forEach((n) =>
  n.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  })
);

// KONTAKT FORM

let inputs = document.querySelectorAll(".styled-input input");
let textAreas = document.querySelectorAll(".styled-input textarea");

function addLabelForInput(inputElement) {
  inputElement.forEach(function (input) {
    let label = document.createElement("label");
    label.innerHTML = input.id;
    label.htmlFor = input.id;
    input.parentNode.insertBefore(label, input.nextSibling);
  });
}

addLabelForInput(inputs);
addLabelForInput(textAreas);

// LAZY LOADING BACKGROUND IMAGE
let practicalSkillSectionBackground =
  document.querySelector(".code-background");
let aboutMeSectionBackground = document.querySelector(".about-me__fieldset");
let lazyLoadingOptions = {
  root: null,
  rootMargin: "-100px 0px -100px 0px",
  threshold: 0,
};

let moveObserverLazyLoading = new IntersectionObserver(function Moving(
  entries,
  observer
) {
  entries.forEach(function (entry) {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("load");
      moveObserverLazyLoading.unobserve(entry.target);
    }
  });
},
lazyLoadingOptions);

moveObserverLazyLoading.observe(practicalSkillSectionBackground);
moveObserverLazyLoading.observe(aboutMeSectionBackground);

langWrapper.addEventListener("click", function () {
  langButton.classList.toggle("active");
  setTimeout(function () {
    if (location.href == `${window.location.origin}/Portfolio/`) {
      location.href = `${window.location.origin}/Portfolio/portfolio_en`;
    } else {
      location.href = `${window.location.origin}/Portfolio/`;
    }
  }, 500);
});

if (location.href == `${window.location.origin}/Portfolio/`) {
  langButton.classList.toggle("active");
}
