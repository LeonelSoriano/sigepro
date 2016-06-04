<?php
/**
 * User: leonel
 * Date: 17/05/16
 * Time: 0:27
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!--ENCABEZADO DE CADA PAGINA-->
<!--..:::::::::::::::::::::..-->


<script ></script>

<ol class="breadcrumb">
    <li class=""><a>System</a></li>
    <li class=""><a>Inicio</a></li>
    <li class=""><a>Usuarios</a></li>
</ol>
<div class="page-heading">
    <h1><i class="fa fa-user"></i> Usuarios del Sistema</b></h1>

    <?php  if ($_SESSION['user.typeUser'] === '1'): ?>
    <a href="javascript:void(0)" id="addUser" class="btnOnResponsive btn btn-success pullRight mr2p">
        <i class="icon-plus"></i>  Nuevo Participante
    </a>
    <?php endif; ?>
    <a href="proyectoslist.php" style="color:#455A64" class="btnOnResponsiveLeft btn btn-default-alt pullRight mr2p"><i
            class="icon-arrow-left"></i> Volver a las Proyectos</a>
</div>
<div class="container-fluid">
    <!--ENCABEZADO DE CADA PAGINA FIN-->
    <!--..:::::::::::::::::::::..-->

    <p>TABLA: Usuarios</p>

    <table class="ewBasicSearch">
        <tr>
            <td>
			<a href="usuariossrch.php" class="btn btn-system btn-white-alt"><i class="icon-magnifier-add"></i> Búsqueda avanzada</a>
	        </td>
        </tr>
        <tr class="tohide">
            <td><span class="phpmaker"><input type="radio" name="psearchtype" value=""
                                              checked>Frase exacta&nbsp;&nbsp;<input type="radio" name="psearchtype"
                                                                                     value="AND">Todas las palabras&nbsp;&nbsp;
             <input type="radio" name="psearchtype" value="OR">Cualquier palabra</span></td>
        </tr>
    </table>
    <p>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Empresa</th>
            <th>Departamento</th>
            <th>Cargo</th>
            <th>Detalle</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        </thead>

        <tbody>

        <tr>
            <td><?php echo($name); ?></td>
            <td><?php echo($surName); ?></td>
            <td><?php echo($phone); ?></td>
            <td><?php echo($email); ?></td>
            <td><?php echo($companyName); ?></td>
            <td><?php echo($departamentName); ?></td>
            <td><?php echo($positionName); ?></td>
            <td  data-toggle="tooltip" title="Actualizar"><div class="span12" style="text-align:center"><a href="javascript:void(0)" id="detailAjax"
                                          class="btn btn-info-alt"><i class="fa fa-folder-open-o"></i> </div></a>
            </td>

            <td data-toggle="tooltip" title="Modificar"><div class="span12" style="text-align:center"><a href="javascript:void(0)" id="modificateAjax"
  class="btn btn-info-alt "><i class="fa fa-edit"></i> </a></div></td>

            <td  data-toggle="tooltip" title="Eliminar"> <div class="span12" style="text-align:center"><a   href="javascript:void(0)" id="deleteAjax"
                                           class="btn btn-danger-alt "><i   class="icon-trash "></i></a></div></td>
        </tr>
        </tbody>
    </table>



</div> <!-- .container-fluid -->
</div> <!-- #page-content -->
</div>
<footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;"> &copy; 2016 ISM Center</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                class="fa fa-arrow-circle-up"></i></button>
    </div>
</footer>
</div>
</div>
</div>


<!-- Load site level scripts -->
<link type="text/css" href="<?= base_url('/assets/css/jquery.dataTables.css') ?>" rel="stylesheet">
<script type="text/javascript" src="<?= base_url('/assets/js/jquery.dataTables.min.js') ?>"></script>     						
<script>
        $('#example').DataTable();


        $( "#modificateAjax" ).on("click", function(){

            var parametros = { view : 3 };
            $.ajax({
                data:  parametros,
                url:   "./dashboard/ajaxUserProfile/",
                type:  "post",
                beforeSend: function () {
                    // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
                },
                success:  function (response) {

                    $("#ajax-middle").html(response);
                }
            });


        });

        $( "#detailAjax" ).on("click", function(){
            var parametros = { view : 2 };
            $.ajax({
                data:  parametros,
                url:   "./dashboard/ajaxUserProfile/",
                type:  "post",
                beforeSend: function () {
                    // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
                },
                success:  function (response) {

                    $("#ajax-middle").html(response);
                }
            });

        });


        $( "#addUser" ).on("click", function(){

            var parametros = { view : 6 };
            $.ajax({
                data:  parametros,
                url:   "./dashboard/ajaxUserProfile/",
                type:  "post",
                beforeSend: function () {
                    // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
                },
                success:  function (response) {

                    $("#ajax-middle").html(response);
                }
            });

        });


        $( "#deleteAjax" ).on("click", function(){

            var parametros = { view : 5 };
            $.ajax({
                data:  parametros,
                url:   "./dashboard/ajaxUserProfile/",
                type:  "post",
                beforeSend: function () {
                    // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
                },
                success:  function (response) {

                    $("#ajax-middle").html(response);
                }
            });

        });

</script>