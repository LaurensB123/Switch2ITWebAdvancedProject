<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to CodeIgniter</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <link href="http://fonts.googleapis.com/css?family=Cabin:400,500,600,bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/HomeStyle.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a class="button" role="button" href="<?php echo site_url('Welcome/loadContactenAanmaken/uri') ?>">
                   <span> Contact aanmaken</span>
                </a>
        </div>

        <div class="col-md-3">
            <p><a class="button" href="<?php echo site_url('Welcome/loadContactenLijstOpvragen/uri') ?>">
                    <span>Contact lijst opvragen</span>
                </a></p>
        </div>

        <div class="col-md-3">
            <p><a class="button" href="<?php echo site_url('Welcome/loadContactenWijzigen/uri') ?>">
                    <span>Contact wijzigen</span>
                </a></p>
        </div>

        <div class="col-md-3">
            <p><a class="button" href="<?php echo site_url('Welcome/loadAboutUs/uri') ?>">
                    <span>About us</span>
                </a></p>
        </div>

    </div>

</div>
</body>
</html>