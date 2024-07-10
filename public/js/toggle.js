const inputs = document.querySelectorAll(".input-field");
const toggleBtns = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".images-wrapper img");
let currentIndex = 0;

// ================================================================== Toggle
inputs.forEach((input) => {
  input.addEventListener("focus", () => {
    input.classList.add("active");
  });
  input.addEventListener("blur", () => {
    if (input.value === "") {
      input.classList.remove("active");
    }
  });
});

// Add event listeners to toggle buttons
toggleBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

// ================================================================== Function to move the slider automatically
function moveSliderAutomatically() {
  images.forEach((img) => img.classList.remove("show"));

  images[currentIndex].classList.add("show");

  bullets.forEach((bull) => bull.classList.remove("active"));
  bullets[currentIndex].classList.add("active");
  currentIndex = (currentIndex + 1) % images.length;

  setTimeout(moveSliderAutomatically, 4000);
}

moveSliderAutomatically();

// ================================================================== Function to move the slider manually
function moveSlider() {
  let index = this.dataset.value - 1;

  images.forEach((img) => img.classList.remove("show"));

  images[index].classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-index * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  this.classList.add("active");

  currentIndex = index;
}

bullets.forEach((bullet) => {
  bullet.addEventListener("click", moveSlider);
});
