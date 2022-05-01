let i = 0;
x = document.querySelector(".Login");
y = document.querySelector(".signup");
z = document.querySelector(".toggle-effect");
function login() {
  x.style.left = "20px";
  y.style.left = "450px";
  z.style.left = "17px";
}
function signup() {
  x.style.left = "-450px";
  y.style.left = "40px";
  z.style.left = "195px";
}
const loginBoxEnd = function () {
  if (i === 1) {
    document.querySelector(".member").classList.add("hidden");
    i = 0;
  } else
    document.querySelector(".modal").classList.remove("animate__fadeInDown");
  document.querySelector(".overlay").classList.add("hidden");
  const x = document.querySelector(".message-box");

  // if (!x.classList.contains("hidden")) x.classList.add("hidden");
};
function success() {
  loginBoxEnd();
  document.querySelector(".signIn").classList.toggle("hidden");
  document.querySelector(".user").classList.toggle("hidden");
}
function exit() {
  document.querySelector(".user").classList.add("hidden");
  document.querySelector(".member").classList.add("hidden");
  document.querySelector(".overlay").classList.add("hidden");
  document.querySelector(".signIn").classList.remove("hidden");
}

const user = function () {
  document.querySelector(".member").classList.toggle("hidden");
  document.querySelector(".overlay").classList.toggle("hidden");
  i = 1;
};

const loginBoxBegin = function () {
  document.querySelector(".modal").classList.toggle("animate__fadeInDown");
  document.querySelector(".overlay").classList.toggle("hidden");
};

document.querySelector(".signIn").addEventListener("click", loginBoxBegin);
document.querySelector(".user").addEventListener("click", user);
document.querySelector(".overlay").addEventListener("click", loginBoxEnd);
