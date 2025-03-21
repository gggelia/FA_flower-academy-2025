//кнопка скролла наверх

const scrollToTopBtn = document.getElementById('scrollToTopBtn');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});

scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});


//для шапки адаптив
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const dropdownLinks = document.querySelectorAll('.dropdown a');

navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

dropdownLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        window.location.href = event.target.href;
    });
});

dropdownLinks.forEach(link => {
    link.addEventListener('click', () => {
        link.parentElement.classList.toggle('active');
    });
});

//слайдер цветов
const slides = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const slideIndicator = document.querySelector('.slide-indicator');

let currentSlideIndex = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    if (i === index) {
      slide.classList.add('active');
    } else {
      slide.classList.remove('active');
    }
  });

  updateSlideIndicator();
}

function prevSlide() {
  currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
  showSlide(currentSlideIndex);
}

function nextSlide() {
  currentSlideIndex = (currentSlideIndex + 1) % slides.length;
  showSlide(currentSlideIndex);
}

function updateSlideIndicator() {
  const indicators = slideIndicator.querySelectorAll('span');
  indicators.forEach((indicator, i) => {
    if (i === currentSlideIndex) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
}

prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);

slides.forEach((slide, i) => {
  const indicator = document.createElement('span');
  slideIndicator.appendChild(indicator);
  indicator.addEventListener('click', () => {
    currentSlideIndex = i;
    showSlide(currentSlideIndex);
  });
});

showSlide(currentSlideIndex);

