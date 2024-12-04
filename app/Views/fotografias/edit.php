
<?= $this->extend("plantilla"); //plantilla ?>

<?= $this->section("content"); //aqui empieza el contenido?>

<section class="row">
   <div class="col-12 card">

       <div class="card-header">
           <h3 class="card-title">Editar Fotografia</h3>
       </div>

       
       <form action="/fotografias/<?= $fotografia["id"]?>/update" method="POST" name="fotografiaForm">

    <div class ="mb-3">
        <label class="form-label" for="evento"> Evento </label>
        <input class="form-control" type="text" name="evento_id" value="<?= $fotografia["fotografia"];?>" required>    
    </div>

    <div class ="mb-3">
        <label class="form-label" for="url"> URL </label>
        <input class="form-control" type="text" name="url"  value="<?= $fotografia["fotografia"];?>"required>    
    </div>
    
    <div class ="mb-3">
        <label class="form-label" for="seleccionada"> Seleccionada </label>
        <input class="form-control" type="text" name="seleccionada"value="<?= $fotografia["seleccionada"];?>" required>    
    </div>

   

    <button class="btn btn-primary bi bi-person-fill-gear " type="submit"> Editar </button>
</form>

       </div>
   </div>  
</section>



<?= $this->endSection(); //aqui termina el contenido?>

