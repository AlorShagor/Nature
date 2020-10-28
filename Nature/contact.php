<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature</title>
    <!-- All Css Links  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- Header Menu Part  -->
<header class="header-area">
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Nature</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</header>
<!-- Header Menu Part End -->





<main>



<!-- Contact Markup  -->
<section class="contact-area py-5">
    <div class="container">
    <div class="contact-heading pb-5 text-center">
                <h3>Contact Us</h3>
            </div>
      <div class="row">
      <div class="col-xl-6 col-md-6 col-12 pb-5">
            <div class="contact-img">
                <img src="img/5.jpg" alt="">
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-12">
            <div class="contact-form-heading pb-4 pt-3">
                <h5>Contact form</h5>
            </div>
         <form action="userinfo.php" method="post">
         <div class="form-group">
                <label>User Name</label>
                <input type="text" name = "user" class = "form-control" autocomplete = "off">
                <label class = "mt-3">Email</label>
                <input type="email" name = "email" class = "form-control" autocomplete = "off">
                <label class = "mt-4">Mobile</label>
                <input type="text" name = "mobile" class = "form-control" autocomplete = "off">
                <label class = "mt-4">Comment</label>
              <textarea name="comment" id="message" class = "comm form-control" autocomplete = "off" placeholder = "Write Your Comment Here.." ></textarea>
            <button type="submit" class = "btn btn-success mt-5">Submit</button>
            </div>

         </form>
        </div>
      </div>
    </div>
</section>
<!-- Contact Markup End -->


</main>

<!-- Footer Part  -->
<footer class="footer-area bg-dark text-white">
    <div class="container">
        <div class="row">
            <p class = "p-0 pt-3 text-center w-100 footer-license">@Copyright All Right Reserved By Shagor Ahmed</p>
        </div>
    </div>
</footer>
<!-- Footer Part End -->




<!-- JavaScript Plugins Link  -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr-3.11.2.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
</body>
</html>