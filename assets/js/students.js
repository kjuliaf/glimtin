document.addEventListener("DOMContentLoaded", function () {
  const textElement = document.getElementById("typedText");
  const cursorElement = document.querySelector("#multipleStrings .cursor");
  if (!textElement || !cursorElement) {
    console.warn("Text- eller markör-element saknas.");
    return;
  }

  const strings = ["problemlösare...", "kreativ...", "innovativ...", "driven...", "nyfiken..."];
  const typingSpeed = 120;
  const deletingSpeed = 70;
  const delayBetweenStrings = 1500;
  const delayBeforeDeleting = 2000;
  let currentString = 0;
  let currentChar = 0;
  let isDeleting = false;
  let isActive = true;

  function typeEffect() {
    if (!isActive) return;

    const fullText = strings[currentString];

    if (!isDeleting) {
      if (currentChar < fullText.length) {
        currentChar++;
        textElement.textContent = fullText.substring(0, currentChar);
        setTimeout(typeEffect, typingSpeed);
      } else {
        setTimeout(typeEffect, delayBeforeDeleting);
        isDeleting = true;
      }
    } else {
      if (currentChar > 0) {
        currentChar--;
        textElement.textContent = fullText.substring(0, currentChar);
        setTimeout(typeEffect, deletingSpeed);
      } else {
        currentString = (currentString + 1) % strings.length;
        isDeleting = false;
        setTimeout(typeEffect, delayBetweenStrings);
      }
    }
  }

  typeEffect();
});
