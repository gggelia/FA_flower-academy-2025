<?php
session_start();
include '../header2.php';
?>
<link rel="stylesheet" href="style2.css">
      <section class="hero">
        <h1>Базовый курс: Выращивание домашних растений</h1>
        <p>Научитесь ухаживать за своими комнатными растениями</p>
    </section>  
    <main>
      <section class="tips">
        <h2>Полезные советы по уходу за домашними растениями:</h2>
        <ul class="flower-list">
          <li>Обеспечьте подходящую температуру: большинство цветов предпочитают температуру 13–24 °C.</li>
          <br>
          <li>Поддерживайте оптимальную влажность воздуха: летом и весной влажность выше 50 %, зимой воздух сухой из-за отопления.</li>
          <br>
          <li>Обеспечьте достаточное освещение: поставьте цветы у окна или используйте искусственное освещение.</li>
          <br>
          <li>Выберите подходящий грунт: почва должна быть питательной, воздухо- и водопроницаемой, со слабокислой или нейтральной реакцией (pH 5,5–6,5).</li>
          <br>
          <li>Подберите правильный горшок: он должен быть немного больше предыдущего и иметь дренажные отверстия.</li>
          <br>
          <li>Регулярно поливайте растения: следите за состоянием почвы и поливайте, когда она подсохнет.</li>
          <br>
          <li>Удобряйте растения: используйте специальные удобрения для домашних цветов согласно инструкции.</li>
          <br>
          <li>Пересаживайте растения по мере необходимости: молодые растения пересаживайте ежегодно, взрослые — каждые 2–3 года.</li>
          <br>
          <li>Обрабатывайте растения от вредителей и болезней: регулярно осматривайте растения и при необходимости применяйте средства защиты.</li>
        </ul>
      </section>
  
      <section class="videos">
        <h2>Обучающие видеоролики</h2>
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/7PYcE1zKiyc?si=cgLi_bt2ho4E6Yes" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/RHG8WriZFrs?si=3UgqJDYkMv0oBE0U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>
  
      <section class="articles">
        <h2>Статьи, которые могут Вам пригодиться:</h2>
        <article>
          <h3>Цветок "женское счастье": все об уходе, пересадке и размножении</h3>
          <p>Спатифиллум — это многолетнее вечнозеленое растение, которому приписывают способность улучшает энергетику в доме.    <a href="https://ria.ru/20201229/spatifillum-1591406914.html">Читать статью</a></p>
        </article>
        <article>
          <h3>Самые долгоживущие комнатные растения — 11 надёжных вариантов</h3>
          <p>Взгляните на нашу подборку распространенных комнатных растений, которые будут украшать ваш дом долгие годы.    <a href="https://www.botanichka.ru/article/samye-dolgozhivushhie-komnatnye-rasteniya-11-nadyozhnyh-variantov/">Читать статью</a></p>
        </article>
      </section>
      <div class="buttons-container">
      <a href="../index.php#courses" class="btn btn-primary">Вернуться к выбору курса</a>
      <a href="form.php" class="btn btn-primary">Перейти к углубленному курсу</a>
    </div>
    </main>
    <footer>
      <p>&copy; 2024 Flower Academy. Все права защищены.</p>
  </footer>
  <button id="scrollToTopBtn" class="scroll-to-top-btn">
      <i class="fas fa-chevron-up"></i>
  </button>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="js2.js"></script>
</body>
</html>