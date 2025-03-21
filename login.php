<?php 
include 'header.php';
include './connect.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Подготовленный запрос для предотвращения SQL-инъекций
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Проверка пользователя и пароля
    if ($user && password_verify($password, $user['password'])) {
        // Сохраняем идентификатор пользователя и его роль в сессии
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role_id'] = $user['role_id'];
        
        // Проверяем роль пользователя через role_id
        if ($user['role_id'] === 2) { // 2 - это роль администратора
            header("Location: admin_dashboard.php"); // Перенаправляем на панель администратора
        } else {
            header("Location: dashboard.php"); // Перенаправляем на пользовательскую панель
        }
        exit();
    } else {
        $error_message = "Неверный логин или пароль!";
    }
}
?>
    <main style="display: flex; flex-direction: column; min-height: 76vh;">
        <div class="container">
        <h2>Авторизация</h2>
       <form method="post">
           <input type="text" name="username" placeholder="Логин" required>
           <input type="password" name="password" placeholder="Пароль" required>
           <button type="submit">Войти</button>
        </form>
          <p>Нет аккаунта? <a href="reg.php">Зарегистрироваться</a></p>
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