<html lang=en>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/css/Ownstyle.css"> -->
    <title>FvSS-Maimais</title>
  </head>

<!-- ////////////////////////////// -->

  <body>

    <div class="container-fluid bg-dark p-2">
      <?php
      $txt = "HelloWorld!";
      echo "<h2>" . $txt . "</h2>";
      ?>
      <div class="row m-2"> <!-- Reihe 1 Überschrift-->
        <div class="col"> <!-- Spalte 1.1 -->
          <h1 class="text-center text-white" style="font-family: Copperplate; margin-top: 1rem; letter-spacing: .5rem">SteinSchule.Memes</h1>
          <p class="text-center text-light" style="font-family: Copperplate; margin-top: -0.8rem">Qualitätsmemes aus der Mememanufaktur der FvSS seit 1930</p>
        </div>
      </div>
 <!-- Reihe 2 NavBar-->
      <div class="row m-2 justify-content-center">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <a class="navbar-brand" href="#"><img src="https://i.ibb.co/QD3d4pJ/Fv-SSLogo-Original-WEB.png" width="30x"> Stein.Memes</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Meme des ...
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Tages</a>
                  <a class="dropdown-item" href="#">Monats</a>
                  <a class="dropdown-item" href="#">Jahres</a>
                </div>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="#">Random Meme</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="#">Templates</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="login.html">Login</a>
              </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>

      <div class="row m-1 mt-3"> <!-- Reihe 3 -->
<!-- Spalte 3.1 "Memes"-->
        <div class="col-sm-8 p-2">
          <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="1">
                <div class="card " >
                  <img src="https://i.redd.it/qsldnfyg7he41.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-interval="100000000">
                <img src="https://i.redd.it/aeq5km6zd2q51.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- Spicy Meme Sources: https://i.redd.it/hygjwamhubh51.jpg https://i.redd.it/1q6m5gynk4u41.jpg https://i.redd.it/y0meeesjahl51.jpg https://i.redd.it/7if9znvrx4e51.jpg https://i.redd.it/d6kl4ub0kbj51.jpg https://i.redd.it/5e0hp1cmezh51.jpg https://i.redd.it/cfk0sl4p9sy31.jpg https://i.redd.it/tmiuyhl58rd51.jpg -->
        </div>

        <div class="col-sm-4 p-2"> <!-- Spalte 3.2 -->
 <!-- Reihe 3.2.1 "Voting"-->
          <div class="row-3 m-2">
            <button type="button" class="btn btn-success">Hochwähli</button>
            <button type="button" class="btn btn-danger">Runterwähli</button>
          </div>
<!-- Reihe 3.2.2 "Comments"-->
          <div class="row-9 m-2">
            Comments
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
