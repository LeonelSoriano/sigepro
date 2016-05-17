<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 11/05/16
 * Time: 21:01
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
    <div class="container-fluid">--><script type="text/javascript">
        <!--
        EW_LookupFn = "ewlookup.php"; // ewlookup file name
        EW_AddOptFn = "ewaddopt.php"; // ewaddopt.php file name

        //-->
    </script>
    <script type="text/javascript" src="ewp.js"></script>
    <script type="text/javascript">
        <!--
        EW_dateSep = "-"; // set date separator
        EW_UploadAllowedFileExt = "gif,jpg,jpeg,bmp,png,doc,xls,pdf,zip,rar,docx,pptx,xlsx"; // allowed upload file extension

        //-->
    </script>

    <script type="text/javascript">
        <!--
        var EW_DHTMLEditors = [];

        //-->
    </script>
    <p><span >Editar TABLA: Usuarios<br><br><a href="usuarioslist.php">Volver al listado</a></span></p>
    <?php echo form_open_multipart('/dashboard/updateUser','style="max-width: 65%"','name="fusuariosedit"','id="fusuariosedit"','method="post"','enctype="multipart/form-data"', 'onSubmit="return EW_checkMyForm(this);"') ;?>
        <p>

        <table class="ewTable">

            <tr>
                <td class="ewTableHeader"><span>Nombre<span class='ewmsg'>&nbsp;*</span></span></td>
                <td class="ewTableAltRow"><span id="cb_x_nombre">
<?php echo($userNameInput); ?>
</span></td>
            </tr>
            <tr>
                <td class="ewTableHeader"><span>Apellido</span></td>
                <td class="ewTableAltRow"><span id="cb_x_apellido">
            <?php echo($surNameInput); ?>
                    </span></td>
            </tr>
            <tr>
                <td class="ewTableHeader"><span>Télefono</span></td>
                <td class="ewTableAltRow">
                    <span id="cb_x_telefono">
                <?php echo($phoneInput); ?>
                </span></td>
            </tr>
            <tr>
                <td class="ewTableHeader"><span>Correo</span></td>
                <td class="ewTableAltRow"><span id="cb_x_correo">
                        <?php echo($emailInput); ?>
            </span></td>
            </tr>
            <tr>
                <td class="ewTableHeader"><span>Dirección</span></td>
                <td class="ewTableAltRow"><span id="cb_x_direccion">
                    <?php echo($addressInput); ?>
                </span></td>
            </tr>


            <tr>
                <td class="ewTableHeader"><span>Cargo</span></td>
                <td class="ewTableAltRow"><span id="cb_x_cargo">
                <?php echo($positionInput) ?>

            </tr>
            <tr>
                <td class="ewTableHeader"><span>Fotografía</span></td>
                <td class="ewTableAltRow"><span id="cb_x_imagen">
                    <input type="radio" name="a_x_imagen" value="1" checked>Mantener&nbsp;
                    <input type="radio" name="a_x_imagen" value="2">Remover&nbsp;
                    <input type="radio" name="a_x_imagen" value="3">Reemplazar<br>

                        <input type="file" id="x_imagen" name="x_imagen" size="30" >
</span></td>
            </tr>
            <tr>
                <td class="ewTableHeader"><span>Tipo de Usuario<span class='ewmsg'>&nbsp;*</span></span></td>
                <td class="ewTableAltRow"><span id="cb_x_tipo">
                <?php echo($typeUserInput); ?>
                    </span></td>
            </tr>
            <tr>
                <td class="ewTableHeader"><span>Contraseña<span class='ewmsg'>&nbsp;*</span></span></td>
                <td class="ewTableAltRow"><span id="cb_x_password">
                <?php echo($passwordInput); ?>
                </span></td>
            </tr>
        </table>
        <p>
            <input type="submit" name="btnAction" id="btnAction" value="EDITAR">
        <?php echo form_close();?>


</div> <!-- .container-fluid -->



<script>

    $( "#update-profile" ).on("click", function(){

        var parametros = { view : 3 };
        $.ajax({
           
            url:   "/sigepro/dashboard/ajaxUserProfile/",
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