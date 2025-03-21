// Обработчик события клика на элементы меню
const dropdownLinks = document.querySelectorAll('.dropdown a');
dropdownLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        window.location.href = event.target.href;
    });
});

// Инициализация слайдера
const swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});

// Инициализация слайдера
const swiper2 = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});

//для шапки адаптив
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const dropdownLinks2 = document.querySelectorAll('.dropdown a');

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


//выводит сообщение после отправки формы
const form = document.getElementById('myForm');
const successMessage = document.getElementById('successMessage');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent the default form submission

  // Get the form data
  const formData = new FormData(form);

  // Here you can send the form data to a server using AJAX or fetch API
  console.log('Submitting form data:', formData);

  // Show the success message
  successMessage.classList.remove('hidden');

  // Reset the form
  form.reset();
});


//для кнопки войти авторизация на сайт
document.querySelector('.auth-btn').addEventListener('click', () => {
    // Проверяем, залогинен ли пользователь
    if (isLoggedIn()) {
      // Если пользователь залогинен, показываем меню профиля
      showProfileMenu();
    } else {
      // Если пользователь не залогинен, перенаправляем его на страницу авторизации
      window.location.href = 'index.php';
    }
  });
  
  function isLoggedIn() {
    // Здесь будет логика проверки, залогинен ли пользователь
    // Вы можете использовать серверные сессии или cookies для этого
    return false; // Заменить на свою логику
  }
  
  function showProfileMenu() {
    // Здесь будет логика отображения меню профиля пользователя
    // Вы можете использовать дополнительные HTML-элементы и CSS-стили для этого
    console.log('Показываем меню профиля');
  }
  