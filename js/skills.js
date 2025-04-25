AOS.init();

// Intersection Observer to animate the skill bars when in view
const skillBars = document.querySelectorAll('.skill-bar');

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const skillFill = entry.target.querySelector('.skill-fill');
      const percent = entry.target.getAttribute('data-percent');
      skillFill.style.width = percent;
    }
  });
}, { threshold: 0.5 });

skillBars.forEach(bar => {
  observer.observe(bar);
});
