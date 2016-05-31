<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>.::ISM CENTER::.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <!-- FAVICON WEB -->
    <link rel="shortcut icon" href="favicon_ism.png"/>

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?= base_url('/assets/js/jquery-2.js') ?>"></script> 		<!-- EasyPieChart-->


    <link href="<?= base_url("/assets/login_style/css/app_list.css") ?>" rel="stylesheet">


    <link type="text/css" href="<?= base_url("/assets/fonts/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="<?= base_url("/assets/css/styles.css") ?>" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/css/simple-line-icons.css') ?>" rel="stylesheet">

    <link type="text/css" href="<?= base_url('/assets/plugins/jstree/dist/themes/avenger/style.min.css') ?>" rel="stylesheet">    <!-- jsTree -->
    <link type="text/css" href="<?= base_url('/assets/plugins/codeprettifier/prettify.css') ?>" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="<?= base_url('/assets/plugins/iCheck/skins/minimal/blue.css') ?>" rel="stylesheet">              <!-- iCheck -->

    <link href="<?= base_url('/assets/css/ismcenter.css') ?>" rel="stylesheet" type="text/css" />



    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link type="text/css" href="<?= base_url('/assets/plugins/form-daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet"> 	<!-- DateRangePicker -->
    <link type="text/css" href="<?= base_url('/assets/plugins/fullcalendar/fullcalendar.css') ?>" rel="stylesheet"> 					<!-- FullCalendar -->
    <!--    <link type="text/css" href="--><?//= base_url('/assets/plugins/charts-chartistjs/chartist.min.css') ?><!--" rel="stylesheet"> 				<!-- Chartist -->

    <!-- Alerts-->
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/alertify/themes/alertify.core.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/alertify/themes/alertify.default.css') ?>" id="toggleCSS" />
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/alertify/example/assets/js/lib/sh/shCore.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/alertify/example/assets/js/lib/sh/shCoreDefault.css') ?>" />

    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/plugins/sweetalert-master/dist/sweetalert.css') ?>">

    <link type="text/css" href="<?= base_url('/assets/plugins/clockface/css/clockface.css') ?>" rel="stylesheet" />                   	<!-- Clockface -->

</head>

<body class="infobar-offcanvas" id="bodyId">

