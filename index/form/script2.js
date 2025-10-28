const steps = document.querySelectorAll(".form-step");
let current = 0;

function showStep(n) {
  steps.forEach((step, i) => step.classList.toggle("active", i === n));
}

// Step navigation
document.getElementById("next1").onclick = () => showStep(++current);
document.getElementById("prev2").onclick = () => showStep(--current);
document.getElementById("next2").onclick = () => showStep(++current);
document.getElementById("prev3").onclick = () => showStep(--current);
document.getElementById("next3").onclick = () => showStep(++current);
document.getElementById("prev4").onclick = () => showStep(--current);
document.getElementById("next4").onclick = () => showStep(++current);
document.getElementById("prev5").onclick = () => showStep(--current);

// Submit handler
document.getElementById("enrollmentForm").onsubmit = (e) => {
  e.preventDefault();
  showStep(++current);
};

