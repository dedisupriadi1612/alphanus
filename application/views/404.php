<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ALPHANUS</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url().'assets/';?>adm/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="<?php echo base_url().'assets/';?>adm/css/cyrillic-ext.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url().'assets/';?>adm/css/Icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url().'assets/';?>adm/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url().'assets/';?>adm/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url().'assets/';?>adm/css/style.css" rel="stylesheet">
</head>

<body class="four-zero-four">
    <div class="four-zero-four-container">
        <div class="error-code">404</div>
        <?php if(!empty($error_messages)):?>
            <div class="error-message">
                <?php echo $error_messages; ?>
            </div>
        <?php endif; ?>

        <div class="button-place">
            <a href="<?php echo base_url();?>" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url().'assets/';?>adm/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url().'assets/';?>adm/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url().'assets/';?>adm/plugins/node-waves/waves.js"></script>
</body>

</html>