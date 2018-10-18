<?php
    $value = $_POST["locationID"];

    $content = "";
    $content .= "<span class=\"program-max-participants\">$value</span>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
    <body>
        <?php print $content;?>
    </body>
</html>