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
        <a class="navbar-brand mr-auto mb-auto mt-auto" href="index.php">LOGO</a>
        <ul class="navbar-nav-desctop  m-auto d-none d-lg-block">
          <li><a class="nav-link" href="index.php">Home</a></li>
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

        <div class="col-7 ">
          <div class="d-flex flex-column">
            <form action="#" method="" enctype="">
              <div class="">
                <div class="row mg-b-25">

                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="">
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-6">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Last Name<span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="">
                    </div>
                  </div><!-- col-8 -->

                  <div class="form-group col-12">
                    <label>Email address: <span class="tx-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="abc@def.com">
                  </div>

                  <div class="form-group col-12">
                    <label>Password: <span class="tx-danger">*</span></label>
                    <input type="Password" class="form-control" placeholder="Enter your password">
                  </div>

                  <div class="form-group col-12">
                    <label>Confirm Password: <span class="tx-danger">*</span></label>
                    <input type="Password" class="form-control" placeholder="Confirm Your Password">
                  </div>

                  <div class="form-group col-6">
                    <label>Present Address: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                  <div class="form-group col-6">
                    <label>Parmanent Address: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="">
                  </div>

                  <div class="form-group col-4">
                    <label>Date Of Birth: <span class="tx-danger">*</span></label>
                    <input type="date" class="form-control" placeholder="">
                  </div>

                  <div class="form-group col-4">
                    <label>Nationality: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="">
                  </div>

                  <div class="form-group col-4">
                    <label>Place Of Birth: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="">
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-2">
          <div class="d-flex flex-column mb-3 float-end">
            <div class="form-layout ">
              <button class="btn  btn-info mg-r-5">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section">
    <div class="container">
      <div class="col-12">
        <div class="row">
          <h3>Images</h3>
          <div class="card">
            <div class="d-flex flex-row mb-3 col-4">
              <div class="card-body d-flex flex-column">
                <img class="card-img-top img-thumbnail" style="width: 200px; height: 200px;" src="./img/12345.jpg " alt="">
              </div>
            </div>



            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>

    </div>
  </section>





</body>

</html>