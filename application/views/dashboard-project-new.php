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

        <a href="proyectoslist.php" class="btnOnResponsiveLeft btn btn-default-alt pullRight mr2p" style="margin-left: 5px">
            <i class="icon-arrow-left"></i> Buscar Projecto
        </a>


        <input type="button" class="pullRight btn btn-success" name="btnAction" id="btnAction" value="Buscar" style="margin-left: 5px">
        <input type="button" class="pullRight btn btn-success" name="btnAction" id="btnAction" value="Nuevo"  />

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

                    <form name="fproyectosadd" id="fproyectosadd" action="Dashboard/addProject" method="post" onSubmit="return EW_checkMyForm(this);">

                        <input type="hidden" name="a_add" value="A">


                        <table class="table">
                            <tr>
                                <td class="ewTableHeader"><span>Descripción<span class='ewmsg'>&nbsp;*</span></span></td>
                                <td>
                                    <textarea cols="0" rows="0" id="descripcion" name="descripcion"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="ewTableHeader"><span>Alias</span></td>
                                <td>
                                    <input type="text" name="alias" id="x_alias" size="30" maxlength="255" value="">
                                </td>
                            </tr>

                            <tr>
                                <td class="ewTableHeader"><span>Responables</span></td>
                                <td>
                                    <input type="text" name="alias" id="x_alias" size="30" maxlength="255" value="">
                                </td>
                            </tr>

                            <tr >
                                <td class="ewTableHeader">Responsables&nbsp;*</span></span></td>
                                <td>
                                            <select id="select-responsable" multiple style="width: 80%">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="opel">Opel</option>
                                                <option value="audi">Audi</option>
                                            </select>

                                    <div class="pull-right icons">
                                        <input type="button" data-toggle="modal" data-target="#mimodal-responsable" class="btn btn-success" name="btnAction" id="btnAction" value="+">
                                        <input type="button" class="btn btn-success" id="responsable-menos" name="btnAction" id="btnAction" value="-">
                                    </div>
                                    <style>
                                        td .icons{
                                            width:70px;
                                            text-align:center;
                                        }
                                    </style>
                                </td>
                            </tr>


                            <tr >
                                <td class="ewTableHeader">Observadores&nbsp;*</span></span></td>
                                <td>
                                    <select  id="select-observador" multiple style="width: 80%">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>

                                    <div class="pull-right icons">
                                        <input type="button" data-toggle="modal" data-target="#mimodal-observador" class="btn btn-success" name="btnAction" id="btnAction" value="+">
                                        <input type="button" id="observador-menos" class="btn btn-success" name="btnAction" id="btnAction" value="-">
                                    </div>
                                    <style>
                                        td .icons{
                                            width:70px;
                                            text-align:center;
                                        }
                                    </style>
                                </td>
                            </tr>



                            <tr >
                                <td class="ewTableHeader">Fecha Inicio&nbsp;*</span></span></td>
                                <td>
                                    <input style="width:  97% !important" type="text" name="fecha_inicio" id="fecha_iniciojs" value="">&nbsp;<i class="icon-calendar"></i>
                                </td>
                            </tr>


                            <tr >
                                <td class="ewTableHeader">Hora Inicio&nbsp;*</span></span></td>
                                <td>
                                    <input style="width:  97% !important" type="text" name="hourstart" id="hourstartjs" value="">&nbsp;<i class="icon-clock"></i>
                                </td>
                            </tr>


                            <tr >
                                <td class="ewTableHeader">Fecha entrega&nbsp;*</span></span></td>
                                <td>
                                    <input style="width:  97% !important" type="text" name="fecha_entrega" id="fecha_entregajs" value="">&nbsp;<i class="icon-calendar"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="ewTableHeader">Hora Entrega&nbsp;*</span></span></td>
                                <td>
                                    <input style="width:  97% !important" type="text" name="hoursend" id="hoursendjs" value="">&nbsp;<i class="icon-clock"></i>
                                </td>
                            </tr>


                            <tr >
                                <td class="ewTableHeader">Fecha entrega&nbsp;*</span></span></td>
                                <td>
                                    <input style="width:  97% !important" type="text" name="fecha_entrega" id="fecha_entregajs" value="">&nbsp;<i class="icon-calendar"></i>
                                </td>
                            </tr>

                            <tr>
                                <td class="ewTableHeader">Hora Entrega&nbsp;*</span></span></td>
                                <td>
                                    <input style="width:  97% !important" type="text" name="hoursend" id="hoursendjs" value="">&nbsp;<i class="icon-clock"></i>
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
                                                    <tr >
                                                        <td class="ewTableHeader" style="width: 30%">Agregar Responsables&nbsp;*</span></span></td>
                                                        <td>
                                                            <select id="select-responsable-dialog" style="width: 100%" multiple>
                                                                <option value="hola">hola</option>
                                                                <option value="saab">Saab</option>
                                                                <option value="opel">Opel</option>
                                                                <option value="audi">Audi</option>
                                                            </select>

                                                        </td>
                                                    </tr>

                                                  </table  >

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-success" name="btnAction" id="btnActionDialogResponsable" value="Guardar">
                                        <input type="button" data-dismiss="modal" class="btn btn-success" name="btnAction" id="btnAction" value="Cerrar">

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal" id="mimodal-observador" role="dialog" >
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
                                                    <tr >
                                                        <td class="ewTableHeader" style="width: 30%">Agregar Responsables&nbsp;*</span></span></td>
                                                        <td>
                                                            <select id="select-observador-dialog" style="width: 100%" multiple>
                                                                <option value="volvo">Volvo</option>
                                                                <option value="saab">Saab</option>
                                                                <option value="opel">Opel</option>
                                                                <option value="audi">Audi</option>
                                                            </select>

                                                        </td>
                                                    </tr>
                                                </table  >

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" id="btnActionDialogObservador" class="btn btn-success" name="btnAction" id="btnAction" value="Guardar">
                                        <input type="button" data-dismiss="modal" class="btn btn-success" name="btnAction" id="btnAction" value="Cerrar">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <p>
                            <input type="submit" class="btn btn-success" name="btnAction" id="btnAction" value="Guardar">
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
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-circle-up"></i></button>
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

    $('#fecha_iniciojs').datepicker({
        "format": "yyyy-mm-dd",
        'startView': 0,
        showTodayButton: true,
        autoclose: true,
    });

    $('#hourstartjs').datetimepicker({
        format: 'HH:ii p',
        autoclose: true,
        // todayHighlight: true,
        showMeridian: true,
        startView: 1,
        maxView: 1,
        pickDate: false
    }).on("show", function(){
        $(".table-condensed th").text("");
    });


    $('#hoursendjs').datetimepicker({
        format: 'HH:ii p',
        autoclose: true,
        // todayHighlight: true,
        showMeridian: true,
        startView: 1,
        maxView: 1,
        pickDate: false
    }).on("show", function(){
        $(".table-condensed th").text("");
    });


    $('#responsable-menos').on("click", function(){

            var selectedResponsable = $("#select-responsable").val();

            if(selectedResponsable == null){
                swal("Debes Seleccionar Almenos uno");
            }else{

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
                    function(){
                        for(var i=0;i < selectedResponsable.length;i++){
                            $("#select-responsable option[value='"+selectedResponsable[i]+"']").remove();

                        }
                        swal("Los datos seran guardados con el boton de guardado", "success");
                    });
            }

        });


    $('#observador-menos').on("click", function(){

        var selectedResponsable = $("#select-observador").val();

        if(selectedResponsable == null){
            swal("Debes Seleccionar Almenos uno");
        }else{

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
                function(){
                    for(var i=0;i < selectedResponsable.length;i++){
                        $("#select-observador option[value='"+selectedResponsable[i]+"']").remove();
                    }
                    swal("Los datos seran guardados con el boton de guardado", "success");

                });
        }

    });

    $('#btnActionDialogResponsable').on("click", function(){

        var selectedResponsable = $("#select-responsable option").map(function(){ return this.value }).get();
        var selectResponsableDialog = $("#select-responsable-dialog").val();

        for(var i=0;i < selectResponsableDialog.length;i++){


            for(var j=0;j < selectedResponsable.length;j++){

                if(selectResponsableDialog[i] == selectedResponsable[j] ){
                    console.log("1");
                    j = selectedResponsable.length;
                }else if(j == selectedResponsable.length -1){
                    console.log("2");
                        $('#select-responsable')
                            .append($("<option></option>")
                                .attr("value",selectResponsableDialog[i])
                                .text($("#select-responsable-dialog option[value='"+selectResponsableDialog[i]+"']").text()));
                }

            }

        }

    });


    $('#btnActionDialogResponsable').on("click", function(){

        var selectedResponsable = $("#select-observador option").map(function(){ return this.value }).get();
        var selectResponsableDialog = $("#select-observador-dialog").val();

        for(var i=0;i < selectResponsableDialog.length;i++){


            for(var j=0;j < selectedResponsable.length;j++){

                if(selectResponsableDialog[i] == selectedResponsable[j] ){
                    console.log("1");
                    j = selectedResponsable.length;
                }else if(j == selectedResponsable.length -1){
                    console.log("2");
                    $('#select-observador')
                        .append($("<option></option>")
                            .attr("value",selectResponsableDialog[i])
                            .text($("#select-observador-dialog option[value='"+selectResponsableDialog[i]+"']").text()));
                }

            }

        }

    });



</script>
