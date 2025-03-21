<?php
session_start();
include '../header2.php';
?>
<link rel="stylesheet" href="form3.css">

        <section class="hero">
            <h1>Углубленный курс: Композиции из сухоцветов</h1>
            <p>Освойте профессиональные техники создания композиций из сухоцветов</p>
        </section>
 <main>
        <section class="course-content" >
            <h2 style="text-align: center;">Что Вы изучите на курсе</h2>
            <ul class="checkmark-list">
                <li>Выращивание и сбор сухоцветов</li>
                <li>Техники сушки и стабилизации растений</li>
                <li>Основы композиции и колористики</li>
                <li>Стили и направления в икебане и флористике</li>
                <li>Работу с различными материалами и аксессуарами</li>
                <li>Создание авторских композиций и букетов</li>
                <li>Уход за сухоцветами и продление их жизни</li>
            </ul>
            <h3>После прохождения курса вы получите сертификат! <br>
            Углубленный курс дает профессиональные навыки и экспертные знания, открывая новые карьерные возможности.</h3>
        </section>

        <section class="instructor" style="text-align: center;">
            <h2>Ваши преподаватели</h2>
            <div class="instructor-info">
                <img src="../img/flor3.png" alt="Фото преподавателя">
                <h3>Екатерина Смирнова</h3>
                <p>Эксперт в сухоцветной флористике</p>
            </div>
            <div class="instructor-info">
                <img src="../img/flor6.png" alt="Фото преподавателя">
                <h3>Сергей Михайлов</h3>
                <p>Эксперт в композициях</p>
            </div>
        </section>

        <section class="application" >
            <h2 style="text-align: center;">Подать заявку на курс</h2>
            <form id="myForm" method="post">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Почему вы хотите пройти этот курс?</label>
                <textarea id="message" name="message" required></textarea>

                 <button type="submit" id="submitBtn" class="btn">Отправить заявку</button>
            </form>
        </section>
 </main>
        <footer>
            <p>&copy; 2024 Flower Academy. Все права защищены.</p>
        </footer>
        <button id="scrollToTopBtn" class="scroll-to-top-btn">
            <i class="fas fa-chevron-up"></i>
        </button>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        //скроллинг наверх
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

//для корректной работы формы
document.addEventListener("DOMContentLoaded", function () {
  const BtnForm = document.getElementById('submitBtn');
  const Email = document.getElementById('email');
  const Name = document.getElementById('name');
  const Msg = document.getElementById('message');

  BtnForm.addEventListener('click', (event) => {
    event.preventDefault(); // Предотвращаем отправку формы

    let Names = Name.value;
    let Emails = Email.value;
    let Msgs = Msg.value;

    if (isValid(Names) || !isValidEmail(Emails) || isValid(Msgs)) {
      alert("Пожалуйста, проверьте введенные данные");
    } else {
      window.location = '../7/index7.php';
    }
  });

  function isValid(value) {
    return value.trim() === "";
  }

  function isValidEmail(email) {
    // Простое регулярное выражение для проверки email-адреса
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
});
    </script>
</body>
</html>