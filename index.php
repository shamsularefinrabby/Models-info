<!doctype html>


<head>


  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./admin/lib/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./slider/css/styles.css">





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
        <li><a class="nav-link" href="#profile">Profiles</a></li>
        <li><a class="nav-link" href="#faq's">FaQ's</a></li>
        <li><a class="nav-link" href="#blogs">Blog</a></li>
      </ul>
      <a href=""><button type="button" class="btn btn-info">Login</button></a>
      <a href="./admin/register.php"><button type="button" class="btn btn-info">Register</button></a>

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


    <ul class="navbar-nav navbar-nav-mobile">
      <li><a class="nav-link" href="#home">Home</a></li>
      <li><a class="nav-link" href="#about">About</a></li>
      <li><a class="nav-link" href="#experience">Experience</a></li>
      <li><a class="nav-link" href="#projects">Projects</a></li>
      <li><a class="nav-link" href="#testimonials">Testimonials</a></li>
    </ul>

  </nav>

  <!-- slider start -->
  <section class="section">
    <div class="container">
      <div class="slide1 owl-carousel owl-theme">
        <div class="item">
          <img src="./slider/Img/slide-2.jpg" style="width:100%">
        </div>
        <div class="item">
          <img src="./slider/Img/slide-3.jpg" style="width:100%">
        </div>
        <div class="item">
          <img src="./slider/Img/slide-1.jpg" style="width:100%">
        </div>


      </div>
    </div>
  </section>

  <!-- slider End -->

  <!-- service Start -->

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
          <h3 class="text-center text-warning mb-3 pt-3 mb-md-0">Our Services</h3>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="slide2 owl-carousel owl-theme">
          <div class="item">
            <figcaption class="position-relative">
              <img alt="" class="w-100" src="./slider/Img/slider-6.jpg">
              <div class="text-black">
                <h3 class="">Front-End Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, pariatur.</p>
              </div>
            </figcaption>
          </div>
          <div class="item">
            <picture class="position-relative">
              <img alt="" class="w-100" src="./slider/Img/slider-2.jpg">
              <div class="text-black">
                <h3 class="mb-2">Back-End Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium iste ullam molestias at debitis quae accusantium, temporibus porro vitae. Tempora.</p>
              </div>
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- service End -->

  <!-- FAQ and video part start -->

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="d-flex flex-column mb-3">
            <div class="bd-highlight">
              <h3>FAQ's</h3>
            </div>
            <div class="dropdown mt-2">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                What is modeling?
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, exercitationem.</p>
                </a>
              </div>
            </div>
            <div class="dropdown mt-2">
              <button class="btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                how to hire a mode?
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">
                  <p>Lorem ipsum dolor sit amet.</p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="d-flex flex-row mb-3">
            <div class="p-2 bd-highlight">
              <video width="640" height="360" controls>
                <source src="./videos/দুর্ধর্ষ ড্রোন দিয়ে ইসরাইলে হামাসের বাজিমাত _ Israel-Palestine War _ Hamas _ Somoy TV.mp4" type="video/mp4">
              </video>

              <div class="">
                <div>
                  <h2 class="text-center text-info mt-3 pt-3 mb-md-0">Contact US</h2>
                  <hr>
                </div>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized b</p>

                <div class="text-center">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#send-request">
                    Let's Talk
                  </button>


                  <!-- Modal -->
                  <div class="modal fade" id="send-request" tabindex="1" role="dialog" aria-labelledby="send-requestTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="">
                          <h5 class="modal-title" id="send-requestTitle">Send Message</h5>
                          <hr>
                          <p id="send-request">Leave your contacts and our team will contact you soon.</p>
                        </div>
                        <div class="modal-body text-left">
                          <form>
                            <div class="form-group">
                              <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your name*">
                            </div>
                            <div class="form-group">  
                              <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your email*">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Contact Number*">
                            </div>
                          </form>

                        </div>
                        <div class="">
                          <a href="#home"><button type="button" class="btn btn-primary mb-5">Submit</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal's end -->
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ and video part end -->

  <!-- vlogs part start -->

  <section class="section" id="blogs">
    <div class="container">
      <div class="row">
        <div class="col-md-12 aos-init aos-animate" data-aos="fade-up">
          <h3 class="text-center text-warning mb-3 pt-3 mb-md-0">Blogs</h3>
          <hr>
        </div>
      </div>

      <div class="slide2 owl-carousel owl-theme">



        <div class="service-item">
          <picture class="position-relative">
            <img alt="" class="" src="./slider/Img/slider-4.jpg">
            <div class="text-black mt-2">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. ?</p>
            </div>
          </picture>
        </div>
        <div class="service-item">
          <picture class="position-relative">
            <img alt="" class="" src="./slider/Img/slider-2.jpg">
            <div class="text-black">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. !</p>
            </div>
          </picture>
        </div>
      </div>

    </div>
  </section>


  <!-- vlogs part end -->





  <!-- Footer Start -->

  <footer>
    <div class="section bg-dark py-5 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <h6 class="text-white mb-4">Phone:</h6>
            <p class="text-white mb-4">+8801621311671:</p>
          </div>
          <div class="col-md-6 col-lg-4">
            <h6 class="text-white mb-4">Email:</h6>
            <p class="text-white mb-4">rabbyshamsularefin@gmail.com</p>
          </div>
          <div class="col-md-6 col-lg-4">
            <h6 class="text-white mb-4">Follow me:</h6>
            <ul class="social-icons">
              <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
              <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
              <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
              <li><a href="#"> <ion-icon name="logo-instagram"></ion-icon></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copy section-sm">
      <div class="container">© Copyright 2023 Rizvee. All Rights Reserved</div>
    </div>
  </footer>
  <!-- Footer End -->




  <script src="./slider/Js/script.js"></script>
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="js/jarallax.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/interface.js"></script>

  <script src="./slider/js/script.js"></script>

</body>

</html>