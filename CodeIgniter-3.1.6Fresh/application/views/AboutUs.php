<?php ?>
<!DOCTYPE html>
<html>
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="bootstrap.min.css" rel="stylesheet" />
<link href="bootstrap-responsive.min.css" rel="stylesheet" />

<body id="myPage">

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
    <img src="<?php echo base_url(); ?>images/header1.JPG" style="width:100%;min-height:350px;max-height:600px;">
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>OUR TEAM</h2>
    <p>Meet the team</p>

    <div class="w3-row"><br>

        <div class="w3-quarter">
            <img src="<?php echo base_url(); ?>images/Laurens.JPG" alt="Laurens" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Laurens Bynens</h3>
            <p>Software Management</p>
        </div>

        <div class="w3-quarter">
            <img src="<?php echo base_url(); ?>images/Hannah.JPG" alt="Hannah" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Hannah Patronoudis</h3>
            <p>Software Management</p>
        </div>

        <div class="w3-quarter">
            <img src="<?php echo base_url(); ?>images/Student.jpg" alt="Student" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Koen Hendrikx</h3>
            <p>Switch2IT</p>
        </div>

        <div class="w3-quarter">
            <img src="<?php echo base_url(); ?>images/Student.jpg" alt="Leerkracht" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>J. Willekens</h3>
            <p>Leerkracht</p>
        </div>

    </div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

    <div class="w3-quarter">
        <h2>Our Work</h2>
        <p>In het kader van ons eindwerk voor Web Advanced hebben we deze pagina aangemaakt.
            Het doel van deze pagina is om ons team voor te stellen.</p>
    </div>

    <div class="w3-quarter">
        <div class="w3-card-2 w3-white">
            <img src="<?php echo base_url(); ?>images/Laurens2.jpg" style="width:100%">
            <div class="w3-container">
                <h3>Laurens</h3>
                <h4>Software Management</h4>
                <p>Hogeschool PXL</p>
                <p>Enterprise Information Management</p>
                <p>IT Service Management</p>
                <p>Project Management</p>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card-2 w3-white">
            <img src="<?php echo base_url(); ?>images/Hannah2.jpg" style="width:100%">
            <div class="w3-container">
                <h3>Hannah</h3>
                <h4>Software Management</h4>
                <p>Hogeschool PXL</p>
                <p>Software Quality Management</p>
                <p>Customer Relationship Management</p>
                <p>Business Process Management</p>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card-2 w3-white">
            <img src="<?php echo base_url(); ?>images/Student2.jpg" style="width:100%">
            <div class="w3-container">
                <h3>Koen</h3>
                <h4>Switch2IT</h4>
                <p>Hogeschool PXL</p>
                <p>Internet of Everything (IoE)</p>
                <p>Internet of Everything (IoE)</p>
                <p>Internet of Everything (IoE)</p>
            </div>
        </div>
    </div>

</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
    <h4>Follow Us</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
    <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
    <p>2017</a></p>

    <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
        <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
        <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
</footer>

</body>
</html>
