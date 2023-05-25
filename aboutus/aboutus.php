<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our-Team 2</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="aboutus.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- navbar -->
  <header>
        <img src="../logo/logo.png"> 
        <p class="Logo" style="left: 10px; bottom: 8px; font-size: 40px;"><a href="../index/index.php">EduLink</a></p>
        <p class="navbar"><a href="../service/services.php" style="text-decoration: none; color: white;">Service</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../aboutus/aboutus.php" style="text-decoration: none; color: white;">About Us</a></p> 
        <p style="font-size: 40px; bottom: 18px;">|</p> 
        <p class="navbar"><a href="../login/login.php" style="text-decoration: none; color: white;">Login</a></p>
    </header>
    <!-- mobile mode -->
    <div class="hamburger">
        <p>Service</p> 
        <hr>
        <p>About Us</p> 
        <hr>
        <p>Login</p>
    </div>
  <div class="container">
    <div class="header">
      <h1>OUR TEAM</h1>
    </div>
    <div class="container">


      <input type="radio" name="slider" class="d-none" id="s1" checked>
      <input type="radio" name="slider" class="d-none" id="s2">
      <input type="radio" name="slider" class="d-none" id="s3">
      <input type="radio" name="slider" class="d-none" id="s4">
      <input type="radio" name="slider" class="d-none" id="s5">

      <div class="cards">
        <label for="s1" id="slide1">
          <div class="card">
            <div class="image">
              <img src="../assets/antonio.jpg" alt="">
              <div class="dots">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>
            <div class="infos">
              <span class="name">Antonio Fandako</span>
              <span class="lorem">UI/UX Designer</span>
            </div>
            <a href="/contact" class="btn-contact">CONTACT</a>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin-square"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </label>

        <label for="s2" id="slide2">
          <div class="card">
            <div class="image">
              <img src="../assets/bryan.jpg" alt="">
              <div class="dots">
                <div class="dot1"></div>
                <div class="dot2"></div>
                <div class="dot3"></div>
              </div>
            </div>
            <div class="infos">
              <span class="name">Bryan Rafferty Basanda</span>
              <span class="lorem">Developer</span>
            </div>
            <a href="/contact" class="btn-contact">CONTACT</a>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin-square"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </label>

        <label for="s3" id="slide3">
          <div class="card">
            <div class="image">
              <img src="../assets/daniel.jpg" alt="">
              <div class="dots">
                <div class="dot1"></div>
                <div class="dot2"></div>
                <div class="dot3"></div>
              </div>
            </div>
            <div class="infos">
              <span class="name">Daniel Rafael Ayorbaba</span>
              <span class="lorem">Developer</span>
            </div>
            <a href="/contact" class="btn-contact">CONTACT</a>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin-square"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </label>

        <label for="s4" id="slide4">
          <div class="card">
            <div class="image">
              <img src="../assets/gabriella.png" alt="">
              <div class="dots">
                <div class="dot1"></div>
                <div class="dot2"></div>
                <div class="dot3"></div>
              </div>
            </div>
            <div class="infos">
              <span class="name">Gabriel Margareth</span>
              <span class="lorem">Team Leader</span>
            </div>
            <a href="/contact" class="btn-contact">CONTACT</a>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin-square"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </label>

        <label for="s5" id="slide5">
          <div class="card">
            <div class="image">
              <img src="../assets/ryan.jpg" alt="">
              <div class="dots">
                <div class="dot1"></div>
                <div class="dot2"></div>
                <div class="dot3"></div>
              </div>
            </div>
            <div class="infos">
              <span class="name">Ryan</span>
              <span class="lorem">Developer</span>
            </div>
            <a href="/contact" class="btn-contact">CONTACT</a>
            <div class="social-links">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin-square"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </label>
      </div>
    </div>

    <div class="another-socials">
    </div>
</body>
</html>