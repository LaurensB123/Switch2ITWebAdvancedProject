<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maak contact aan</title>
</head>
<body>
<?php echo form_open('Welcome/addContacts'); ?>
<?php echo form_label('ID :'); ?><br/>
<?php echo form_input(array('id' => 'ID', 'name' => 'ID')); ?><br />

<?php echo form_label('Email :'); ?><br />
<?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br />

<?php echo form_label('Name'); ?><br />
<?php echo form_input(array('id' => 'name', 'name' => 'name')); ?>
<br />
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
</body>
</html>