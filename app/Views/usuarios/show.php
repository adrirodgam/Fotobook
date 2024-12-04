
 <?= $this->extend("plantilla"); //plantilla ?>

 <?= $this->section("content"); //aqui empieza el contenido?>

 <section class="row">
    <div class="col-12 card">

        <div class="card-header">
            <h3 class="card-title"> <?= $usuario ["nombre"]; ?> </h3>
        </div>

        <div class="card-body">
        <ul>
        <li>  <b> nombre: </b> <?= $usuario ["nombre"]; ?> </li>
        <li>  <b> telefono: </b> <?= $usuario ["telefono"]; ?> </li>
        <li>  <b> correo: </b> <?= $usuario ["correo"]; ?> </li>
        </ul>

        </div> 
    </div>  
</section>



<!--Views/usuarios/create -->




<?= $this->endSection(); //aqui termina el contenido?>