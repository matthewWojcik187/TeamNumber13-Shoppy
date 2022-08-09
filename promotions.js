let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  // Get all slides 
  let slides = document.getElementsByClassName("mySlides");
  // Make none of them display
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  // Always display one
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000);
}