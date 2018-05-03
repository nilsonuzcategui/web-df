<style>
       /*.carousel-inner img {
            width: 100%;
            max-height: 205px;
        }

        .carousel-inner{
            height: 205px;
        }*/
    </style>

<div class="header-home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/home1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Home2.png" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="container">
    <div class="row aportes">
        <div class="col-md-5">
            <img src="img/consultar.png" style="width: 100%;">
        </div>
        <div class="col-md-7 text-right">
            <h2>Consulta tus Aportes</h2>
            <p>
                En esta sección puedes consultar tu estado de cuenta de tus de tus aportes, desde el inicio del uso del Sistema ANCO y puedes imprimirlo o guardarlo en PDF como te sea más agradable.
            </p>
            <br>
            <a href="index.php?s=aportes"><input type="button" class="btn btn-info" value="Aportes"></a>
        </div>
    </div>
    <div class="row actualizar">
        <div class="col-md-5 d-sm-block d-md-none">
            <img src="img/actualizar.jpg" style="width: 100%;">
        </div>
        <div class="col-md-7 text-left">
            <h2>Actualizar Datos</h2>
            <p>
                En esta sección están tus datos personales, puedes consultarlo y actualizarlo si crees necesario. ¡Ayúdanos a estar actualizados!
            </p>
            <br>
            <a href="index.php?s=perfil"><input type="button" class="btn btn-info" value="Actualizar"></a>
        </div>
        <div class="col-md-5 d-none d-md-block">
            <img src="img/actualizar.jpg" style="width: 100%;">
        </div>
    </div>
</div>