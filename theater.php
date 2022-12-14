<?php
$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');
?>
</!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="style\style.css" rel="stylesheet" type="text/css">
  <title></title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <?php  if ($_COOKIE['user'] != '') :        ?>
  <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a></p>
  <?php endif;?>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Afisha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"> 
            <a class="nav-link active" aria-current="page" href="index.php">Cinema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Theater</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="circus.php">Circus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="userpage.php">User Page</a>
          </li>
        </ul>
        <div class="float-right">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item  ">
            <a class="nav-link active " aria-current="page" href="authorization.html">Sign In</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="registration.html">Sign Up</a>
          </li>
        </ul>
        </div>>
      </div>
    </div>
  </nav>

  <!-- Carousel wrapper -->
  
<!-- Inner -->
<div class="carousel-inner py-4">
  <!-- Single item -->
  <div class="carousel-item active">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <img 
            src="https://www.uprinting.com/blog/wp-content/uploads/2011/08/Theater-Posters-011.jpg"
            class="card-img-top"
            alt="Get Out"
            />
            <div class="card-body">
              <h5 class="card-title">The Weeping Game</h5>
              <p class="card-text">
                Ben Akiba on a stage again
              </p>
              <a href="/productpages/weepinggame.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://www.uprinting.com/blog/wp-content/uploads/2011/08/Theater-Posters-03.jpg"
            class="card-img-top"
            alt="Social Network"
            />
            <div class="card-body">
              <h5 class="card-title">Mac Beth</h5>
              <p class="card-text">
                Mac Beth on a stage again. Again...
              </p>
              <a href="/productpages/macbeth.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://www.uprinting.com/blog/wp-content/uploads/2011/08/Theater-Posters-06.jpg"
            class="card-img-top"
            alt="lamb"
            />
            <div class="card-body">
              <h5 class="card-title">Tigar</h5>
              <p class="card-text">
                What is Tigar? You should see to know!
              </p>
              <a href="/productpages/tigar.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://www.uprinting.com/blog/wp-content/uploads/2011/08/Theater-Posters-10.jpg"
            class="card-img-top"
            alt="Man of LaMancha"
            />
            <div class="card-body">
              <h5 class="card-title">Man of LaMancha</h5>
              <p class="card-text">
                Classic!
              </p>
              <a href="/productpages/manlamancha.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://www.uprinting.com/blog/wp-content/uploads/2011/08/Theater-Posters-11.jpg"
            class="card-img-top"
            alt="Jurassic Park"
            />
            <div class="card-body">
              <h5 class="card-title">Carmen</h5>
              <p class="card-text">
                You will love her, you will hate her. Its Carmen!
              </p>
              <a href="/productpages/carmen.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://www.uprinting.com/blog/wp-content/uploads/2011/08/Theater-Posters-13.jpg"
            class="card-img-top"
            alt="Back to the Future"
            />
            <div class="card-body">
              <h5 class="card-title">Aida</h5>
              <p class="card-text">
                Deep secrets of Giuseppe Verdi
              </p>
              <a href="/productpages/aida.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Single item -->
  

  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
</body>
</html>