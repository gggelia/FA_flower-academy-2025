<?php
session_start();

include 'header.php';
?>

        <section class="hero">
            <h1>ОБУЧЕНИЕ ФЛОРИСТИКЕ</h1>
            <p>научим вас работать с цветами и получать от этого удовольствие</p>
            <a href="#courses" class="btn">Перейти к выбору курса</a>
        </section>
    <main>
        <section class="about" id="about">
            <h2>О Нас</h2>
            <p>Flower Academy - ведущая онлайн-платформа, предлагающая высококачественные курсы по флористике. <br><br>
                Наша миссия - вдохновлять и обучать людей искусству создания прекрасных цветочных композиций. <br><br>
                Мы гордимся тем, что помогаем людям раскрыть их творческий потенциал и расширить свои возможности в области флористики. <br><br>
                Наши курсы ведут опытные профессиональные флористы, которые делятся своими знаниями и навыками в интерактивном формате. <br></p>
                <h3>Присоединяйтесь к Flower Academy и откройте для себя увлекательный мир флористики! <br>
                    Вместе мы создадим прекрасные цветочные шедевры.</h3>
        </section>
        <section class="instructors" id="instructors">
            <h2>Наши преподаватели</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/flor1.png" alt="Преподаватель 1">
                        <h3>Мария Иванова</h3>
                        <p>Преподаватель флористики</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/flor2.png" alt="Преподаватель 2">
                        <h3>Александр Петров</h3>
                        <p>Дизайнер букетов</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/flor3.png" alt="Преподаватель 3">
                        <h3>Екатерина Смирнова</h3>
                        <p>Эксперт в сухоцветной флористике</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/flor4.png" alt="Преподаватель 4">
                        <h3>Максим Федоров</h3>
                        <p>Специалист по домашним растениям</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/flor5.png" alt="Преподаватель 5">
                        <h3>Анна Кузнецова</h3>
                        <p>Ведущий флорист-дизайнер</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/flor6.png" alt="Преподаватель 6">
                        <h3>Сергей Михайлов</h3>
                        <p>Эксперт в композициях</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="img/flor7.png" alt="Преподаватель 7">
                        <h3>Юко Исида</h3>
                        <p>Преподаватель флористики</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <section class="courses" id="courses">
            <h2>Наши Курсы</h2>
            <div class="course-list">
                <div class="course">
                    <div class="course_bg1">
                    <br>
                    <h3>Выращивание домашних растений</h3>
                    <p>Базовый курс</p>
                    <a href="2/index2.php" class="btn">Начать обучение</a>
                    <p>Углубленный курс</p>
                    <a href="2/form.php" class="btn">Подать Заявку</a>
                    <br><br>
                </div>
                </div>
                <div class="course">
                    <div class="course_bg2">
                    <br>
                    <h3>Составление букетов</h3>
                    <p>Базовый курс</p>
                    <a href="4/index4.php" class="btn">Начать обучение</a>
                    <p>Углубленный курс</p>
                    <a href="4/form2.php" class="btn">Подать Заявку</a>
                    <br><br>
                </div>
                </div>
                <div class="course">
                    <div class="course_bg3">
                    <br>
                    <h3>Композиции из сухоцветов</h3>
                    <p>Базовый курс</p>
                    <a href="6/index6.php" class="btn">Начать обучение</a>
                    <p>Углубленный курс</p>
                    <a href="6/form3.php" class="btn">Подать Заявку</a>
                    <br><br>
                </div>
                </div>
            </div>
        </section>

            <section class="reviews" id="reviews">
                <h2>Отзывы</h2>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="img/otziv1.png" alt="Отзыв 1">
                                <h3>Ольга, 28 лет</h3>
                                <p>Очень понравился курс по составлению букетов. Преподаватель Анна Кузнецова - настоящий профессионал своего дела, объясняла все доступно и наглядно. Буду рекомендовать ваши курсы друзьям!</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="img/otziv2.png" alt="Отзыв 2">
                                <h3>Дмитрий, 35 лет</h3>
                                <p>Прошел курс по сухоцветной флористике, очень понравилось. Преподаватель Екатерина Смирнова - настоящий мастер своего дела. Я научился создавать красивые и долговечные композиции из сухоцветов.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="img/otziv3.png" alt="Отзыв 3">
                                <h3>Анна, 42 года</h3>
                                <p>Благодаря курсу по выращиванию домашних растений я теперь с легкостью ухаживаю за своими любимцами. Преподаватель Максим Федоров дал множество ценных советов и рекомендаций.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review-card">
                                <img src="img/otziv4.png" alt="Отзыв 4">
                                <h3>Сергей, 29 лет</h3>
                                <p>Очень порадовал курс по композициям. Преподаватель Сергей Михайлов - настоящий мастер своего дела. Я научился создавать потрясающие авторские композиции.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>
        

        <section class="contact" id="contact">
            <h2>Остались вопросы? Напишите Нам!</h2>
            <form id="myForm">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Отправить</button>
            </form>
            <br>
            <div id="successMessage" class="hidden">
                Спасибо за Ваше сообщение! Скоро Мы с Вами свяжемся!
              </div>
        </section>
        </main>
    <footer>
        <p>&copy; 2024 Flower Academy. Все права защищены.</p>
    </footer>
    <button id="scrollToTopBtn" class="scroll-to-top-btn">
        <i class="fas fa-chevron-up"></i>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js.js"></script>
</body>
</html>