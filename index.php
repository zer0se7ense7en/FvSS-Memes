<html lang=DE>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- /// <link rel="stylesheet" href="/css/Ownstyle.css"> -->
  <title>SteinSchule.Memes</title>
</head>

<?php
  $servername = "localhost";
  $benutzername = "root";
  $passwort = "";
  $datenbankname = "EigeneDaten";

  $con = new mysqli($servername, $benutzername, $passwort, $datenbankname);

  //Im Fehlerfall eine Fehlermeldung ausgeben
  if (mysqli_connect_errno()) {
    printf("Verbindung fehlgeschlagen: %s\n", mysqli_connect_error());
    exit();
  }

  $sql = "INSERT INTO Users (Name, Passwort) VALUES ('MaxMustermann', 'passwortvonMax')";

  if($con->query($sql) === TRUE) {
    echo "Du bist erfolgreich registriert worden";
  }
  else {
    echo "Du bist ein Lappen" . $con->error;
  }

  $con->close();
?>

<!-- ////////////////////////////// -->

<body>
  <div class="container-fluid">
    <div class="container-sm p-2">

      <!-- Reihe 1 / Überschriftsektion -->
      <div class="row m-2">

        <!-- Spalte 1.1 / Überschrift -->
        <div class="col">

          <img class="mx-auto d-block mt-4" src="https://i.ibb.co/QD3d4pJ/Fv-SSLogo-Original-WEB.png" width="100x">

          <p  class="text-center text-body"
              style="font-family: Copperplate; margin-top: 0.2rem; letter-spacing: .5rem; font-size: 40px;">
              stein&thinsp;schule&thinsp;memes
          </p>

          <p  class="text-center text-muted"
              style="font-family: Copperplate; margin-top: -0.8rem">
              Qualitätsmemes aus der Mememanufaktur FvS
          </p>

        </div>

      </div>

      <!-- Reihe 2 / NavBar -->
      <div class="row m-1">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand text-body" href="#"> NavBar</a>
          <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="https://cdn4.iconfinder.com/data/icons/core-ui-outlined/32/outlined_menu-512.png" width="25px" alt="">
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle text-b" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

      <!-- Reihe 3 -->
      <div class="row m-1 mt-3">

        <!-- Spalte 3.1 / Memes -->
        <div class="col-sm-8 p-2">

          <!-- Spalte 3.1.1 / Carousel -->
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox" style=" width:100%; !important;">


              <div class="carousel-item active">
                <div class="card-body">
                  <img src="https://i.redd.it/qsldnfyg7he41.png" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/5e0hp1cmezh51.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/d6kl4ub0kbj51.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/7if9znvrx4e51.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/y0meeesjahl51.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/i4el1q6ql7841.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/c8bte6xhlip31.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/ava1gf9gb0851.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/w7zqpp34zpi51.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/8uf6g88z7id41.png" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/fe69axdca9h31.jpg" class="card-img" alt="...">
                </div>
              </div>

              <div class="carousel-item">
                <div class="card-body">
                  <img src="https://i.redd.it/1pjz301eb0v41.jpg" class="card-img" alt="...">
                </div>
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
          <!-- Spicy Meme Sources: https://i.redd.it/cfk0sl4p9sy31.jpg https://i.redd.it/tmiuyhl58rd51.jpg -->
        </div>

        <!-- Spalte 3.2 / Social -->
        <div class="col-sm-4 p-2">

          <!-- Reihe 3.2.1 / Voting -->
          <div class="row-3 m-2">
            <button type="button" class="btn btn-success">upvote</button>
            <button type="button" class="btn btn-danger">downvote</button>
          </div>

          <!-- Reihe 3.2.2 / Comments -->
          <div class="row-9 m-2">
            Comments
          </div>

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
