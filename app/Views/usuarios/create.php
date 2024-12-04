
 <?= $this->extend("plantilla"); //plantilla ?>

 <?= $this->section("content"); //aqui empieza el contenido?>

 <section class="row">
    <div class="col-12 card">

        <div class="card-header">
            <h3 class="card-title">Lista de usurios</h3>
        </div>

        <div class="card-body">
 <!----aqui va el form o el codigo  --->

            <form action="/usuarios/store" method="POST" name="usuarioForm">


                <div class ="mb-3">
                    <label class="form-label" for="nombre"> Nombre </label>
                    <input class="form-control" type="text" name="nombre" required>    
                </div>

                <div class ="mb-3">
                    <label class="form-label" for="telefono"> Telefono </label>
                    <input class="form-control" type="text" name="telefono" required>    
                </div>
                
                <div class ="mb-3">
                    <label class="form-label" for="correo"> Correo </label>
                    <input class="form-control" type="email" name="correo" required>    
                </div>

                <div class ="mb-3">
                    <label class="form-label" for="password"> Password </label>
                    <input class="form-control" type="password" name="password" required>    
                </div>

                <button class="btn btn-success bi bi-person-plus" type="submit"> Crear Usuario </button>
            </form>


        </div>
    </div>  
</section>



<!--Views/usuarios/create -->




<?= $this->endSection(); //aqui termina el contenido?>