<div id="headerbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-2">
                <a  href="javascript:void(0)" class="shortcut-tile tile-success">
                    <div class="tile-body">
                        <div class="pull-left"><i class="icon-plus"></i></div>
                    </div>
                    <div class="tile-footer strong">
                        Crear Proyecto
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-help btnDevloadFull">
                    <div class="tile-body">
                        <div class="pull-left"><i class="icon-earphones-alt"></i></div>
                        <div class="pull-right"><span class="badge">2</span></div>
                    </div>
                    <div class="tile-footer strong">
                        Help Desk
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-primary btnDevloadFull">
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                        <div class="pull-right"><span class="badge">10</span></div>
                    </div>
                    <div class="tile-footer strong">
                        Mensajeria
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-midnightblue btnDevloadFull">
                    <div class="tile-body">
                        <div class="pull-left">
                            <img src="foto_user/avatar.jpg" class="avatar">
                        </div>
                        <div class="pull-right">
							<span class="badge">
								<span class="icon-settings"></span>
							</span>
                        </div>
                    </div>
                    <div class="tile-footer strong" style="margin-top: -8px;">
                        Asignaciones
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-2">
                <a href="#" class="shortcut-tile tile-ismcenter btnDevloadFull">
                    <div class="tile-body">
                        <div class="pull-left"><i class="icon-globe"></i></div>
                        <div class="pull-right"><span class="badge">3</span></div>
                    </div>
                    <div class="tile-footer strong">
                        ISM CENTER
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-2">
                <a href="<?php echo site_url('/dashboard/logout');?>" class="shortcut-tile tile-orange">
                    <div class="tile-body">
                        <div class="pull-left"><i class="icon-logout"></i></div>
                    </div>
                    <div class="tile-footer strong">
                        Salir del Sistema
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<header id="topnav" class="navbar navbar-info navbar-fixed-top clearfix" role="banner">

	<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
		<a data-toggle="tooltips" data-placement="right" title="Control del Menu"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
	</span>

    <a class="navbar-brand" href="dashboard_user.php?cmd=resetall">ISM Center</a>

	<span id="trigger-infobar" class="toolbar-trigger toolbar-icon-bg tohide">
		<a data-toggle="tooltips" data-placement="left" title="Desplegar Panel"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
	</span>


    <div class="yamm navbar-left navbar-collapse collapse in">
        <ul class="nav navbar-nav">
            <li class="dropdown" id="widget-classicmenu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Herramientas<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="https://www.google.com" target="_blank"><i class="icon-globe"></i> Busqueda en Google</a></li>
                    <li><a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube-play"></i> Busqueda en YouTube</a></li>
                    <li class="divider tohide"></li>
                    <li class="tohide"><a href="#" class="btnDevloadFull"><i class="icon-earphones-alt"></i> Help Desk</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <ul class="nav navbar-nav toolbar pull-right" style="margin-right: 0.7%;">
        <li class="dropdown toolbar-icon-bg">
            <a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">
				<span class="icon-bg">
					<i class="fa fa-fw fa-ellipsis-h"></i>
				</span>
            </a>
        </li>

        <li class="dropdown toolbar-icon-bg demo-search-hidden">
            <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>


            <div class="dropdown-menu dropdown-alternate arrow search dropdown-menu-form">
                <div class="dd-header">
                    <span>B&uacute;scar Proyecto</span>
                    <span><a href="proyectossrch.php">B&uacute;squeda Avanzada</a></span>
                </div>
                <div class="input-group">
                    <form id="fproyectoslistsrch" name="fproyectoslistsrch" action="proyectoslist.php" >
                        <input type="text" class="form-control" placeholder="" name="psearch" value="">

							<span class="input-group-btn">
								<button type="Submit" name="Submit" value="Buscar" class="btn btn-primary" style="margin-top: 8%;">Buscar</button>
							</span>
                    </form>
                </div>
            </div>

        </li>

        <li class="toolbar-icon-bg demo-headerdrop-hidden" style="display: none;">
            <a href="#" id="headerbardropdown"><span class="icon-bg"><i class="fa fa-fw fa-level-down"></i></span></i></a>
        </li>

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="fa fa-fw fa-arrows-alt"></i></span></i></a>
        </li>


        <li class="dropdown toolbar-icon-bg btnDevload" style="display: none;">
            <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-bell"></i></span><span class="badge badge-info">5</span></a>
            <div class="dropdown-menu dropdown-alternate notifications arrow">
                <div class="dd-header">
                    <span>Notificaciones</span>
                    <!--<span><a href="#">Settings</a></span>-->
                </div>
                <div class="scrollthis scroll-pane">
                    <ul class="scroll-content">

                        <li class="">
                            <a href="#" class="notification-info">
                                <div class="notification-icon"><i class="fa fa-envelope"></i></div>
                                <div class="notification-content">Ha recibido un Nuevo Mensaje</div>
                                <div class="notification-time">2m</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="notification-success">
                                <div class="notification-icon"><i class="fa fa-check fa-fw"></i></div>
                                <div class="notification-content">Ha Completado la Tarea No.#5896</div>
                                <div class="notification-time">12m</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="notification-success">
                                <div class="notification-icon"><i class="fa fa-plus"></i></div>
                                <div class="notification-content">Le han Asignado una Tarea Nueva</div>
                                <div class="notification-time">35m</div>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="notification-danger">
                                <div class="notification-icon"><i class="icon-earphones-alt"></i></div>
                                <div class="notification-content">Help Desk te ha Respondido</div>
                                <div class="notification-time">11h</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="dd-footer">
                    <a href="#">Ver M&aacute;s</a>
                </div>
            </div>
        </li>

        <li class="dropdown toolbar-icon-bg hidden-xs btnDevload" style="display: none;">
            <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-envelope"></i></span></a>
            <div class="dropdown-menu dropdown-alternate messages arrow">
                <div class="dd-header">
                    <span>Mensajeria</span>
                    <!--<span><a href="#">Settings</a></span>-->
                </div>

                <div class="scrollthis scroll-pane">
                    <ul class="scroll-content">
                        <li>
                            <a href="#">
                                <img class="msg-avatar" src="foto_user/avatar.jpg" alt="avatar" />
                                <div class="msg-content">
                                    <span class="name">Jose Sarmiento</span>
                                    <span class="msg">Nonummy nibh epismod dolor sit lorem ipsum [...]</span>
                                </div>
                                <span class="msg-time">7d</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="dd-footer"><a href="#">Ver M&aacute;s</a></div>
            </div>
        </li>

        <li class="dropdown toolbar-icon-bg">
            <a href="#" class="dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-user"></i></span></a>
            <ul class="dropdown-menu userinfo arrow">
                <li><a href="javascript:void(0)" id="ajax-user-profile"><span class="pull-left">Perfil de Usuario</span> <i class="pull-right fa fa-user"></i></a></li>
                <li class="divider tohide"></li>
                <li class="tohide"><a href="#"><span class="pull-left">Asignaciones</span> <i class="pull-right fa fa-fw fa-bars"></i></a></li>
                <li class="btnDevload tohide"><a href="#"><span class="pull-left">Mensajeria</span> <i class="pull-right fa fa-envelope"></i></a></li>
                <li class="btnDevload tohide"><a href="#"><span class="pull-left">Help Desk</span> <i class="pull-right icon-earphones-alt"></i></a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url('/dashboard/logout');?>"><span class="pull-left">Salir del Sistema</span> <i class="pull-right fa fa-sign-out"></i></a></li>
            </ul>
        </li>

    </ul>

