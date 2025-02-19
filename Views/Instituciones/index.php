
 <?php include "Views/Templates/header.php"; ?>

<div class="card">
    <div class="card-header card-header-primary">
        UNIVERSIDAD - INSTITUTO
    </div>
    <div class="card-body">
        <button class="btn btn-primary mb-2" type="button" onclick="frmInstitucion();"><i class="fas fa-plus"></i> NUEVA UNIVERSIDAD / INSTITUTO</button>
        <table class="table table-light table-bordered table-hover" id="tblInstituciones">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Nombre Corto</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="nuevoInstitucion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="title">Nueva Universidad/Instituto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmInstitucion">

                    <div class="form-floating mb-3">
                        <input type="hidden" id="id" name="id">

                 
                    <div class="form-group">
                     <label for="id_categoria">Categorias</label>
                        <select id="tipo" class="custom-select my-1 mr-sm-6 form-control" name="tipo">
                                                
                            <option selected>Seleccionar...</option>
                            <option value="UNIVERSIDAD">UNIVERSIDAD</option>
                            <option value="INSTITUTO">INSTITUTO</option>
                        </select>
                    </div>  
                    </div>

                   





                    <div class="form-floating mb-3">
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Universidad/Instituto">
                        <label for="nombre">Universidad/Instituto</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input id="nombre_corto" class="form-control" type="text" name="nombre_corto" placeholder="Iniciales">
                        <label for="nombre_corto">Iniciales</label>
                    </div>

                    
                    <button class="btn btn-primary" type="button" onclick="registrarInstitucion(event);" id="btnAccion">Registrar</button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
 <?php include "Views/Templates/footer.php"; ?> -

<script src="<?php echo base_url; ?>Assets/js/institucion.js"></script>

