let hamMenuIcon = document.getElementById("ham-menu");
let navBar = document.getElementById("nav-bar");
let navLinks = navBar.querySelectorAll("li");

hamMenuIcon.addEventListener("click", () => {
  navBar.classList.toggle("active");
  hamMenuIcon.classList.toggle("fa-times");
});
navLinks.forEach((navLinks) => {
  navLinks.addEventListener("click", () => {
    navBar.classList.remove("active");
    hamMenuIcon.classList.toggle("fa-times");
  });
});
const slider = document.querySelector(".slider");
const arrowBtnDiv = document.querySelector(".arrowbuttons");
const leftButton = document.querySelector("#leftButton");
const rightButton = document.querySelector("#rightButton");

let counter = 0;
const check = () => {
  if (counter <= 0) {
    counter = 0;
    slider.style.left = "0";
    leftButton.style.display = "none";
    arrowBtnDiv.style.justifyContent = "flex-end";
  } else if (counter >= 5) {
    counter = 5;
    slider.style.left = `-${counter * 100}%`;
    rightButton.style.display = "none";
    arrowBtnDiv.removeAttribute("style");
  } else {
    leftButton.style.display = "block";
    rightButton.style.display = "block";
    arrowBtnDiv.removeAttribute("style");
    if (counter == 1 || counter == 2) {
      leftButton.style.color = "white";
      rightButton.style.color = "white";
    } else {
      leftButton.style.color = "black";
      rightButton.style.color = "black";
    }
  }
};
check();

leftButton.addEventListener("click", () => {
  counter--;
  slide();
});
rightButton.addEventListener("click", () => {
  counter++;
  slide();
});

const slide = () => {
  check();
  slider.style.left = `-${counter * 100}%`; //this is string interpolation
  // return 1;
};

const interval = setInterval(() => {
  // console.log(counter);
  counter++;
  slide();
  if (counter >= 5) counter = -1;
}, 4000);



















const convertTable = {
  F: {
    C: () => ((initialTempValue - 32) * 5) / 9,
    K: () => ((initialTempValue - 32) * 5) / 9 + 273.15,
  },

  C: {
    F: () => (initialTempValue * 9) / 5 + 32,
    K: () => initialTempValue + 273.15,
  },

  K: {
    C: () => initialTempValue - 273.15,
    F: () => ((initialTempValue - 273.15) * 9) / 5 + 32,
  },
};
