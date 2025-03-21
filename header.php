<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Academy</title>
    <link rel="shortcut icon" href="img/FA.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php">Flower Academy</a>
            </div>
            <nav>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php#about">О нас</a></li>
                    <li><a href="index.php#instructors">Преподаватели</a></li>
                    <li><a href="index.php#courses">Курсы</a></li>
                    <li><a href="index.php#reviews">Отзывы</a></li>
                    <li><a href="index.php#contact">Обратная связь</a></li>
                    <!-- Проверяем, авторизован ли пользователь -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="dashboard.php">Личный кабинет</a></li>
                    <li><a href="logout.php">Выйти</a></li>
                <?php else: ?>
                    <li><a href="login.php">Вход</a></li>
                    <li><a href="reg.php">Регистрация</a></li>
                <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>