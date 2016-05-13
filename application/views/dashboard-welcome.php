<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 10/05/16
 * Time: 20:49
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<ol class="breadcrumb" ><!-- ajaxasd -->

    <li class=""><a>System</a></li>
    <li class="active"><a>Inicio</a></li>

</ol>

<div class="page-heading" ><!-- ajaxasd -->
    <div >
        <h1>Sistema de Gerenciamiento de Proyectos, <b>Bienvenido</b>  <?php echo($userName); ?>!</h1>
        <!--<div class="options">
            <div class="btn-toolbar">
                <a href="#" class="btn btn-default"><i class="fa fa-fw fa-wrench"></i></a>
            </div>
        </div>-->
    </div>
</div>
<div class="container-fluid" ><!-- ajaxasd interno -->

    <div data-widget-group="group1">

        <div class="row">
            <div class="col-md-3">
                <a class="info-tile tile-success has-footer" href="proyectoslist.php?cmd=resetall">
                    <div class="tile-heading">
                        <div class="pull-left">Proyectos Activos</div>
                        <div class="pull-right">
                            <div id="tileorders" class="sparkline-block"></div>
                        </div>
                    </div>
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-folder-open"></i></div>
                        <div class="pull-right">01</div>
                    </div>
                    <div class="tile-footer">
                        <div class="pull-left">Completados / Total</div>
                        <div class="pull-right percent-change">01 / 02</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 btnDevload tohide">
                <a class="info-tile tile-info has-footer" href="#">
                    <div class="tile-heading">
                        <div class="pull-left">Tareas Pendientes</div>
                        <div class="pull-right">
                            <div id="tiletickets" class="sparkline-block"></div>
                        </div>
                    </div>
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-tags"></i></div>
                        <div class="pull-right">14</div>
                    </div>
                    <div class="tile-footer">
                        <div class="pull-left">Completadas / Total</div>
                        <div class="pull-right percent-change">00 / 00</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 btnDevload tohide">
                <a class="info-tile tile-alizarin has-footer" href="#">
                    <div class="tile-heading">
                        <div class="pull-left">Mensajes Nuevos</div>
                        <div class="pull-right">
                            <div id="tilerevenues" class="sparkline-block"></div>
                        </div>
                    </div>
                    <div class="tile-body">
                        <div class="pull-left"><i class="fa fa-envelope"></i></div>
                        <div class="pull-right">03</div>
                    </div>
                    <div class="tile-footer">
                        <div class="pull-left">Mensajes Recibidos</div>
                        <div class="pull-right percent-change">00</div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 btnDevload tohide">
                <a class="info-tile tile-midnightblue has-footer" href="#">
                    <div class="tile-heading">
                        <div class="pull-left">Respuestas (Help Desk)</div>
                        <div class="pull-right">
                            <div id="tilemembers" class="sparkline-block"></div>
                        </div>
                    </div>
                    <div class="tile-body">
                        <div class="pull-left"><i class="icon-earphones-alt"></i></div>
                        <div class="pull-right">00</div>
                    </div>
                    <div class="tile-footer">
                        <div class="pull-left">Activos / Total Creados</div>
                        <div class="pull-right percent-change">00 / 00</div>
                    </div>
                </a>
            </div>
        </div>
        <!--contenido aca -->
        <!-- record estructure -->
        <div class="row tohide">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-12" id="NotificacionesOrganizacionales">
                        <h4>Notificaciones de la <b>Empresa</b> (En Desarrollo)</h4>

                        <div class="userWidget-2">
                            <div class="info">
                                <div class="name">
                                    <i class="icon-speech"></i> &nbsp;Mensaje Organizacional
                                    <span class="pullRight"><i class="icon-pin"></i></span>
                                </div>
                                <div class="address" style="margin-top: 10px;">
                                    <i class="icon-user"></i> &nbsp;En Desarrollo (En Desarrollo).

                                    <div class="messageDivider"></div>
                                    En Desarrollo.
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div> <!-- .container-fluid -->
    <script type="text/javascript" id="scrip"  src="<?= base_url('/assets/js/dashboard.js') ?>"></script>
