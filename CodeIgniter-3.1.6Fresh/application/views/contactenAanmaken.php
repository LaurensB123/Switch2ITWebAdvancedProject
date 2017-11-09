<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>Maak contact aan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<?php echo form_open('Welcome/addContacts'); ?>
<div class="w3-row-padding w3-center w3-margin-top">
    <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:460px">
            <h3>ID</h3><br>
            <img src="<?php echo base_url(); ?>images/number.jpg" alt="Afbeelding" height="180" width="180">
            <br/><br/><br/>
            <?php echo form_input(array('id' => 'ID', 'name' => 'ID')); ?><br />
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:460px">
            <h3>Email</h3><br>
            <img src="<?php echo base_url(); ?>images/email.jpg" alt="Afbeelding" height="180" width="180">
            <br/><br/><br/>
            <?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br />
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card w3-container" style="min-height:460px">
            <h3>Name</h3><br>
            <img src="<?php echo base_url(); ?>images/id.jpg" alt="Afbeelding" height="180" width="180">
            <br/><br/><br/>
            <?php echo form_input(array('id' => 'name', 'name' => 'name')); ?>
            <br/>
            <br/>
            <br/>
            <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
            <?php echo form_close(); ?><br/>
        </div>
    </div>
</div>


</body>
</html>