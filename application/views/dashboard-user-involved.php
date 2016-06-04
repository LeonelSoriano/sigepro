<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 19/05/16
 * Time: 20:46
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 17/05/16
 * Time: 21:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="page-content">

    <!--..:::::::::::::::::::::..-->
    <!--ENCABEZADO DE CADA PAGINA-->
    <ol class="breadcrumb">
        <li class=""><a>System</a></li>
        <li class=""><a>Inicio</a></li>
        <li class=""><a>Proyectos</a></li>
        <li class="active"><a>Nuevo</a></li>
    </ol>
    <div class="page-heading">
        <h1><i class="icon-plus"></i> Agregar Nuevo <b>Proyectos</b></h1>

        <a href="proyectoslist.php" class="btnOnResponsiveLeft btn btn-default-alt pullRight mr2p">
            <i class="icon-arrow-left"></i> Volver al Listado
        </a>
    </div>
    <div class="container-fluid">
        <!--ENCABEZADO DE CADA PAGINA FIN-->
        <!--..:::::::::::::::::::::..-->

        <div class="panel panel-sky">
            <div class="panel-heading" style="background-color: #008084;">
                <h2>Formulario de Registro</h2>
            </div>
            <div class="panel-body">
                <div class="table-responsive">

                        <table class="table">
                            <tr>
                                <td class="ewTableHeader"><span>Tipo de Usuario<span class='ewmsg'>&nbsp;*</span></span></td>
                                <td>
                                <?php echo($typeUserInput); ?>
                                </td>

                                <td class="ewTableHeader"><span>Usuarios<span class='ewmsg'>&nbsp;*</span></span></td>
                                <td>
                                    <?php echo($userCombo); ?>
                                </td>
                            </tr>

                        </table>

                            <input onclick="addAjax()" type="button" style="float: right" class="btn btn-success" name="btnAction" id="btnAction" value="Agregar Registro">

                    <script>
                            function addAjax() {

                                if($('#typeuser').val() != -1 || $('#userCombo').val() != -1  ){

                                    var parametros = {

                                        in_typeUsert : $('#typeuser').val(),
                                    };
                                    $.ajax({
                                        data:  parametros,
                                        url:   "./dashboard/loadTableProject/",
                                        type:  "get",
                                        beforeSend: function () {
                                            // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
                                        },
                                        success:  function (response) {
alert("jpñaa");
                                            var $typeUser = $('#typeuser');
                                            $typeUser.val($typeUser.children('option:first').val());
                                            var $userCombo = $('#userCombo');
                                            $userCombo.val($userCombo.children('option:first').val());

                                            $("#tableProject").html(response);

                                            sweetAlert(" Datos Guardados Correctamente ", "Info");
                                        }
                                    });

                                }else{
                                    sweetAlert(" Los dos Campos son Requeridos", "Error");

                                }

                            }
                        </script>

                    <link type="text/css" href="<?= base_url('/assets/css/jquery.dataTables.css') ?>" rel="stylesheet">
                    <script type="text/javascript" src="<?= base_url('/assets/js/jquery.dataTables.min.js') ?>"></script>
                    <div id="tableProject" style="margin-top: 75px">
                        <table id="list"   class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Empresa</th>
                                <th>Departamento</th>
                                <th>Cargo</th>
                                <th>Foto</th>
                                <th>Detalle</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Empresa</th>
                                <th>Departamento</th>
                                <th>Cargo</th>
                                <th>Foto</th>
                                <th>Detalle</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                            </tfoot>
                            <tbody>


                            <tr>
                                <?php if (count($table) != 0): ?>

                                    <td><?php echo($name); ?></td>
                                <td><?php echo($surName); ?></td>
                                <td><?php echo($phone); ?></td>
                                <td><?php echo($email); ?></td>
                                <td><?php echo($companyName); ?></td>
                                <td><?php echo($departamentName); ?></td>
                                <td><?php echo($positionName); ?></td>
                                <td><?php echo($img); ?></td>
                                <td><a href="javascript:void(0)" id="detailAjax"
                                       class="btn btn-info-alt"><i class="fa fa-folder-open-o"></i> Detalles</a>
                                </td>

                                <td><a href="javascript:void(0)" id="modificateAjax"
                                       class="btn btn-info-alt"><i class="fa fa-edit"></i> Modificar</a></td>

                                <td><a href="javascript:void(0)" id="deleteAjax"
                                       class="btn btn-danger-alt"><i class="icon-trash"></i> Eliminar</a></td>

                                <?php endif; ?>
                            </tr>

                            </tbody>

                        </table>
                        
                    </div>




                    <script>
//                        sweetAlert("Oops, Lo Sentimos... Usuario no Existe ", "error");
                    </script>


                </div>
            </div>
        </div>

    </div> <!-- .container-fluid -->
</div> <!-- #page-content -->
</div>
<footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;"> &copy; 2016 ISM Center</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-circle-up"></i></button>
    </div>
</footer>
</div>
<script>

    $('#list').DataTable();

</script>