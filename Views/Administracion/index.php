<?php include "Views/Templates/header.php"; ?>

<div class="card">
    <div class="card-header">
      DATOS DE LA EMPRESA

      
    </div>

  
    <div class="card-body">
        
       <form id="frmEmpresa">

            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <input  id="id" class="form-control" type="hidden" name="id" value="<?php echo $data['id']?>">

                        <label for="nit">NIT</label>
                        <input  id="nit" class="form-control" type="text" name="nit" placeholder="NIT" value="<?php echo $data['nit']?>">
                     </div>

                     <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input  id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre" value="<?php echo $data['nombre']?>">
                     </div>


                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input  id="telefono" class="form-control" type="text" name="telefono" placeholder="Telefono" value="<?php echo $data['telefono']?>">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input  id="direccion" class="form-control" type="text" name="direccion" placeholder="Direccion" value="<?php echo $data['direccion']?>">
                     </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" class="form-control" name="mensaje"  rows="3"> <?php echo $data['mensaje'] ?> </textarea>
                    </div>
                </div>

             <br>  
             <div> 
            <button  class="btn btn-primary" type="button" onclick="modifarEmpresa()">Modificar</button>
            </div>
       </form>
      
    </div>
</div>


<?php include "Views/Templates/footer.php"; ?>