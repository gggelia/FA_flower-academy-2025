<?php
session_start();
include '../header2.php';
?>
<link rel="stylesheet" href="style3.css">

      <section class="hero">
        <h1>Углубленный курс: Выращивание домашних растений</h1>
        <p>Преобразуйте свой дом в зеленый рай с помощью нашего курса</p>
    </section>  
    <main>
      <section class="tips">
        <h2>Полезные статьи:</h2>
        <ul class="flower-list">
          <li>Классификация комнатных растений в цветоводстве. <a href="https://jplant.info/klassifikaciya-rastenij-klassifikaciya-komnatnyx-rastenij/">Изучить статью</a></li>
          <br>
          <li>Секреты ухода за комнатными растениями. <a href="https://purshat.com/articles/detail/8063/">Изучить статью</a></li>
          <br>
          <li>Диагностика и лечение болезней и вредителей. <a href="https://aogarden.ru/articles/tsvety-i-rasteniya/bolezni-komnatnykh-rasteniy/">Изучить статью</a></li>
          <br>
          <li>Способы размножения комнатных растений. <a href="https://rastenievod.com/sposoby-razmnozheniya-komnatnyh-rastenij.html">Изучить статью</a></li>
          <br>
        </ul>
      </section>
  
      <section class="videos">
        <h2>Видеоролики, которые могут Вам пригодиться:</h2>
        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/kP9NfIezhqQ?si=XQaJ9L4pRyrCOWFq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/LpgFtTonD_0?si=kT_DfhLNN_IzOmrg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?si=mdSB9ZhLtCw4FbEc&amp;list=PL15_QP8GTSiaKCCHFM-UOlyNwUOw8OnQ3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>
  
      <section class="sliders">
        <h2>Варианты оформления композиций с комнатными растениями:</h2>
        <div class="slider">
        <div class="slide">
          <img src="../img/slide1.png" alt="slide1">
        </div>
        <div class="slide">
          <img src="../img/slide2.png" alt="slide2">
        </div>
        <div class="slide">
          <img src="../img/slide3.png" alt="slide3">
        </div>
        <div class="slide">
          <img src="../img/slide4.png" alt="slide4">
        </div>
        <div class="slide">
          <img src="../img/slide5.png" alt="slide5">
        </div>
        <div class="slide">
          <img src="../img/slide6.png" alt="slide6">
        </div>
        <button class="prev-btn">&#8592;</button>
        <button class="next-btn">&#8594;</button>
        <div class="slide-indicator"></div>
      </div>
      </section>
      <section class="certificate">
        <h1>Поздравляем с прохождением нашего курса!</h1>
        <h3>Желаем Вам дальнейших успехов во флористическом искусстве. 
          <br>Никогда не останавливайтесь на достигнутом, совершенствуйтесь с каждым днем!</h3>
        <a href="../img/home_plants.pdf" class="download-btn" download>Скачать сертификат</a>
        
    </section>
    </main>
    <footer>
      <p>&copy; 2024 Flower Academy. Все права защищены.</p>
  </footer>
  <button id="scrollToTopBtn" class="scroll-to-top-btn">
      <i class="fas fa-chevron-up"></i>
  </button>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="js3.js"></script>
</body>
</html>