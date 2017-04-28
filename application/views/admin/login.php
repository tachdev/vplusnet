<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Some assets concatenated and minified to improve load speed. Download version includes source css, javascript and less assets -->
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>VPlusNet Admin | Login</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.min.css">
    <!-- /core styles -->

    <!-- page styles -->
    <!-- /page styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
</head>

<body class="bg-dark">
    <div class="app-user">
        <div class="user-container">
            <section class="panel">                
                <div class="bg-white user pd-lg">
                    <?php 

                      if(isset($message_error)){ 


                        echo '<div class="alert alert-warning alert-dismissable">';
                        echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                        echo '<strong>Warning!</strong>   '.$message_error.'</div>';

                      }

                      if(isset($success)){ 


                        echo '<div class="alert alert-success alert-dismissable">';
                        echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                        echo '<strong>Success!</strong>   '.$success.'</div>';

                      } 

                    ?>
                    <h6>
                        <strong>Welcome.</strong>Sign in to get started!</h6>

                    <form  method="post" role="form" action="<?php echo base_url('backoffice/login/validate_credentials'); ?>">
                        <input type="text" name="user_name" class="form-control mg-b-sm" placeholder="Username" autocomplete="off" autofocus required>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <button class="btn btn-info btn-block" type="submit">Sign in</button>
                    </form>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    