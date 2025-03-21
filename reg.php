<?php
include './connect.php';
include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    if ($stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)])) {
        // Успешная регистрация, начинаем сессию и перенаправляем в личный кабинет
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Ошибка регистрации!";
    }
}
?>
    <main style="display: flex; flex-direction: column; min-height: 76vh;">
        <div class="container">
        <h2>Регистрация</h2>
       <form method="post">
           <input type="text" name="username" placeholder="Логин" required>
           <input type="password" name="password" placeholder="Пароль" required>
           <button type="submit">Зарегистрироваться</button>
       </form>
       <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
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

    </script>
</body>
</html>