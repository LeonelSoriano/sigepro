<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 18/05/16
 * Time: 23:56
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
                var firstrowoffset = 1; // first data row start at
                var tablename = 'ewlistmain'; // table name
                var lastrowoffset = 0; // footer row
                var usecss = true; // use css
                var rowclass = 'ewTableRow'; // row class
                var rowaltclass = 'ewTableAltRow'; // row alternate class
                var rowmoverclass = 'ewTableHighlightRow'; // row mouse over class
                var rowselectedclass = 'ewTableSelectRow'; // row selected class
                var roweditclass = 'ewTableEditRow'; // row edit class
                var rowcolor = '#FFFFFF'; // row color
                var rowaltcolor = '#F5F5F5'; // row alternate color
                var rowmovercolor = '#FFCCFF'; // row mouse over color
                var rowselectedcolor = '#CCFFFF'; // row selected color
                var roweditcolor = '#FFFF99'; // row edit color

                //-->
            </script>
            <script type="text/javascript">
                <!--
                var EW_DHTMLEditors = [];

                //-->
            </script>
            <!--ENCABEZADO DE CADA PAGINA-->
            <!--..:::::::::::::::::::::..-->
            <ol class="breadcrumb">
                <li class=""><a>System</a></li>
                <li class=""><a>Inicio</a></li>
                <li class="active"><a>Proyectos</a></li>
            </ol>
            <div class="page-heading">
                <h1><i class="fa fa-folder-open-o"></i> Listado de <b>Proyectos</b></h1>
                <a href="proyectosadd.php" class="btnOnResponsive btn btn-success pullRight mr2p"><i class="icon-plus"></i> Nuevo Proyecto</a>
            </div>
            <div class="container-fluid">
                <!--ENCABEZADO DE CADA PAGINA FIN-->
                <!--..:::::::::::::::::::::..-->


                <form id="fproyectoslistsrch" name="fproyectoslistsrch" action="proyectoslist.php" >
                    <table class="ewBasicSearch">
                        <tr>
                            <td><span class="phpmaker">
			<input type="text" name="psearch" size="20" value="" placeholder="Ingrese los Datos de su B&uacute;squeda" class="form-control">
			<input type="Submit" name="Submit" value="Buscar&nbsp;(*)" class="btn btn-teal">&nbsp;
			<input type="Button" name="Reset" class="btn btn-teal tealR" value="Reset" onclick="EW_clearForm(this.form);this.form.psearchtype[0].checked = true;">&nbsp;
			<a href="proyectoslist.php?cmd=reset" class="btn btn-system btn-white-alt"><i class="icon-layers"></i> Mostrar todo</a>&nbsp;
			<a href="proyectossrch.php" class="btn btn-system btn-white-alt"><i class="icon-magnifier-add"></i> Búsqueda avanzada</a>
		</span></td>
                        </tr>
                        <tr class="tohide">
                            <td><span class="phpmaker"><input type="radio" name="psearchtype" value="" checked>Frase exacta&nbsp;&nbsp;<input type="radio" name="psearchtype" value="AND" >Todas las palabras&nbsp;&nbsp;<input type="radio" name="psearchtype" value="OR" >Cualquier palabra</span></td>
                        </tr>
                    </table>
                </form>

                <form method="post">
                    &nbsp;

                <?php echo($com); ?>

                </form>
                <form action="proyectoslist.php" name="ewpagerform" id="ewpagerform">
                    <table>
                        <tr>
                            <td nowrap>
                                <table border="0" cellspacing="0" cellpadding="0"><tr><td><span class="phpmaker">Página&nbsp;</span></td>
                                        <!--first page button-->
                                        <td><img src="images/firstdisab.png" alt="Primera" width="32" height="32" border="0"></td>
                                        <!--previous page button-->
                                        <td><img src="images/prevdisab.png" alt="Anterior" width="32" height="32" border="0"></td>
                                        <!--current page number-->
                                        <td><input type="text" name="pageno" value="1" size="4"></td>
                                        <!--next page button-->
                                        <td><a href="proyectoslist.php?start=6"><img src="images/next.png" alt="Siguiente" width="32" height="32" border="0"></a></td>
                                        <!--last page button-->
                                        <td><a href="proyectoslist.php?start=6"><img src="images/last.png" alt="Ultima" width="32" height="32" border="0"></a></td>
                                        <td><span class="phpmaker">&nbsp;de 2</span></td>
                                    </tr></table>
                                <span class="phpmaker">Registro 1 a 5 de 7</span>
                            </td>
                        </tr>
                    </table>
                </form>

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


