<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 17/05/16
 * Time: 5:11
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="static-content">
    <div class="page-content">
        <!--<ol class="breadcrumb">
            <li class=""><a>System</a></li>
            <li class=""><a>Inicio</a></li>
            <li class="active"><a>Proyectos</a></li>
        </ol>
        <div class="page-heading">
            <h1><i class="fa fa-folder-open-o"></i> Listado de <b>Proyectos</b></h1>
            <a href="proyectos_add.html" class="btnOnResponsive btn btn-success pullRight mr2p">
                <i class="icon-plus"></i> Nuevo Proyecto
            </a>
        </div>
        <div class="container-fluid">-->


        <!--..:::::::::::::::::::::..-->
        <!--ENCABEZADO DE CADA PAGINA-->
        <ol class="breadcrumb">
            <li class=""><a>System</a></li>
            <li class=""><a>Inicio</a></li>
            <li class=""><a>Usuario</a></li>
            <li class="active"><a>Nuevo</a></li>
        </ol>
        <div class="page-heading">
            <h1><i class="icon-plus"></i> Agregar Nuevo <b>Usuario</b></h1>

            <a href="javascript:void(0)" id="returnList" class="btnOnResponsiveLeft btn btn-default-alt pullRight mr2p">
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

                        <form name="fusuariosadd" id="fusuariosadd" action="Dashboard/addUser" method="post"
                              enctype="multipart/form-data" >
                            <p>

                            <table class="table">
                                <tr>
                                    <td class="ewTableHeader"><span>Nombre<span class='ewmsg'>&nbsp;*</span></span></td>
                                    <td>
                                        <?php echo($userNameInput); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Apellido</span></td>
                                    <td>
                                        <?php echo($surNameInput); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Télefono</span></td>
                                    <td>
                                        <?php echo($phoneInput); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Correo</span></td>
                                    <td>
                                        <?php echo($emailInput); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Dirección</span></td>
                                    <td>
                                        <?php echo($addressInput); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ewTableHeader"><span>Cargo</span></td>
                                    <td>
                                        <?php echo($positionInput); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Fotografía</span></td>
                                    <td>
                                        <style>
                                            input[name="imagen"] {
                                                width: 600px;
                                            }
                                        </style>
                                        <input type="file" id="imagen" name="imagen"  style="width: 600px">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Tipo de Usuario<span
                                                class='ewmsg'>&nbsp;*</span></span></td>
                                    <td>
                                        <?php echo($typeUserInput); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Usuario<span class='ewmsg'>&nbsp;*</span></span>
                                        </td>
                                    <td>
                                        <input type="text" name="user" id="usuario" size="30" maxlength="255" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Contraseña<span class='ewmsg'>&nbsp;*</span></span>
                                    </td>
                                    <td>
                                        <input type="password" style="width: 100%" name="x_password" value="" size="30" maxlength="255">
                                    </td>
                                </tr>
                            </table>
                            <p>
                                <input type="submit" name="btnAction" id="btnAction" class="btn btn-success"
                                       value="Agregar Registro">
                        </form>
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
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                class="fa fa-arrow-circle-up"></i></button>
    </div>
</footer>
</div>
</div>

<script>
    $( "#returnList" ).on("click", function(){
        var parametros = { view : 4 };
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