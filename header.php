<?php
 ?>
  <!DOCTYPE html>
  <html lang="no">
  <meta charset="utf-8">
  <head>
    <!-- <title>Stordalen Entreprenør AS</title> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper" id="wrapper">
      <div class="header" id="header">
        <div class="topmenu-desktop" id="topmenu-desktop">
          <ul>
          <li class="topmenu-item" id="topmenu-item">
            <a href="login.php">Logg inn</a>
          </li>
          <li class="topmenu-item" id="topmenu-item">
            <a href="logout.php">Logg ut</a>
          </li>
        </ul>
        </div>
        <div class="nav-desktop" id="nav-desktop">
          <a href="index.php">
            <img src="images/logo.png" class="logo" alt="logo"/>
          </a>
            <ul>
              <li class="menusymbol">
                <a href="javascript:void(0)">
                  <span class="menu-symbol-mobile" id="menu-symbol-mobile" onclick="switchIt(this)">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                  </span>
                </a>
              </li>
            </ul>
          <div class="nav-mobile" id="nav-mobile">
            <div class="overlay" id="overlay">
              <div class="overlay-content" id="overlay-content">
                 <ul>
                   <li class="nav-mobile-item <?php if($page=='galleri'){echo 'active';}?>" id="nav-mobile-item">
                     <a href="galleri.php">Bildegalleri</a>
                   </li>
                   <li class="nav-mobile-item <?php if($page=='karriere'){echo 'active';}?>" id="nav-mobile-item">
                     <a href="karriere.php">Karriere</a>
                   </li>
                   <li class="nav-mobile-item <?php if($page=='om-oss'){echo 'active';}?>" id="nav-mobile-item">
                     <a href="om-oss.php">Om oss</a>
                   </li>
                   <li class="nav-mobile-item <?php if($page=='kontakt'){echo 'active';}?>" id="nav-mobile-item">
                     <a href="kontakt.php">Kontakt</a>
                   </li>
                   <li class="nav-mobile-item <?php if($page=='hjem'){echo 'active';}?>" id="nav-mobile-item">
                     <a href="/">Hjem</a>
                   </li>
                 </ul>
              </div>
            </div>
          </div>
          <nav class="mainmenu" id="mainmenu">
            <ul>
              <li class="nav-item <?php if($page=='galleri'){echo 'active';}?>" id="nav-item">
                <a href="galleri.php">Bildegalleri</a>
              </li>
              <li class="nav-item <?php if($page=='karriere'){echo 'active';}?>" id="nav-item">
                <a href="karriere.php">Karriere</a>
              </li>
              <li class="nav-item <?php if($page=='om-oss'){echo 'active';}?>" id="nav-item">
                <a href="om-oss.php">Om oss</a>
              </li>
              <li class="nav-item <?php if($page=='kontakt'){echo 'active';}?>" id="nav-item">
                <a href="kontakt.php">Kontakt</a>
              </li>
              <li class="nav-item <?php if($page=='hjem'){echo 'active';}?>" id="nav-item">
                <a href="/">Hjem</a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="nav-mobile">
        </div>
      </div>
      <!-- Header END  -->
  <?php ?>
