<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./maping.css">
    <title>TP Random</title>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="57">
    <!-- Header -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./assets/images/afpa.svg" alt="Afpa logo">
          TP RANDOM
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#main">Funtions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#speakers">TP 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Place-time">TP3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#conviertete-en-orador">Resumen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-platzi" href="#" data-toggle="modal" data-target="#modalCompra">Plus</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /Header -->

    <!-- Main -->
    <!-- <main id="main">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/images/hawaii.jpg" alt="Hawaii 1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/hawaii2.jpg" alt="Hawaii 2">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/images/hawaii3.jpeg" alt="Hawaii 3">
          </div>
          <div class="overlay">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-center text-md-right">
                  <h1>Explication générale TP1</h1>
                  <p class="d-none d-md-block">
                    Notre premier projet est de cartographier notre salle de classe où 
                    d'un simple clic nous pourrons échanger aléatoirement nos places, 
                    tout cela se fera avec des fonctions en php.
                  </p>
                  <a href="#" class="btn btn-outline-light" data-toggle="modal">Button</a>
                  <button type="button" class="btn btn-platzi" data-toggle="modal" data-target="#modalCompra">Autre Button</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main> -->
    <!-- /Main -->
    <!-- salon de classe -->
    
            <!--<img src="./assets/images/Group 23.svg" alt="Honolulu" />-->
            
            <section class="salonDeClases">
              <div class="carre123">
                  <div class="carre1">
                      <div class="place1"  id="place1" ><p class="nomsPlaces"><span class="Spanplaces">Place 1</span> <br><?php echo $_SESSION['tabPlacement']['Place_1']?></p></div>
                      <div class="place2"  id="place2" ><p class="nomsPlaces"><span class="Spanplaces">Place 2</span> <br><?php echo $_SESSION['tabPlacement']['Place_2']?></p></div>
                      <img class="placeimg" src="./assets/images/Group 16.svg" alt="" width="90%" >
                      <div class="place3"  id="place3" ><p class="nomsPlaces"><span class="Spanplaces">Place 3</span> <br><?php echo $_SESSION['tabPlacement']['Place_3']?></p></div>
                      <div class="place4"  id="place4"><p class="nomsPlaces"><span class="Spanplaces">Place 4</span> <br><?php echo $_SESSION['tabPlacement']['Place_4']?></p></div>
                  </div>
                  <div class="carre1">
                      <div class="place1"   id="place5" ><p class="nomsPlaces"><span class="Spanplaces">Place 5</span> <br><?php echo $_SESSION['tabPlacement']['Place_5']?></p></div>
                      <div class="place2"   id="place6" ><p class="nomsPlaces"><span class="Spanplaces">Place 6</span> <br><?php echo $_SESSION['tabPlacement']['Place_6']?></p></div>
                      <img class="placeimg"  src="./assets/images/Group 16.svg" alt="" width="90%">
                      <div class="place3"   id="place7" ><p class="nomsPlaces"><span class="Spanplaces">Place 7</span> <br><?php echo $_SESSION['tabPlacement']['Place_7']?></p></div>
                      <div class="place4"   id="place8" ><p class="nomsPlaces"><span class="Spanplaces">Place 8</span> <br><?php echo $_SESSION['tabPlacement']['Place_8']?> </p></div>
                  </div>
                  <div class="carre3"><img class="imgport" src="./asset/Rectangle 12.svg" alt=""></div>
              </div>
              <div class="carre456">
                  <div class="carre4">
                      <div class="place9"    id="place9"  ><p class="nomsPlaces"><span class="Spanplaces">Place 9</span> <br> <?php echo $_SESSION['tabPlacement']['Place_9']?></p></div>
                      <img class="placeimg2" src="./assets/images/carre4.svg" alt="" width="90%" >
                      <div class="place10"   id="place10"><p class="nomsPlaces"><span class="Spanplaces">Place 10</span> <br>><?php echo $_SESSION['tabPlacement']['Place_10']?>  </p></div>
                      <div class="place11"   id="place11"><p class="nomsPlaces"><span class="Spanplaces">Place 11</span> <br><?php echo $_SESSION['tabPlacement']['Place_11']?></p></div>
                      <div class="place12"   id="place12"><p class="nomsPlaces"><span class="Spanplaces">Place 12</span> <br><?php echo $_SESSION['tabPlacement']['Place_12']?> </p></div>
                  </div>
              
              <div class="carre5" width="300px" >
              <form action="../ctrl/traitement.php" method="post">
                    <input class="btn btn-platzi" type="submit" id="submit" name="submit" value="clik ici pour melangé"/>
                  
                </form>
              </div>
              <div class="carre6">
                      <div class="place13"   id="place13"><p class="nomsPlaces"><span class="Spanplaces">Place 13</span> <br><?php echo $_SESSION['tabPlacement']['Place_13']?></p></div>
                      <img class="placeimg3" src="./assets/images/carre6.svg" alt="" width="90%" >
                      <div class="place14"   id="place14"><p class="nomsPlaces"><span class="Spanplaces">Place 14</span> <br><?php echo $_SESSION['tabPlacement']['Place_14']?>    </p></div>
                      <div class="place15"   id="place15"><p class="nomsPlaces"><span class="Spanplaces">Place 15</span> <br><?php echo $_SESSION['tabPlacement']['Place_15']?></p></div>
                      <div class="place16"   id="place16"><p class="nomsPlaces"><span class="Spanplaces">Place 16</span> <br><?php echo $_SESSION['tabPlacement']['Place_16']?>     </p></div>
          
              </div>
              </div>
              <div class="carre78">
                  <img class="tablero" src="./assets/images/tablero.svg" alt="" width="90%" >
                  <img class="placeprofe" src="./assets/images/placeProfe.svg" alt="" width="90%" >
              </div>
          </section>
    



          <!--<div class="col-12 col-lg-3 pt-4 pb-4">
            <h2>Honolulu - Octubre 2025</h2>
            <p>
              Honolulu o Honolulú​ es la capital y localidad más grande del estado de Hawái, en los Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la isla (aproximadamente 600 km² de superficie).
            </p>
            <a class="btn btn-outline-light" href="https://es.wikipedia.org/wiki/Honolulu">Conoce más</a>
          </div> -->
          
    <!-- /Lugar y fecha -->
    
    <!-- Speakers 
    <section id="speakers" class="mt-4">
      <div class="container">
        <div class="row">
          <div class="col text-center text-uppercase">
            <small>Conoce a los</small>
            <h2>Oradores</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/speakers/sacha.jpg" alt="Foto de Sacha">
              <div class="card-body">
                <div class="badges">
                  <span class="badge badge-warning">JavaScript</span>
                  <span class="badge badge-info">React</span>
                </div>
                <h5 class="card-title">Sacha Lifszyc</h5>
                <p class="card-text">Vivamus quam mi, egestas eu metus id, mollis suscipit ipsum. In vel mollis mauris. Nunc id sem a lacus tincidunt pretium in in urna. Nam mi nisi, tincidunt ac tincidunt id, fermentum at metus.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/speakers/leonidas2.jpeg" alt="Foto de Sacha">
              <div class="card-body">
                <div class="badges">
                  <span class="badge badge-warning">JavaScript</span>
                  <span class="badge badge-info">React</span>
                </div>
                <h5 class="card-title">Leonidas Esteban</h5>
                <p class="card-text">Vivamus quam mi, egestas eu metus id, mollis suscipit ipsum. In vel mollis mauris. Nunc id sem a lacus tincidunt pretium in in urna. Nam mi nisi, tincidunt ac tincidunt id, fermentum at metus.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/speakers/freddy.jpeg" alt="Foto de Sacha">
              <div class="card-body">
                <div class="badges">
                  <span class="badge badge-secondary">Negocios</span>
                  <span class="badge badge-danger">Startups</span>
                </div>
                <h5 class="card-title">Freddy Vega</h5>
                <p class="card-text">Vivamus quam mi, egestas eu metus id, mollis suscipit ipsum. In vel mollis mauris. Nunc id sem a lacus tincidunt pretium in in urna. Nam mi nisi, tincidunt ac tincidunt id, fermentum at metus.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/speakers/cvander.jpeg" alt="Foto de Sacha">
              <div class="card-body">
                <div class="badges">
                  <span class="badge badge-secondary">Negocios</span>
                  <span class="badge badge-danger">Startups</span>
                </div>
                <h5 class="card-title">Christian Van Der H.</h5>
                <p class="card-text">Vivamus quam mi, egestas eu metus id, mollis suscipit ipsum. In vel mollis mauris. Nunc id sem a lacus tincidunt pretium in in urna. Nam mi nisi, tincidunt ac tincidunt id, fermentum at metus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Speakers -->


    <!-- Conviértete en orador ->
    <section id="conviertete-en-orador" class="pt-3 pb-3">
      <div class="container">
        <div class="row">
          <div class="col text-uppercase text-center">
            <small>Conviértete en un</small>
            <h2>Orador</h2>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            Anótate como orador para dar una <abbr data-toggle="tooltip" title="Charlas de 5 minutos">charla ignite</abbr>.
            Cuéntanos de qué quieres hablar!
          </div>
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
            <form>
              <div class="form-row">
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group col-12 col-md-6">
                  <input type="text" class="form-control" placeholder="Apellido">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <textarea name="text" class="form-control form-control-lg" placeholder="Sobre qué quieres hablar?"></textarea>
                  <small class="form-text text-muted">
                    Recuerda incluir un título para tu charla
                  </small>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <button type="button" class="btn btn-platzi btn-block">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /Conviértete en orador -->

    <!-- Footer -->
    <footer id="footer" class="pb-4 pt-4">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 col-lg">
            <a href="#">DWWP</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">PHP</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Apache</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">MQL</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">Synfony</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">structuration du projet</a>
          </div>
          <div class="col-12 col-lg">
            <a href="#">étudiants</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- Modal -->
    <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Comprar tickets</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
              </div>
            </form>
            <div class="alert alert-warning" role="alert">
              Recibirás un correo de confirmación si sales sorteado
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-platzi">Comprar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./index.js"></script>
  </body>
</html>
