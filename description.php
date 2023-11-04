<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./admin/lib/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/style.css">




</head>

<body>

  <section>

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
        <li><a class="nav-link" href="#profile">Profiles</a></li>
        <li><a class="nav-link" href="#faq's">FaQ's</a></li>
        <li><a class="nav-link" href="#Blog">Blog</a></li>
      </ul>

    </nav>

  </section>

  card


  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="d-flex flex-column">
            <div class="img-thumbnail" style="width: 250px; height: 300px;">
              <img src="./img/12345.jpg" alt="" class="w-100 h-100 rounded float-start">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="d-flex flex-column mb-3">

            <form>
              <div class="col-4">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control">
                
              </div>
              <div class="col-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" >
              </div>
              
            </form>

          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>





</body>

</html>