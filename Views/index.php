<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   <!-- <title> Incio de Sesion</title> 
    <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
    <script src="<?php echo base_url; ?>Assets/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-success">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                   <img src="img/gallery/LogotipoEmbajada.jpg" class="img-fluid rounded" width="500">
-
                         <img src="img/LogotipoEmbajada.jpg" alt="ADMINISTRACION" width="200"> 
                               </div>
                                <div class="card-body">
                                    <div class="alert alert-danger d-none" role="alert" id="alerta">
                                    </div>
                                    <form id="frmLogin" onsubmit="frmLogin(event);">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required/>
                                            <label for="usuario">Usuario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" required/>
                                            <label for="clave">Contraseña</label>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn bg-info btn-lg" type="submit">INGRESAR</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; General Concept 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/scripts.js"></script>
    <script>
        const base_url = '<?php echo base_url; ?>';
    </script>
    <script src="<?php echo base_url; ?>Assets/js/login.js"></script>
</body>

</html>