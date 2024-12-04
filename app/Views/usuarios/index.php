
 <?= $this->extend("plantilla"); //plantilla ?>

 <?= $this->section("content"); //aqui empieza el contenido?>

 <section class="row">
    <div class="col-12 card">

        <div class="card-header">
            

        <a href="<?= base_url(); ?>/usuarios/create" 
            class="btn btn-success btn-sm"> 
            <i class="bi bi-person-plus-fill"> </i> 
            Nuevo Usuario
             </a>



        </div>

        <div class="card-body">
 <!----aqui va el form o el codigo  --->

 <table class="table table-striped">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th style="width: 40px">Telefono</th>
            <th> Acciones </th>
        </tr>
    </thead>


    <tbody>
    <?php foreach($usuarios as $usuario):  //inicio foreach ?>

        <tr class="align-middle">
            <td>  <?= $usuario ["id"]; ?> </td>
            <td>  <?= $usuario ["nombre"]; ?></td>
            <td> <?= $usuario ["correo"]; ?>  </td>
            <td> <?= $usuario ["telefono"]; ?> </td>
            <td>

            <a href="<?= base_url(); ?>/usuarios/<?=$usuario["id"];?>"
                class="btn btn-warning btn-sm">
                <i class="bi bi-eye-fill"></i>
            </a>
            
                <a href="<?= base_url("/usuarios/$usuario[id]/edit"); ?>"
             href="" class="btn btn-secondary  btn-sm" ><i class="bi bi-pencil-square"></i></a>

             <button 
                onClick="eliminar(<?= $usuario["id"]; ?> )"
                class="btn btn-danger btn-sm"  >
                <i class="bi bi-trash3"></i>
            </button>
    </td>

           

        </tr>

        <?php endforeach;    //fin foreach ?>


    </tbody>
</table>


        </div>
    </div>  
</section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

<script>

function eliminar(id){

    
            Swal.fire({
            title: "Estas seguro?",
            text: "El registro se eliminará permanentemente!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, eliminar!"
            }).then((result) => {
            if (result.isConfirmed) {

                location.href = "<?= base_url(); ?> /usuarios/"+ id + "/delete";
           
}
});

}

</script>



<!--Views/usuarios/create -->

<?= $this->endSection(); //aqui termina el contenido?>