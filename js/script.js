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
  $(".carousel").carousel("next");
};

// const interval = setInterval(slider, 3500);
const myFunction = () => {
  let x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 3000);
};


