const menuToggle = document.querySelector(".menu_toggle");
const nav = document.querySelector(".nav");

menuToggle.addEventListener("click", () => {
  const isOpen = nav.classList.toggle("nav--open");

  menuToggle.setAttribute("aria-expanded", isOpen);
})


// Especificaciones tecnicas de cada modelo.
const tabs = document.querySelectorAll(".tab");
const tab_content = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {
    const tabId = tab.dataset.tab;

    tabs.forEach(t => t.classList.remove("active"));

    tab_content.forEach((content => content.classList.remove("active")));

    tab.classList.add("active");

    const activeContent = document.querySelector(
      `.tab-content[data-tab="${tabId}"]`
    );

    if (activeContent) {
      activeContent.classList.add("active")
    }
  })
})

// Stats counter

function animateCounter(element, target, duration = 2000) {
  const start = performance.now();
  function step(now) {
    const progress = Math.min((now - start) / duration, 1);

    element.textContent = Math.floor(progress * target);

    if (progress < 1) {
      requestAnimationFrame(step);
    } else {
      element.textContent = target;
    }
  }

  requestAnimationFrame(step)
}

const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  const target = Number(counter.dataset.target);

  animateCounter(counter, target, 2000);
})
