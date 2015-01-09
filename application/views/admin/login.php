<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Pixit - Responsive Boostrap3 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="<?php echo base_url();?>admin/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="<?php echo base_url();?>admin/css/icons/icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin/css/plugins.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin/css/style.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="<?php echo base_url();?>admin/css/animate-custom.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script href="<?php echo base_url();?>admin/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="<?php echo base_url();?>admin/img/account/user-icon.png" alt="Key icon">
                    </div>
                    <div class="login-logo">
                        <a href="#?login-theme-3">
                            <img src="<?php echo base_url();?>admin/img/account/login-logo.png" alt="Company Logo">
                        </a>
                    </div>
                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                      <?php if($this->session->flashdata('fail')){?>
                              <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('fail');?>
                              </div>
                          <?php } ?>
                        <!-- END ERROR BOX -->
                        <form action="<?php echo base_url('index.php/admin/welcome/login') ?>" method="post" name="submit">
                            <input type="text" placeholder="Username" name="username" class="input-field form-control user" />
                            <?php echo form_error('username'); ?>
                            <input type="password" placeholder="Password" name="password" class="input-field form-control password" />
                            <?php echo form_error('password'); ?>
                            <button id="submit-form" type="submit" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">login</span></button>
                        </form>
                        <div class="login-links">
                            <a href="password_forgot.html">Forgot password?</a>
                            <br>
                            <a href="signup.html">Don't have an account? <strong>Sign Up</strong></a>
                        </div>
                    </div>
                </div>
                <div class="social-login row">
                    <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
                    </div>
                    <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                        <a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script href="<?php echo base_url();?>admin/plugins/jquery-1.11.js"></script>
    <script href="<?php echo base_url();?>admin/plugins/jquery-migrate-1.2.1.js"></script>
    <script href="<?php echo base_url();?>admin/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script href="<?php echo base_url();?>admin/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script href="<?php echo base_url();?>admin/plugins/bootstrap/bootstrap.min.js"></script>
    <script href="<?php echo base_url();?>admin/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script href="<?php echo base_url();?>admin/plugins/backstretch/backstretch.min.js"></script>
    <script href="<?php echo base_url();?>admin/plugins/bootstrap-loading/lada.min.js"></script>
    <script href="<?php echo base_url();?>admin/js/account.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script>
    $(function()
    {
    $('#submit-form').click(function(e){
        e.preventDefault();
        var l = Ladda.create(this);
        l.start();
        setTimeout(function () {
            window.location.href = "#";
        }, 2000);

    });
});
    </script> -->

</body>

</html>
