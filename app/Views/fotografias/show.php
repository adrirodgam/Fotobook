
 <?= $this->extend("plantilla"); //plantilla ?>

 <?= $this->section("content"); //aqui empieza el contenido?>

 <section class="row">
    <div class="col-12 card">

        <div class="card-header">
            <h3 class="card-title"> <?= $fotografia ["fotografia"]; ?> </h3>
        </div>

        <div class="card-body">
        <ul>
        <li>  <b> evento: </b> <?= $fotografia ["evento_id"]; ?> </li>
        <li>  <b> url: </b> <?= $fotografia ["url"]; ?> </li>
        <li>  <b> seleccionada: </b> <?= $fotografia ["seleccionada"]; ?> </li>
        </ul>

        </div> 
    </div>  
</section>



<!--Views/usuarios/create -->




<?= $this->endSection(); //aqui termina el contenido?>