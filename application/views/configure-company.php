<?php
/**
 * User: leonel
 * Date: 03/06/16
 * Time: 01:25
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!--ENCABEZADO DE CADA PAGINA-->
<!--..:::::::::::::::::::::..-->


<script ></script>

<ol class="breadcrumb">
    <li class=""><a>Controles</a></li>
    <li class=""><a>Datos Maestros</a></li>
    <li class=""><a>Empresa</a></li>
</ol>
<div class="page-heading">
    <h1><i class="fa fa-user"></i> Empresa</b></h1>

 
</div>
<div class="container-fluid">


    <h1>Crear Empresa</h1>
    
        <div class="panel panel-sky">
            <div class="panel-heading" style="background-color: #008084;">
                <h2>Formulario de Registro</h2>
            </div>
            <div class="panel-body">
                <div class="table-responsive">

                    <form onsubmit="return testSelects();" name="fproyectosadd" id="fproyectosadd" action="Dashboard/addProject" method="post"
                          >


                        <?php if (isset($proyectActive) ): ?>
                            <?php echo($idHidden); ?>
                        <?php endif; ?>
                        

                        <table class="table">
              
                            <tr style="margin-top:300px !important">
                                <td class="ewTableHeader"><span>Alias</span></td>
                                <td>
                                    <input type="text"
                                  
                                    name="alias" id="x_alias" size="30" maxlength="255" value="" />
                                </td>
                            </tr>


                     



                        </table>
 
                        <p>
                            <input type="submit" class="btn btn-success  pull-right" name="btnAction" id="btnAction"
                                   value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    
    <?php echo($companyName); ?>
    


    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Alias</th>
            <th>Fecha de Entrega</th>

            <th>Objetivos</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        </thead>

        <tbody>


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

<div style="margin-top: 20px">
    <input type="button" class="pullRight btn btn-success" name="btnAction" id="newProject" value="Nuevo Projecto"/>
</div>

<!-- Load site level scripts -->
<link type="text/css" href="<?= base_url('/assets/css/jquery.dataTables.css') ?>" rel="stylesheet">
<script type="text/javascript" src="<?= base_url('/assets/js/jquery.dataTables.min.js') ?>"></script>
<script>
    $('#example').DataTable();

    // loadAjax("#newProject" ,7 );

    // function goUpdateProject(idProject) {

    //         var parametros = { 
    //             view : 7,
    //             idProject : idProject
    //         };
    //         $.ajax({
    //             data:  parametros,
    //             url:   "./dashboard/ajaxUserProfile/",
    //             type:  "post",
    //             beforeSend: function () {
    //                 // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
    //             },
    //             success:  function (response) {

    //                 $("#ajax-middle").html(response);
    //             }
    //         });
    // }


    // function deleteProyect(idProject) {
    //     var parametros = {
    //         deleteid : idProject
    //     };
    //     $.ajax({
    //         data:  parametros,
    //         url:   "./dashboard/deleteInList/",
    //         type:  "post",
    //         beforeSend: function () {
    //             // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
    //         },
    //         success:  function (response) {

    //             $("#ajax-middle").html(response);
    //         }
    //     });
    // }



</script>