</header>

<!--QUERYS INDICADORES-->

<!--QUERYS INDICADORES FIN-->

<!--obteniendo ip del visitante-->


<div id="wrapper">
    <div id="layout-static">
        <div class="static-sidebar-wrapper sidebar-midnightblue">
            <div class="static-sidebar" style="position: fixed;">
                <div class="sidebar">
                    <div class="widget stay-on-collapse" id="widget-welcomebox">
                        <div class="widget-body welcome-box tabular">
                            <div class="tabular-row">
                                <div class="tabular-cell welcome-avatar">
                                    <a href="#"><img src="empresa/usuarios/avatar.png" class="avatar"></a>
                                </div>
                                <div class="tabular-cell welcome-options">
                                    <span class="welcome-text">Bienvenido,</span>
                                    <a href="#" class="name"><?php echo($userName) ?></a>
                                    <span class="welcome-text"><?php echo($userSurName) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                            <ul class="acc-menu">
                                <li class="nav-separator">Menu Principal</li>
                                <li><a href="<?php echo site_url('/dashboard');?>"><i class="fa fa-home"></i><span>Inicio</span></a></li>
                                <li><a href="javascript:;"><i class="fa fa-folder-open"></i><span>Planificación</span><span class="badge badge-info">01</span></a>
                                    <ul class="acc-menu">
                                        <li id="projectasigned"><a href="javascript:void(0)"><i class="icon-user-follow"></i> Proyectos</a></li>

                                        <li id="listarTareas" ><a href="javascript:void(0)"><i class="icon-plus"></i> Tareas</a></li>
                                        <li id="createObjetivo" ><a href="javascript:void(0)"><i class="icon-plus"></i> Recursos Físicos</a></li>

                                        <li id="createMeta"><a  href="javascript:void(0)"><i class="icon-magnifier"></i> Recursos Económicos</a></li>
                                    </ul>
                                </li>
                                <li class="tohide"><a href="#"><i class="fa fa-tags"></i><span>Tareas</span><span class="badge badge-info">14</span></a>
                                    <ul class="acc-menu">
                                        <li><a href="#"><i class="icon-user-follow"></i> Asisgnadas</a></li>
                                        <li><a href="#"><i class="icon-plus"></i> Agregar Nueva</a></li>
                                        <li><a href="#"><i class="icon-magnifier"></i> B&uacute;squeda Avanzada</a></li>
                                    </ul>
                                </li>


                                <li class="nav-separator">Controles</li>

                                <li><a href="#"><i class="fa fa-hdd-o"></i><span>Datos Maestros</span></a>
                                    <ul class="acc-menu" id="scrollingUlMenu">
                                        <li><a href="cargolist.php?cmd=resetall"><i class="icon-trophy"></i>Empresas</a></li>
                                        <li><a href="empresaslist.php?cmd=resetall"><i class="fa fa-building-o"></i>Departamentos</a></li>
                                        <li><a href="estatuslist.php?cmd=resetall"><i class="icon-bar-chart"></i>Tipos de Usuarios</a></li>
                                        <li><a href="estatus_recursos_financieroslist.php?cmd=resetall"><i class="icon-bar-chart"></i>Usuarios</a></li>
                                        <li><a href="userlevelslist.php?cmd=resetall"><i class="icon-users"></i> Tipos de Usuarios</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-hdd-o"></i><span>Configuraciones</span></a>
                                    <ul class="acc-menu" id="scrollingUlMenu">
                                        <li><a href="cargolist.php?cmd=resetall"><i class="icon-trophy"></i>Auditoría</a></li>
                                        <li><a href="empresaslist.php?cmd=resetall"><i class="fa fa-building-o"></i>Configuración</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('/dashboard/logout');?>"><i class="icon-logout"></i> Salir</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <!-- middle screen -->



        <div class="static-content-wrapper" >
            <div class="static-content" >
                <div class="page-content" id="ajax-middle">

                    <!--   -------------------->


















                    <!-- ------------------------------------>
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

        <!-- middle screen -->
    </div>
</div>
</div>




<script type="text/javascript" src="<?= base_url('/assets/js/jqueryui-1.9.2.min.js') ?>"></script> 							<!-- Load jQueryUI -->

<script type="text/javascript" src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script> 								<!-- Load Bootstrap -->


