<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Templates</title>
    <link rel="stylesheet" href="front/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>
  <body>
  <header>
        <div id="tohome"></div>
        <div class="navDesc">
              <a class="logo"href="">any code</a>
              <ul class="nDesc">
                <li><a class="navADesc" href="#home">Home</a></li>
                <li><a class="navADesc" href="#about">About</a></li>
                <li><a class="navADesc" href="">Portfolio</a></li>
                <li><a class="navADesc" href="">Article</a></li>
                <li><a style="font-size:10pt"class="navADesc" href="">En</a></li>
                <li style="color: #fff;font-size:10pt;">|</li>
                <li><a style="font-size:10pt"class="navADesc" href="">Id</a></li>
              </ul>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <div id="mainoffcanvas">
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; &nbsp;&nbsp;Logo </span>
        </div>
    </header>
<aside>
  <div class="slider">
      <div class="slide active">
        <img src="img/1.jpg" alt="">
        <div class="info">
          <h2>Winter Mountains</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/2.png" alt="">
        <div class="info">
          <h2>Tropical Desert</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/3.png" alt="">
        <div class="info">
          <h2>Steaming Volcanoes</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
      <div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
      </div>
    </div>
</aside>
<section>
  <div id="about"></div>
  <div class="aboutHomeAll">
      <div class="aboutHomeTitle">
        <strong>About Us</strong>
      </div>
      <div class="containerAboutHome">
        <div class="aboutHome image">
          <img src="img/1.jpg" alt="">
        </div>
        <div class="aboutHome txt">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam consequatur quod ex. Fugit veniam aliquam excepturi doloremque perspiciatis. Debitis maxime, corrupti vitae enim libero rerum explicabo beatae eos saepe quo.
        </div>
      </div>
  </div>
</section>
<footer>
  <div class="footer-social">
  <a href="" class="fab fa-whatsapp"></a>
  </div>
  <div class="footer-toTop">
<a href="#tohome"class="fas fa-angle-double-up"></a>
</div>
</footer>
    <script src="front/js/main.js"></script>
  </body>
</html>
      
