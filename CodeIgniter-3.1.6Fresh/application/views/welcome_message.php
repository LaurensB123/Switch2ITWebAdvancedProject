<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link href="http://fonts.googleapis.com/css?family=Cabin:400,500,600,bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/HomeStyle.css">
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>


</head>
<body>
<div id="pagegradient">
    <a class="button" href="<?php echo site_url('Welcome/loadContactenAanmaken/uri') ?>">
        <span>Contact aanmaken</span>
    </a>

    <br>

    <a class="button" href="<?php echo site_url('Welcome/loadContactenLijstOpvragen/uri') ?>">
        <span>Contact lijst opvragen</span>
    </a>

    <br>

    <a class="button" href="<?php echo site_url('Welcome/loadContactenWijzigen/uri') ?>">
        <span>Contact wijzigen</span>

        <br>
    </a>

    <br>
    <a class="button" href="<?php echo site_url('Welcome/loadAboutUs/uri') ?>">
        <span>About us</span>
    </a>
</div>
</body>
</html>