<script type="text/javascript" src="<?= base_url('/assets/plugins/easypiechart/jquery.easypiechart.js') ?>"></script> 		<!-- EasyPieChart-->
<script type="text/javascript" src="<?= base_url('/assets/plugins/sparklines/jquery.sparklines.min.js') ?>"></script>  		<!-- Sparkline -->
<script type="text/javascript" src="<?= base_url('/assets/plugins/jstree/dist/jstree.min.js') ?>"></script>  				<!-- jsTree -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/codeprettifier/prettify.js') ?>"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="<?= base_url('/assets/plugins/bootstrap-switch/bootstrap-switch.js') ?>"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') ?>"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/iCheck/icheck.min.js') ?>"></script>     					<!-- iCheck -->

<script type="text/javascript" src="<?= base_url('/assets/js/enquire.min.js') ?>"></script> 									<!-- Enquire for Responsiveness -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/bootbox/bootbox.js') ?>"></script>							<!-- Bootbox -->

<!--<script type="text/javascript" src="--><?//= base_url('/assets/plugins/simpleWeather/jquery.simpleWeather.min.js') ?><!--"></script> <!-- Weather plugin-->-->

<script type="text/javascript" src="<?= base_url('/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') ?>"></script> <!-- nano scroller -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js') ?>"></script> 	<!-- Mousewheel support needed for jScrollPane -->

<script type="text/javascript" src="<?= base_url('/assets/js/application.js') ?>"></script>
<!--<script type="text/javascript" src="--><?//= base_url('/assets/demo/demo.js') ?><!--"></script>-->
<!--<script type="text/javascript" src="--><?//= base_url('/assets/demo/demo-switcher.js') ?><!--"></script>-->

<!-- End loading site level scripts -->

<!-- Load page level scripts-->

<script type="text/javascript" src="<?= base_url('/assets/plugins/fullcalendar/fullcalendar.min.js') ?>"></script>   				<!-- FullCalendar -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/wijets/wijets.js') ?>"></script>     								<!-- Wijet -->

<!--<script type="text/javascript" src="--><?//= base_url('/assets/plugins/charts-chartistjs/chartist.min.js') ?><!--"></script>               	<!-- Chartist -->-->
<!--<script type="text/javascript" src="--><?//= base_url('/assets/plugins/charts-chartistjs/chartist-plugin-tooltip.js') ?><!--"></script>    	<!-- Chartist -->-->

<script type="text/javascript" src="<?= base_url('/assets/plugins/form-daterangepicker/moment.min.js') ?>"></script>              	<!-- Moment.js for Date Range Picker -->
<script type="text/javascript" src="<?= base_url('/assets/plugins/form-daterangepicker/daterangepicker.js') ?>"></script>     				<!-- Date Range Picker -->
<script type="text/javascript" src="<?= base_url('/assets/plugins/clockface/js/clockface.js') ?>"></script>     								<!-- Clockface -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script> 			<!-- Color Picker -->

<script type="text/javascript" src="<?= base_url('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') ?>"></script>      			<!-- Datepicker -->
<script type="text/javascript" src="<?= base_url('/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js') ?>"></script>      			<!-- Timepicker -->
<script type="text/javascript" src="<?= base_url('/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') ?>"></script> 	<!-- DateTime Picker -->
<script type="text/javascript" src="<?= base_url('/assets/demo/demo-pickers.js') ?>"></script>


<script type="text/javascript" src="<?= base_url('/assets/plugins/pines-notify/pnotify.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/plugins/alertify/src/alertify.js') ?>"></script>

<script src="<?= base_url('/assets/plugins/sweetalert-master/dist/sweetalert.min.js') ?>"></script>

<!--<script type="text/javascript" src="--><?//= base_url('/assets/demo/demo-index.js') ?><!--"></script> 										<!-- Initialize scripts for this page-->-->
<link rel="stylesheet" type="text/css" media="all" href="<?php base_url("assets/calendar/calendar-win2k-1.css") ?>" title="win2k-1" />
<script type="text/javascript" src="<?php base_url("assets/calendar/calendar.js") ?>"></script>
<script type="text/javascript" src="<?php base_url("assets/calendar/lang/calendar-es.js") ?>"></script>
<script type="text/javascript" src="<?php base_url("assets/calendar/calendar-setup.js") ?>"></script>


<script type="text/javascript" src="<?= base_url('/assets/plugins/form-inputmask/jquery.inputmask.bundle.min.js') ?>"></script>  	<!-- Input Masks Plugin -->

<script type="text/javascript" src="<?= base_url('/assets/demo/demo-mask.js') ?>"></script>

<script type="text/javascript" src="<?= base_url('/assets/js/sigepro.js') ?>"></script> 		<!-- EasyPieChart-->


<!-- End loading page level scripts-->
<script type="text/javascript">
    $(document).ready(function(){
        var parametros = { view : 0 };
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
        loadAjax("#ajax-user-profile" ,2 );
        loadAjax("#createproject" ,7 );
        loadAjax("#projectasigned" ,14 );


    });
</script>


</body>
</html>