<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 25/05/16
 * Time: 19:02
 */
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
    <h1><i class="fa fa-user"></i> Lista de Projectos</b></h1>

 
</div>
<div class="container-fluid">
    <!--ENCABEZADO DE CADA PAGINA FIN-->
    <!--..:::::::::::::::::::::..-->



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
            <th>Alias</th>
            <th>Fecha de Entrega</th>

            <th>Objetivos</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        </thead>

        <tbody>
<?php foreach ($tabla as $item => $index) {
    echo ("<tr>");
    echo ("<td>".$index->nombre."</td>");
    echo ("<td>".$index->alias."</td>");
    echo ("<td>".$index->fecha_entrega."</td>");
    echo ("
     <td><a href=\"javascript:void(0)\" id=\"detailAjax\"
             onclick='loadAjaxtListView(17,$index->codigo)'      class=\"btn btn-info-alt\"><i class=\"fa fa-folder-open-o\"></i> Objetivos</a>
    ");
    echo ("
    <td><a href=\"javascript:void(0)\" id=\"modificateAjax\" onclick='goUpdateProject($index->codigo)'
                   class=\"btn btn-info-alt\"><i class=\"fa fa-edit\"></i> Modificar</a></td>
    
    ");
    echo ("
    <td><a href=\"javascript:void(0)\" id=\"deleteAjax\" onclick='deleteProyect($index->codigo)'
                   class=\"btn btn-danger-alt\"><i class=\"icon-trash\"></i> Eliminar</a></td>
    
    ");

    echo ("</tr>");
        } ?>

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

    loadAjax("#newProject" ,7 );

    function goUpdateProject(idProject) {

            var parametros = { 
                view : 7,
                idProject : idProject
            };
            $.ajax({
                data:  parametros,
                url:   "/cladbox/dashboard/ajaxUserProfile/",
                type:  "post",
                beforeSend: function () {
                    // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
                },
                success:  function (response) {

                    $("#ajax-middle").html(response);
                }
            });
    }


    function deleteProyect(idProject) {
        var parametros = {
            deleteid : idProject
        };
        $.ajax({
            data:  parametros,
            url:   "/cladbox/dashboard/deleteInList/",
            type:  "post",
            beforeSend: function () {
                // $("#resultado").html("<img src="../../images/ajax-loader.gif" alt="Ajax Cargando" height="42" width="42">");
            },
            success:  function (response) {

                $("#ajax-middle").html(response);
            }
        });
    }



</script>