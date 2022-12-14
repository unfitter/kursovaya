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
            <a class="nav-link active" aria-current="page" href="#">Cinema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="theater.php">Theater</a>
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
          <?php

          
           $query = $mysql->query("SELECT * FROM `Мероприятие` WHERE `id` = 1 ");
          
          $id = $query->fetch_assoc();
           ?>
          <div class="card">
            <img 
            src="<?php echo $id['img'] ?>"
            class="card-img-top"
            alt="Get Out"
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo $id['Название'] ?></h5>
              <p class="card-text">
                Get Out on screens again!
              </p>
              
                      
                      <a href="/productpages/getout.php" class="btn btn-primary">Buy</a>
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://img.buzzfeed.com/buzzfeed-static/static/2022-03/28/1/asset/2b92f7d73e60/sub-buzz-6345-1648431094-1.jpg?downsize=600:*&output-format=auto&output-quality=auto"
            class="card-img-top"
            alt="Social Network"
            />
            <div class="card-body">
              <h5 class="card-title">Social Network</h5>
              <p class="card-text">
                Real classic is here!
              </p>
              
              <a href="/productpages/socialnetwork.php" class="btn btn-primary">Buy</a>
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://img.buzzfeed.com/buzzfeed-static/static/2022-03/28/1/asset/fcf0aaaff603/sub-buzz-5991-1648431120-8.jpg?downsize=600:*&output-format=auto&output-quality=auto"
            class="card-img-top"
            alt="lamb"
            />
            <div class="card-body">
              <h5 class="card-title">The Shining</h5>
              <p class="card-text">
                Its Kubrick, you know
              </p>
              <a href="/productpages/theshining.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://img.buzzfeed.com/buzzfeed-static/static/2022-04/4/20/asset/0f12255e2129/sub-buzz-817-1649105149-10.jpg?downsize=700%3A%2A&output-quality=auto&output-format=auto"
            class="card-img-top"
            alt="Jurassic Park"
            />
            <div class="card-body">
              <h5 class="card-title">Jurassic Park</h5>
              <p class="card-text">
                Classic!
              </p>
              <a href="/productpages/jurassicpark.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://img.buzzfeed.com/buzzfeed-static/static/2022-03/28/1/asset/fcf0aaaff603/sub-buzz-5998-1648431146-15.jpg?downsize=600:*&output-format=auto&output-quality=auto"
            class="card-img-top"
            alt="Jurassic Park"
            />
            <div class="card-body">
              <h5 class="card-title">Pulp Fiction</h5>
              <p class="card-text">
                Some great stroies must be seen!
              </p>
              <a href="/productpages/pulpfiction.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://img.buzzfeed.com/buzzfeed-static/static/2022-03/28/1/asset/2b92f7d73e60/sub-buzz-6345-1648431180-3.jpg?downsize=600:*&output-format=auto&output-quality=auto"
            class="card-img-top"
            alt="Back to the Future"
            />
            <div class="card-body">
              <h5 class="card-title">Back to the Future</h5>
              <p class="card-text">
                The genius of Steven Spielberg
              </p>
              <a href="/productpages/backtofuture.php" class="btn btn-primary">Buy</a>
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