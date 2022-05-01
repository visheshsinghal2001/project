function load() {
  console.log(3);
  document.querySelector(".booking-panel").classList.remove("hidden");
  document.querySelector(".overlay").classList.remove("hidden");
}

const x1 = function () {
  document.querySelector(".booking-panel").classList.add("hidden");
  document.querySelector(".overlay").classList.add("hidden");
};
document.querySelector(".overlay").addEventListener("click", x1);
