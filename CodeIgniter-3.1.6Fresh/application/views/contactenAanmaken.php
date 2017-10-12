<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maak contact aan</title>
</head>
<body>

<form action="<?php echo site_url('Welcome/addContacts/uri')?>" method ="post" >
    ID:<br>
    <input type="text" id="ID">
    <br>
    Name:<br>
    <input type="text" id="name">
    <br>
    E-mail:<br>
    <input type="text" id="email">
    <br><br>
    <input type="submit" value="Aanmaken">
</form>
</body>
</html>