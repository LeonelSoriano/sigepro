<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 17/05/16
 * Time: 2:48
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--ENCABEZADO DE CADA PAGINA-->
<ol class="breadcrumb">
    <li class=""><a>System</a></li>
    <li class=""><a>Inicio</a></li>
    <li class=""><a>Usuario</a></li>
    <li class="active"><a>Eliminar</a></li>
</ol>
<div class="page-heading">
    <h1><i class="icon-trash"></i> Eliminar <b>Usuario</b></h1>

    <a href="usuarioslist.php" class="clearbResp btnOnResponsiveLeft btn btn-default-alt pullRight mr2p">
        <i class="icon-arrow-left"></i> Volver al Listado
    </a>
</div>
<div class="container-fluid">
    <!--ENCABEZADO DE CADA PAGINA FIN-->
    <!--..:::::::::::::::::::::..-->

    <div class="panel panel-sky">
        <div class="panel-heading" style="background-color: #008084;">
            <h2>Formulario a Eliminar</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">

                <form action="usuariosdelete.php" method="post">
                    <p>
                        <input type="hidden" name="a_delete" value="D">
                        <input type="hidden" name="key_d" value="1,leonel">
                    <table class="table">
                        <tr class="ewTableHeader">
                            <td valign="top"><span>Nombre</span></td>
                            <td valign="top"><span>Apellido</span></td>
                            <td valign="top"><span>Télefono</span></td>
                            <td valign="top"><span>Correo</span></td>
                            <td valign="top"><span>Empresa</span></td>
                            <td valign="top"><span>Departamento</span></td>
                            <td valign="top"><span>Cargo</span></td>
                            <td valign="top"><span>Fotografía</span></td>
                        </tr>
                        <tr class="ewTableAltRow">
                            <td>
                            <?php echo($name); ?>
                            </td>

                            <td>
                                <?php echo($surName); ?>
                            </td>

                            <td>
                                <?php echo($phone); ?>
                            </td>

                            <td>
                                <?php echo($email); ?>
                            </td>

                            <td>
                                <?php echo($companyName); ?>
                            </td>

                            <td>
                                <?php echo($departamentName); ?>
                            </td>


                            <td>
                                <?php echo($positionName); ?>
                            </td>

                            <td>
                                <a href="<?= base_url('/uploads/'. $img) ?>"><?php echo($img); ?></a>
                            </td>

                        </tr>
                    </table>
                    <p>
            </div>

            <?php if ($_SESSION['user.typeUser'] === '1'): ?>
                <input id="buttonDelete" type="button" name="Action" class="btn btn-danger btnDelete" value="Confirmar Borrado" />

                <?php else: ?>
                <div class="tooltip-wrapper" data-title="No tienes los permisos necesarios">
                    <input type="button"  name="Action" class="btn btn-danger btnDelete" value="Confirmar Borrado"  disabled/>
                </div>
            <?php endif; ?>
            <script>
                $('.tooltip-wrapper').tooltip({position: "bottom"});
            </script>
            <style>
                .tooltip-wrapper {
                    display: inline-block; /* display: block works as well */
                }

                .tooltip-wrapper .btn[disabled] {
                    pointer-events: none;
                }

                .tooltip-wrapper.disabled {
                    cursor: not-allowed;
                }
            </style>
            </form>
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
</div>
</div>


<script>

    $("#buttonDelete").on("click", function(){

        var parametros = {  };
        $.ajax({
            data:  parametros,
            url:   "/sigepro/dashboard/deleteUser/",
            type:  "post",
            beforeSend: function () {

                // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
            },
            success:  function (response) {
              
                window.location.href = 'login';
            }
        });

    });



</script>