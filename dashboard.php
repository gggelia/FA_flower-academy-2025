<?php
session_start();
include './connect.php';
include 'header.php';

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Если не авторизован, перенаправляем на страницу входа
    exit();
}

try {
    // Получаем данные пользователя
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Проверяем, был ли найден пользователь
    if (!$user) {
        // Обработка случая, когда пользователь не найден
        echo "Пользователь не найден.";
        exit();
    }
} catch (PDOException $e) {
    // Обработка ошибок подключения или выполнения запроса
    echo "Ошибка: " . $e->getMessage();
    exit();
}

// Получение информации о пользователе
// $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
// $stmt->execute([$_SESSION['user_id']]);
// $current_user = $stmt->fetch(PDO::FETCH_ASSOC);

// Отладка: вывод информации о текущем пользователе
// if ($current_user) {
//     echo "Текущий пользователь: " . htmlspecialchars($current_user['username']) . ", роль: " . htmlspecialchars($current_user['role_id']);
// } else {
//     echo "Пользователь не найден.";
// }

// Проверка на роль администратора
// if (!isset($current_user['role_id']) || $current_user['role_id'] != 2) { // 2 - роль администратора
//     echo "У вас нет прав для доступа к этой странице.";
//     header("Location: dashboard.php");
//     exit();
// }

?>
<link rel="stylesheet" href="style2.css">
   <body>
          <main style="display: flex; flex-direction: column; min-height: 76vh;">
            <div class="container">
       <h2>Личный кабинет</h2>
       <p>Добро пожаловать, <?php echo htmlspecialchars($user['username']); ?>!</p>
       <section class="sliders">
        <h2>С днем мемов!</h2>
        <div class="slider">
        <div class="slide">
          <img src="img/pic1.jpg" alt="slide1">
        </div>
        <div class="slide">
          <img src="img/pic2.jpg" alt="slide2">
        </div>
        <div class="slide">
          <img src="img/pic3.jpg" alt="slide3">
        </div>
        <div class="slide">
          <img src="img/pic4.jpg" alt="slide4">
        </div>
        <div class="slide">
          <img src="img/pic5.jpg" alt="slide5">
        </div>
        <div class="slide">
          <img src="img/pic6.jpg" alt="slide6">
        </div>
        <div class="slide">
          <img src="img/pic7.jpg" alt="slide6">
        </div>
        <button class="prev-btn">&#8592;</button>
        <button class="next-btn">&#8594;</button>
        <div class="slide-indicator"></div>
      </div>
      </section>   
       <a href="logout.php" class="btn">Выйти</a>
                    </div>
        </main>
       <footer style="margin-top: auto;">
        <p>&copy; 2024 Flower Academy. Все права защищены.</p>
    </footer>
    <button id="scrollToTopBtn" class="scroll-to-top-btn">
        <i class="fas fa-chevron-up"></i>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>

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


      //слайдер
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
    </script>
   </body>
   </html>