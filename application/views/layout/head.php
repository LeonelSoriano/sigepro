<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 7/05/16
 * Time: 22:37
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>.::ISM CENTER::.</title>
    <link rel="shortcut icon" href="<?= base_url("/assets/img/favicon_t2.png") ?>"/>

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="<?= base_url("/assets/login_style/css/app_list.css") ?>" rel="stylesheet">
    <link href="<?= base_url("/assets/fonts/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("/assets/css/styles.css") ?>" rel="stylesheet">

    <link href="<?= base_url("/assets/css/simple-line-icons.css") ?>" rel="stylesheet">
    <link href="<?= base_url("/assets/plugins/jstree/dist/themes/avenger/style.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("/assets/plugins/codeprettifier/prettify.css") ?>" rel="stylesheet">
    <link href="<?= base_url("/assets/plugins/iCheck/skins/minimal/blue.css") ?>" rel="stylesheet">
    <link href="<?= base_url("/assets/css/ismcenter.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/plugins/form-daterangepicker/daterangepicker-bs3.css\"") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("/assets/plugins/fullcalendar/fullcalendar.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("/assets/plugins/charts-chartistjs/chartist.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("/assets/plugins/clockface/css/clockface.css") ?>" rel="stylesheet" type="text/css" />



    <script src="<?= base_url("/assets/js/jquery.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("/assets/js/bootstrap.js") ?>" type="text/javascript"></script>


    <link rel="stylesheet" href="<?= base_url("/assets/css/simple-line-icons.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/css/bootstrap-theme.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/css/fullscreen-slider.css") ?>">
    <link rel="stylesheet" href="<?= base_url("/assets/css/app.css") ?>">
    <link type="text/css" href="<?= base_url("/assets/plugins/pines-notify/pnotify.css");?> rel="stylesheet">

    <!-- alert -->
    <link rel="stylesheet" href="<?= base_url("/assets/plugins/alertify/themes/alertify.core.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("/assets/plugins/alertify/themes/alertify.default.css") ?>" id="toggleCSS" />
    <link rel="stylesheet" href="<?= base_url("/assets/plugins/alertify/example/assets/js/lib/sh/shCore.css") ?>" />
    <link rel="stylesheet" href="<?= base_url("/assets/plugins/alertify/example/assets/js/lib/sh/shCoreDefault.css") ?>" />

    <link rel="stylesheet" type="text/css" href="<?= base_url("/assets/plugins/sweetalert-master/dist/sweetalert.css") ?>">



    <script src="<?= base_url("/assets/js/jquery-ui.min.js") ?>"></script>
    <script src="<?= base_url("/assets/js/jquery-ui-touch-punch.js") ?>"></script>
    <script src="<?= base_url("/assets/js/ewp.js") ?>"></script>



    <script type="text/javascript">
        <!--
        function EW_checkMyForm(EW_this) {
            if (!EW_hasValue(EW_this.username, "TEXT" )) {
                if  (!EW_onError(EW_this, EW_this.username, "TEXT", "Por favor ingrese una Identificación de Usuario"))
                    return false;
            }
            if (!EW_hasValue(EW_this.password, "PASSWORD" )) {
                if (!EW_onError(EW_this, EW_this.password, "PASSWORD", "Por favor ingrese contraseña"))
                    return false;
            }
            return true;
        }

        //-->
    </script>


</head>
