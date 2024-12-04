
 <?= $this->extend("plantilla"); //plantilla ?>

 <?= $this->section("content"); //aqui empieza el contenido?>

 <section class="row">
    <div class="col-12 card">

        <div class="card-header">
            <h3 class="card-title">Fotografias</h3>
        </div>

        <div class="card-body">
 <!----aqui va el form o el codigo  --->

            <form action="/fotografias/store" method="POST" name="usuarioForm">


                <div class ="mb-3">
                    <label class="form-label" for="evento_id"> Evento </label>
                    <input class="form-control" type="text" name="evento_id" required>    
                </div>

                <div class ="mb-3">
                    <label class="form-label" for="url"> URL </label>
                    <input class="form-control" type="text" name="url" required>    
                </div>
                
                <div class ="mb-3">
                    <label class="form-label" for="seleccionada"> Seleccionada </label>
                    <input class="form-control" type="seleccionada" name="seleccionada" required>    
                </div>

                <button class="btn btn-success bi bi-person-plus" type="submit"> Crear Fotografia </button>
            </form>


        </div>
    </div>  
</section>



<!--Views/usuarios/create -->




<?= $this->endSection(); //aqui termina el contenido?>