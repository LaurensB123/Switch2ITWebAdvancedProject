<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head><title>Hello world</title></head>
    <body>
        <h1>Contactenlijst</h1>
        <ul>
            <?php
            foreach ($contacten as $contact) {
                ?>
                <li>
                    <?php print($contact->getID() . "," . $contact->getEmail() . "," . $contact->getName());?>
                </li>
                <?php
            }
            ?>
        </ul>
    </body>
</html>