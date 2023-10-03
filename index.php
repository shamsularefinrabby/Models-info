
<!doctype html>
<html lang="en">

<head>
  

  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./admin/lib/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./slider/css/style.css">

  <title></title>
</head>

<body>

  <!-- Loader -->
  <!-- <div class="loader">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div> 
  </div> -->










  <!-- Click capture -->
  <div class="click-capture d-lg-none"></div>

  <!-- Navbar -->
  <nav id="scrollspy" class="navbar navbar-desctop">

    <div class="d-flex mr-0 position-relative w-100">

      <!-- Brand-->
      <a class="navbar-brand mr-auto mb-auto mt-auto" href="#">LOGO</a>
      <ul class="navbar-nav-desctop  m-auto d-none d-lg-block">
        <li><a class="nav-link" href="#home">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link" href="#experience">Profiles</a></li>
        <li><a class="nav-link" href="#projects">FaQ's</a></li>
        <li><a class="nav-link" href="#testimonials">Vlog</a></li>
      </ul>
      <a href="">
        <button type="button" class="btn btn-info">Login</button>
        <button type="button" class="btn btn-info">Register</button>
      </a>

      <!-- Social -->
     

      <!-- Toggler -->
      <button class="toggler d-lg-none ml-auto">
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
        <span class="toggler-icon"></span>
      </button>
    </div>
  </nav>


  <!-- Navbar Mobile -->
  <nav id="navbar-mobile" class="navbar navbar-mobile d-lg-none">
    <ion-icon class="close" name="close-outline"></ion-icon>

    <!-- Social -->
    <ul class="social-icons mr-auto mr-lg-0">
      <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
      <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
      <li><a href="#"> <ion-icon name="logo-instagram"></ion-icon></a></li>
    </ul>

    <ul class="navbar-nav navbar-nav-mobile">
      <li><a class="nav-link" href="#home">Home</a></li>
      <li><a class="nav-link" href="#about">About</a></li>
      <li><a class="nav-link" href="#experience">Experience</a></li>
      <li><a class="nav-link" href="#projects">Projects</a></li>
      <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
    </ul>
    <div class="navbar-mobile-footer">
      <p>© 2020 Richard. All Rights Reserved.</p>
    </div>
  </nav>
  
  <section class="section">
  <div class="container">
        <div class="slider">
        <div class="slide-viewer">
          <div class="slide-group">
            <div class="slide slide-1">
              <img src="./slider/img/slide-1.jpg" alt="slide_01" />
            </div>
            <div class="slide slide-2">
              <img src="./slider/img/slide-2.jpg" alt="slide_02"  />
            </div>
            <div class="slide slide-3">
              <img src="./slider/img/slide-3.jpg" alt="slide_03"  />
            </div>
            <div class="slide slide-4">
              <img src="./slider/img/slide-4.jpg" alt="slide_04"  />
            </div>
          </div>
        </div>
        <div class="slide-buttons"></div>
      </div>
    </div>
  </section>
 



  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
   <script src="./slider/js/index.js"></script>