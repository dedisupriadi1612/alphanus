<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Alphanus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <?php $this->load->view('template/style')?>
        

        <link rel=stylesheet href="<?php echo base_url().'assets/';?>codemirror/lib/codemirror.css">
        <script src="<?php echo base_url().'assets/';?>codemirror/lib/codemirror.js"></script>

        

        
        <script src="<?php echo base_url().'assets/';?>codemirror/addon/edit/matchbrackets.js"></script>
        <script src="<?php echo base_url().'assets/';?>codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script src="<?php echo base_url().'assets/';?>codemirror/mode/xml/xml.js"></script>
        <script src="<?php echo base_url().'assets/';?>codemirror/mode/javascript/javascript.js"></script>
        <script src="<?php echo base_url().'assets/';?>codemirror/mode/css/css.js"></script>
        <script src="<?php echo base_url().'assets/';?>codemirror/mode/clike/clike.js"></script>
        <script src="<?php echo base_url().'assets/';?>codemirror/mode/php/php.js"></script>
        <script src="<?php echo base_url().'assets/';?>codemirror/mode/python/python.js"></script>
        

        <link rel="stylesheet" href="<?php echo base_url().'assets/';?>codemirror/theme/monokai.css">

        <?php $this->load->view('template/script')?>
    </head>

    <body>

    <?php $this->load->view('template/menu')?>