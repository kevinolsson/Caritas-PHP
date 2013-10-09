<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>


<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Tahanang Walang Hagdanan, Inc.</title>


    <link rel="stylesheet" href="<?=$assets;?>stylesheets/app.css">

    <script src="<?=$assets;?>javascripts/vendor/custom.modernizr.js"></script>

</head>
<body>



    <div class="row navbar">
        <div class="nav-left">
            <a href="<?=$base_url;?>">
                <img src="<?=$assets;?>images/logo.png" alt="logo" data-interchange="[{% static "images/logo@2x.png" %}, (retina)]">
                <span>Tahanang Walang Hagdanan, Inc.</span>
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="<?=$base_url;?>">Home</a></li>
            <li><a href="<?=$base_url;?>services">Services</a></li>
            <li><a href="<?=$base_url;?>about">About</a></li>
            <li><a href="<?=$base_url;?>contact">Contact</a></li>
            <li><a href="<?=$base_url;?>donate" id="donate" class="button-custom red small">Donate</a></li>
        </ul>
    </div>
