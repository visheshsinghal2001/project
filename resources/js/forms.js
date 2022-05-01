function load() {
  console.log(3);
  document.querySelector(".forming").classList.remove("hidden");
  $(".forming").animate({ scrollTop: 0 }, "fast");
  document.querySelector(".overlay").classList.remove("hidden");
}

const x1 = function () {
  document.querySelector(".forming").classList.add("hidden");
  document.querySelector(".overlay").classList.add("hidden");
};
document.querySelector(".overlay").addEventListener("click", x1);
