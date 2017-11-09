<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maak contact aan</title>
</head>
<body>

</body>
</html>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<div class="w3-row" id="contact">
    <div class="w3-half w3-teal w3-container" style="height:700px">
        <div class="w3-padding-64 w3-padding-large">
            <h1>Welcome</h1>
            <p class="w3-opacity">Add contact</p>
            <form class="w3-container w3-card w3-padding-32 w3-white" action="/action_page.php" target="_blank">
                <?php echo form_open('Welcome/addContacts'); ?>
                <div class="w3-section">
                    <label><?php echo form_label('ID :'); ?></label>
                    <input class="w3-input"
                           style="width:100%;"><?php echo form_input(array('id' => 'ID', 'name' => 'ID')); ?>
                    <br/></input>
                </div>
                <div class="w3-section">
                    <label><?php echo form_label('Email :'); ?></label>
                    <input class="w3-input"
                           style="width:100%;"><?php echo form_input(array('id' => 'email', 'name' => 'email')); ?>
                    <br/></input>
                </div>
                <div class="w3-section">
                    <label><?php echo form_label('Name'); ?></label>
                    <input class="w3-input"
                           style="width:100%;"><?php echo form_input(array('id' => 'name', 'name' => 'name')); ?>
                    <br/></input>
                </div>
                <div class="w3-section">
                    <label><?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?></label>
                    <input class="w3-input" style="width:100%;"><?php echo form_close(); ?><br/></input>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
    <p>Powered by Team 5</a></p>
</footer>

</body>
</html>
