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
        <script type="text/javascript">
            <!--
            EW_LookupFn = "ewlookup.php"; // ewlookup file name
            EW_AddOptFn = "ewaddopt.php"; // ewaddopt.php file name

            //-->
        </script>
        <script type="text/javascript" src="ewp.js"></script>


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

            <a href="usuarioslist.php" class="btnOnResponsiveLeft btn btn-default-alt pullRight mr2p">
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

                        <form name="fusuariosadd" id="fusuariosadd" action="usuariosadd.php" method="post"
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
                                        <input type="text" name="x_correo" id="x_correo" size="30" maxlength="255" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Dirección</span></td>
                                    <td>
                                        <textarea cols="35" rows="4" id="x_direccion" name="x_direccion"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Empresa</span></td>
                                    <td>
                                        <select id='x_codigo_empresa' name='x_codigo_empresa'><option value=''>Por favor Seleccione</option><option value="1">Mantiq</option></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Departamento</span></td>
                                    <td>
                                        <select id='x_codigo_departamento' name='x_codigo_departamento'><option value=''>Por favor Seleccione</option><option
                                                value="1">TecnologÃ­a de la informaciÃ³n</option></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Cargo</span></td>
                                    <td>
                                        <select id='x_cargo' name='x_cargo'><option value=''>Por favor Seleccione</option><option value="1">Presidente</option><option
                                                value="2">Programador</option><option value="3">DiseÃƒÂ±ador</option><option value="4">Analista</option><option
                                                value="5">Gerente</option></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Fotografía</span></td>
                                    <td>
                                        <input type="file" id="x_imagen" name="x_imagen" size="30">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Tipo de Usuario<span
                                                class='ewmsg'>&nbsp;*</span></span></td>
                                    <td>
                                        <select id='x_tipo' name='x_tipo'><option value=''>Por favor Seleccione</option><option
                                                value="-1">Administrator</option><option value="0">Anonymous</option></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ewTableHeader"><span>Usuario<span class='ewmsg'>&nbsp;*</span></span>
                                        </td>
                                    <td>
                                        <input type="text" name="x_usuario" id="x_usuario" size="30" maxlength="255" value="">
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

