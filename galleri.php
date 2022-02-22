<?php
  $page = 'galleri';
  include('header.php'); ?>

  <title>Galleri | Stordalen Entreprenør AS</title>
  <!-- <div class="animation-still"></div> -->
  <div class="animated-container">
    <div class="animation-1"></div>
  </div>

  <!-- Main-content START -->
  <div class="main" id="main">
    <div class="gallery">
    <div class="container">


    <h2 class="title">Bildegalleri</h2>

    <div class="row">
      <div class="column">
        <img src="images/brødrene_stordalen.JPG" id="tinyImg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/banner5712.JPG" id="tinyImg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/fokus.JPG" id="tinyImg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/skavanger_skole.JPG" id="tinyImg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/fjellboring (3).JPG" id="tinyImg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/daglig_leder.JPG" id="tinyImg" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/firmabil.JPG" id="tinyImg" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/banner3000.JPG" id="tinyImg" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/banner2615.JPG" id="tinyImg" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/banner3420.JPG" id="tinyImg" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/fornøyde_ansatte.JPG" id="tinyImg" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/banner4620.JPG" id="tinyImg" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/kontor.JPG" id="tinyImg" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/banner4220.JPG" id="tinyImg" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/banner4120.JPG" id="tinyImg" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
      </div>
      <div class="column">
        <img src="images/sprengning_forberedelser.JPG" id="tinyImg" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
      </div>
    </div>

    <div id="imgModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

        <div class="imgSlides">
          <img src="images/brødrene_stordalen.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/banner5712.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/fokus.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/skavanger_skole.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/fjellboring (3).JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/daglig_leder.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/firmabil.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/banner3000.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/banner2615.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/banner3420.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/fornøyde_ansatte.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/banner4620.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/kontor.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/banner4220.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/banner4120.JPG" style="width:100%">
        </div>

        <div class="imgSlides">
          <img src="images/sprengning_forberedelser.JPG" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>
      </div>

      <div class="containerModal">
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/brødrene_stordalen.JPG" onclick="currentSlide(1)" alt="Brødrene Stordalen">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/banner5712.JPG" onclick="currentSlide(2)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/fokus.JPG" onclick="currentSlide(3)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/skavanger_skole.JPG" onclick="currentSlide(4)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/fjellboring (3).JPG" onclick="currentSlide(5)" alt="Fjellboring">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/daglig_leder.JPG" onclick="currentSlide(6)" alt="Daglig leder, Bård Stordalen">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/firmabil.JPG" onclick="currentSlide(7)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/banner3000.JPG"  onclick="currentSlide(8)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/banner2615.JPG" onclick="currentSlide(9)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/banner3420.JPG" onclick="currentSlide(10)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/fornøyde_ansatte.JPG" onclick="currentSlide(11)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/banner4620.JPG" onclick="currentSlide(12)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/kontor.JPG" onclick="currentSlide(13)" alt="Lyse og moderne kontorlokaler">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/banner4220.JPG" onclick="currentSlide(14)" alt="">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/banner4120.JPG" onclick="currentSlide(15)" alt="Arbeid ved nye Skavanger Skole">
        </div>
        <div class="column modalColumn">
          <img class="demo cursor fixed" src="images/sprengning_forberedelser.JPG" onclick="currentSlide(16)" alt="Spregningsforberedelser">
        </div>
      </div>
      </div>
    </div>
  </div>
  </div>

  <?php include('footer.php'); ?>
  <?php	 ?>
