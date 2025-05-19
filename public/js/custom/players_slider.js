// کد JavaScript
const slider = document.getElementById('slider');

function scrollLeft() {
  slider.scrollBy({
    left: -slider.offsetWidth,
    behavior: "smooth"
  });
}

function scrollRight() {
  slider.scrollBy({
    left: slider.offsetWidth,
    behavior: "smooth"
  });
}