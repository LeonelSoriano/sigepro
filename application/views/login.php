<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 7/05/16
 * Time: 19:41
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body class="notransition black">
<div id="page-container">
    <ul class="cb-slideshow">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
    </ul>
</div>

<div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true" style=" text-align: center; overflow: hidden; overflow-x: hidden; overflow-y: hidden;">
    <img src="<?= base_url("/assets/login_style/images/logo.png") ?>" class="imgLogoLogin">
    <div class="modal-dialog modal-sm">


        <script type="text/javascript" >
            $(function() {
                var msg = <?php   echo(isset($failLogin) && $failLogin  ? 'true' : 'false') ?>;

                if(msg){
                    sweetAlert("Oops, Lo Sentimos... Usuario no Existe ", "error");
                }
            });
        </script>


        <div class="modal-content">

            <div class="modal-header" style="text-align: left;">
                <h4 class="modal-title" id="signinLabel">Ingresar al Sistema</h4>
            </div>
            <div class="modal-body">

                <?php echo form_open('/login','method="POST"','role="form"','onSubmit="return EW_checkMyForm(this);"') ;?>

                    <div class="form-group">
                        <input type="text" placeholder="Usuario" class="form-control" name="username" size="20" value="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" size="20" placeholder="Contrase&ntilde;a" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">

                            <input type="submit" style="width: 100%;" class="btn btn-lg btn-green" name="submit" value="Ingresar al Sistema">
                        </div>
                    </div>
                    <!--<p class="help-block">Don't have an account? <a href="signup.html" class="text-green">Sign Up</a></p>-->
                <?php echo form_close();?>
            </div>
        </div>

        <div class="signFooter">ISM Center<br>&copy; 2016. All Right Reserved</div>
    </div>
</div>
