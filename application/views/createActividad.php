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
        <li class=""><a>Actividad</a></li>
        <li class="active"><a>Nueva</a></li>
    </ol>
    <div class="page-heading">
        <h1><i class="icon-plus"></i> Agregar Nuevo <b>Actividad</b></h1>

        <a href="proyectoslist.php" class="btnOnResponsiveLeft btn btn-default-alt pullRight mr2p"
           style="margin-left: 5px">
            <i class="icon-arrow-left"></i> Atras
        </a>
        
        <input type="button" class="pullRight btn btn-success" name="btnAction" id="btnAction" value="Buscar"
               style="margin-left: 5px">

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

                    <form onsubmit="return testSelects();" name="fproyectosadd" id="fproyectosadd" action="Dashboard/createActividad" method="post">

                        <?php if (isset($proyectActive) ): ?>
                            <?php echo($idHidden); ?>
                        <?php endif; ?>

                        <table class="table">
                            <tr>
                                <td class="ewTableHeader"><span>Descripción<span class='ewmsg'>&nbsp;*</span></span>
                                </td>
                                <td>
                                    <?php if (isset($proyectActive) ): ?>
                                        <?php echo($inputName);?>
                                    <?php else: ?>
                                        <textarea cols="0" rows="0" id="descripcion" name="descripcion"></textarea>
                                    <?php endif; ?>                                   </td>
                            </tr>
                            <tr>
                                <td class="ewTableHeader"><span>Alias</span></td>
                                <td>
                                    <?php if (isset($proyectActive) ): ?>
                                        <?php echo($inputAlias);?>
                                    <?php else: ?>
                                        <input type="text" name="alias" id="x_alias" size="30" maxlength="255" value="">
                                    <?php endif; ?>                                   </td>
                            </tr>

                            <tr>
                                <td class="ewTableHeader">Responsables&nbsp;*</span></span></td>
                                <td>
                                    <?php if (isset($proyectActive) ): ?>
                                        <?php echo($multiResponsable);?>
                                    <?php else: ?>
                                        <select name="select-responsable[]" id="select-responsable" multiple="multiple" style="width: 80%"></select>
                                    <?php endif; ?>

                                    <div class="pull-right icons">
                                        <input type="button" data-toggle="modal" data-target="#mimodal-responsable"
                                               class="btn btn-success" name="btnAction" id="btnAction" value="+">
                                        <input type="button" class="btn btn-success" id="responsable-menos"
                                               name="btnAction" id="btnAction" value="-">
                                    </div>
                                    <style>
                                        td .icons {
                                            width: 70px;
                                            text-align: center;
                                        }
                                    </style>
                                </td>
                            </tr>


                            <tr>
                                <td class="ewTableHeader">Observadores&nbsp;*</span></span></td>
                                <td>
                                    <?php if (isset($proyectActive) ): ?>
                                        <?php echo($multiObservador);?>
                                    <?php else: ?>
                                        <select name="select-observador[]" id="select-observador"  class="ilstSelected" multiple="multiple" style="width: 80%"></select>
                                    <?php endif; ?>

                                    <div class="pull-right icons">
                                        <input type="button" data-toggle="modal" data-target="#mimodal-observador"
                                               class="btn btn-success" name="btnAction" id="btnAction" value="+">
                                        <input type="button" id="observador-menos" class="btn btn-success"
                                               name="btnAction" id="btnAction" value="-">
                                    </div>
                                    <style>
                                        td .icons {
                                            width: 70px;
                                            text-align: center;
                                        }
                                    </style>
                                </td>
                            </tr>


                            <tr>
                                <td class="ewTableHeader">Fecha entrega&nbsp;*</span></span></td>
                                <td>

                                    <?php if (isset($proyectActive) ): ?>
                                        <input style="width:  97% !important" type="text" name="fecha_entrega"
                                               id="fecha_entregajs" value="<?php echo($fechaEntrega); ?>">&nbsp;<i class="icon-calendar"></i>
                                    <?php else: ?>
                                        <input style="width:  97% !important" type="text" name="fecha_entrega"
                                               id="fecha_entregajs" value="">&nbsp;<i class="icon-calendar"></i>
                                    <?php endif; ?>

                                </td>
                            </tr>

                            <tr>
                                <td class="ewTableHeader">Hora Entrega&nbsp;*</span></span></td>
                                <td>

                                    <?php if (isset($proyectActive) ): ?>
                                        <input style="width:  97% !important" type="text" name="hoursend" id="hoursendjs"
                                               value="<?php echo($horaEntrega); ?>">&nbsp;<i class="icon-clock"></i>
                                    <?php else: ?>
                                        <input style="width:  97% !important" type="text" name="hoursend" id="hoursendjs"
                                               value="">&nbsp;<i class="icon-clock"></i>
                                    <?php endif; ?>

                                </td>
                            </tr>


                            <tr>
                                <td class="ewTableHeader">Estados</span></span></td>
                                <td>
                                    <?php echo($inputStados); ?>

                                </td>
                            </tr>


                        </table>
                        <!-- Modal -->
                        <div class="modal" id="mimodal-responsable" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content" style="width: 800px">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <!--                                        <h4 class="modal-title">Modal Header</h4>-->
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel panel-sky">
                                            <div class="panel-heading" style="background-color: #008084;">
                                                <h2>Formulario de Registro</h2>
                                            </div>
                                            <div class="panel-body">

                                                <table class="table">
                                                    <tr>
                                                        <td class="ewTableHeader" style="width: 30%">Agregar
                                                            Responsables&nbsp;*</span></span></td>
                                                        <td>
                                                            <?php echo($select_responsable_dialog); ?>
                                                        </td>
                                                    </tr>

                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-success" name="btnAction"
                                               id="btnActionDialogResponsable" value="Guardar">
                                        <input type="button" data-dismiss="modal" class="btn btn-success"
                                               name="btnAction" id="btnAction" value="Cerrar">

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal" id="mimodal-observador" role="dialog">
                            <div class="modal-dialog" style="width: 800px">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    </div>
                                    <div class="modal-body">
                                        <div class="panel panel-sky">
                                            <div class="panel-heading" style="background-color: #008084;">
                                                <h2>Formulario de Registro</h2>
                                            </div>
                                            <div class="panel-body">

                                                <table class="table">
                                                    <tr>
                                                        <td class="ewTableHeader" style="width: 30%">Agregar Observador&nbsp;*</span></span></td>
                                                        <td>
                                                            <?php echo($select_observador_dialog); ?>
                                                        </td>
                                                    </tr>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" id="btnActionDialogObservador" class="btn btn-success"
                                               name="btnAction" id="btnAction" value="Guardar">
                                        <input type="button" data-dismiss="modal" class="btn btn-success"
                                               name="btnAction" id="btnAction" value="Cerrar">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <p>
                            <input type="submit" class="btn btn-success" name="btnAction" id="btnAction"
                                   value="Guardar">
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


