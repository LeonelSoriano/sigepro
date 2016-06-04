<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 10/05/16
 * Time: 3:38
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--ENCABEZADO DE CADA PAGINA-->
<ol class="breadcrumb">
    <li class=""><a>System</a></li>
    <li class=""><a>Inicio</a></li>
    <li class=""><a>Proyectos</a></li>
    <li class=""><a>Usuario</a></li>
    <li class="active"><a>Perfil de Usuario</a></li>
</ol>
<div class="page-heading">
    <h1><i class="fa fa-user"></i> Perfil de <b>Usuario</b></h1>

    <div class="btn-group btnOnResponsive pullRight mr2p">
        <button type="button" class="btn btn-system dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-navicon"></i> Opciones <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">

            <li><a href="javascript:void(0)" id="update-profile"><i class="icon-refresh cgrey"></i> &nbsp;Modificar
                    Perfil </a></li>

            <li><a href="usuariosdelete.php?codigo=1&usuario=leonel"><i class="icon-trash cgrey"></i> &nbsp;Eliminar
                    Usuario</a></li>
        </ul>
    </div>

    <a href="usuarioslist.php" class="btnOnResponsiveLeft btn btn-default-alt pullRight mr2p" style="color:#76858D;"><i
            class="icon-arrow-left"></i> Volver al Listado</a>
</div>
<div class="container-fluid">
    <!--ENCABEZADO DE CADA PAGINA FIN-->
    <!--..:::::::::::::::::::::..-->


    <div class="panel panel-sky">
        <div class="panel-heading" style="background-color: #008084;">
            <h2>Formulario de Informaci&oacute;n</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form>
                    <table class="table">
                        <tr>
                            <td class="ewTableHeader"><span> Fotografía</span></td>
                            <td><span>

                    <img class="imgUserProfile" src="<?php echo(base_url(  "/uploads/". $img)); ?>" align="not found"> </a>
</span></td>
                        </tr>

                        <tr>
                            <td class="ewTableHeader">
                                <span>Nombre</span>
                            </td>
                            <td>
                                <span><?php echo($name); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Apellido</span></td>
                            <td>
                                <span><?php echo($surname); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Télefono</span></td>
                            <td><span><?php echo($phone); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Correo</span></td>
                            <td>
                                <span><?php echo($email); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Dirección</span></td>
                            <td>
                                <span><?php echo($addres); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Empresa</span></td>
                            <td>
                                <span><?php echo($nameCompany); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Departamento</span></td>
                            <td>
                                <span><?php echo($departament); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Cargo</span></td>
                            <td>
                                <span><?php echo($jobTitle); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Tipo de Usuario</span></td>
                            <td>
                                <span><?php echo($userType); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="ewTableHeader"><span>Usuario</span></td>
                            <td>
                                <span><?php echo($userName); ?></span>
                            </td>
                        </tr>

                    </table>
                </form>
                <p>

            </div> <!-- .container-fluid -->


            <script>

                $( "#update-profile" ).on("click", function(){

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

            </script>