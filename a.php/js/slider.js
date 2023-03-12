let currentImage = 1;
changeImage(currentImage);

function plusSlides(n) {
  changeImage((currentImage += n));
}

function changeImage(n) {
  let slides = document.getElementsByClassName("slider__slide");
  if (n > slides.length) {
    currentImage = 1;
  }
  if (n < 1) {
    currentImage = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[currentImage - 1].style.display = "block";
}