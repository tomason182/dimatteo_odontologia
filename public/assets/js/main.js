const menuToggle = document.querySelector(".menu_toggle");
const nav = document.querySelector(".nav");

menuToggle.addEventListener("click", () => {
  const isOpen = nav.classList.toggle("nav--open");

  menuToggle.setAttribute("aria-expanded", isOpen);
})

