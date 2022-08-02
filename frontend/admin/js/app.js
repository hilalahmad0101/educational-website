const show = document.querySelector("#show");
const closed = document.querySelector("#closed");
const sidebar = document.querySelector(".sidebar");

show.addEventListener("click", () => {
  sidebar.classList.add("active");
});
closed.addEventListener("click", () => {
  sidebar.classList.remove("active");
});
