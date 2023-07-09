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
// const slider = document.querySelector(".slider");
const arrowBtnDiv = document.querySelector(".arrowbuttons");
const leftButton = document.querySelector(".carousel-control-prev");
const rightButton = document.querySelector(".carousel-control-next");

let counter = 1;
const check = () => {
  if (counter <= 0) {
    counter = 0;
  } else if (counter > 5) {
    counter = 0;
  }
};
const slider = () => {
  check();
  // let activeSlide = document.querySelector(`#slide${counter}`);
  const deactiveSlide = document.querySelectorAll(".carousel-item");
  // console.log(deactiveSlide);
  deactiveSlide.forEach((slide, index) => {
    index === counter
      ? slide.classList.add("active")
      : slide.classList.remove("active");
  });
  counter++;
};

const interval = setInterval(slider, 4000);

leftButton.addEventListener("click", ()=>{
  counter--;
  slider();
});
rightButton.addEventListener("click", slider);

// const slide = () => {
//   check();
//   slider.style.left = `-${counter * 100}%`; //this is string interpolation
//   // return 1;
// };

// const interval = setInterval(() => {
//   // console.log(counter);
//   counter++;
//   slide();
//   if (counter >= 5) counter = -1;
// }, 4000);