<script type="text/javascript">

    $('#fecha_entregajs').datepicker({
        "format": "yyyy-mm-dd",
        'startView': 0,
        showTodayButton: true,
        autoclose: true,
    });


    $('#hoursendjs').datetimepicker({
        format: 'HH:ii p',
        autoclose: true,
        // todayHighlight: true,
        showMeridian: true,
        startView: 1,
        maxView: 1,
        pickDate: false
    }).on("show", function () {
        $(".table-condensed th").text("");
    });


    $('#responsable-menos').on("click", function () {

        var selectedResponsable = $("#select-responsable").val();

        if (selectedResponsable == null) {
            swal("Debes Seleccionar Almenos uno");
        } else {

            swal({
                    title: "Estas seguro?",
                    text: " De eliminar Responsables del projecto",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si Estoy seguro",
                    cancelButtonText: "No!",
                    closeOnConfirm: false
                },
                function () {
                    for (var i = 0; i < selectedResponsable.length; i++) {
                        $("#select-responsable option[value='" + selectedResponsable[i] + "']").remove();

                    }
                    swal("Los datos seran guardados con el boton de guardado", "success");
                });
        }

    });


    $('#observador-menos').on("click", function () {

        var selectedResponsable = $("#select-observador").val();

        if (selectedResponsable == null) {
            swal("Debes Seleccionar Almenos uno");
        } else {

            swal({
                    title: "Estas seguro?",
                    text: " De eliminar Responsables del projecto",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si Estoy seguro",
                    cancelButtonText: "No!",
                    closeOnConfirm: false
                },
                function () {
                    for (var i = 0; i < selectedResponsable.length; i++) {
                        $("#select-observador option[value='" + selectedResponsable[i] + "']").remove();
                    }
                    swal("Los datos seran guardados con el boton de guardado", "success");

                });
        }

    });

    $('#btnActionDialogResponsable').on("click", function () {

        var selectedResponsable = $("#select-responsable option").map(function () {
            return this.value
        }).get();
        var selectResponsableDialog = $("#select-responsable-dialog").val();


        if (selectedResponsable.length == 0) {

            for (var i = 0; i < selectResponsableDialog.length; i++) {
                $('#select-responsable')
                    .append($("<option></option>")
                        .attr("value", selectResponsableDialog[i])
                        .text($("#select-responsable-dialog option[value='" + selectResponsableDialog[i] + "']").text()));
            }
            $('.modal').modal('hide');

        } else {

            for (var i = 0; i < selectResponsableDialog.length; i++) {


                for (var j = 0; j < selectedResponsable.length; j++) {

                    if (selectResponsableDialog[i] == selectedResponsable[j]) {

                        j = selectedResponsable.length;
                    } else if (j == selectedResponsable.length - 1) {

                        $('#select-responsable')
                            .append($("<option></option>")
                                .attr("value", selectResponsableDialog[i])
                                .text($("#select-responsable-dialog option[value='" + selectResponsableDialog[i] + "']").text()));

                        $('.modal').modal('hide');
                    }

                }
            }

        }

    });


    $('#btnActionDialogObservador').on("click", function () {

        var selectedResponsable = $("#select-observador option").map(function () {
            return this.value
        }).get();

        var selectResponsableDialog = $("#select-observador-dialog").val();


        if (selectedResponsable.length == 0) {

            for (var i = 0; i < selectResponsableDialog.length; i++) {

                $('#select-observador')
                    .append($("<option></option>")
                        .attr("value", selectResponsableDialog[i])
                        .text($("#select-observador-dialog option[value='" + selectResponsableDialog[i] + "']").text()));
            }
            $('.modal').modal('hide');
        } else {
            for (var i = 0; i < selectResponsableDialog.length; i++) {

                for (var j = 0; j < selectedResponsable.length; j++) {

                    if (selectResponsableDialog[i] == selectedResponsable[j]) {

                        j = selectedResponsable.length;
                    } else if (j == selectedResponsable.length - 1) {

                        $('#select-observador')
                            .append($("<option></option>")
                                .attr("value", selectResponsableDialog[i])
                                .text($("#select-observador-dialog option[value='" + selectResponsableDialog[i] + "']").text()));

                        $('.modal').modal('hide');
                    }
                }
            }
        }

    });



    function testSelects() {
        $("#select-observador option").prop("selected", "selected");
        $("#select-responsable option").prop("selected", "selected");
    }

</script>
