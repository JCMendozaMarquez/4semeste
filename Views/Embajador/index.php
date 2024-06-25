                
<?php include "Views/Templates/header.php"; ?>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Embajador</li>
</ol>
<button class="btn btn-primary mb-2" type="button" onclick="frmEmbajador();"><i class="fas fa-plus"></i>NUEVO REGISTRO</button>
<table class="table table-light table-bordered table-hover" id="tblEmbajador">
            <thead class="thead-dark">
                <tr>
                    <th>Diplomatico</th>
                    <th>Confirmacion</th>
                    <th>Nacionalidad</th>
                    <th>Recomendacion</th>
                    <th>Fecha_emision</th>
                    <th>estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
 </table>
        




 
<div class="modal fade" id="NuevoEmbajador" tabindex="-1" aria-labelledby="my_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="frmEmbajador">
                    <div class="form-floating mb-3">

                        <input type="hidden" id="Diplomatico" name="Diplomatico">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del caja">
                        <label for="nombre">Nombre</label>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="registrarCaja(event);" id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
            
<?php include "Views/Templates/footer.php"; ?>

<script src="<?php echo base_url; ?>Assets/js/Embajador.js"></script>