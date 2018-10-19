<?php
    $locationid = $_POST["locationID"];
    $programid = $_POST["programID"];

    $content = "";

    if (isset($_POST["enter"])){
        echo print "enter query";
    }

    if ($locationid!=-1){
        $query = "SELECT pl.max_participants FROM program_location as pl, locations as l WHERE pl.idp=$programid AND pl.idl=l.id AND pl.idl=$locationid";
        $maxparticipants = mysqli_fetch_array(mysqli_query(get_connection(), $query));

        $content .= '
        <form action="'.url('account/program.php').'" method="post">
            <span class="program-max-participants">Maximum participants: '.$maxparticipants[0].'</span>
            <div>
                <button type="submit" class="btn btn-primary my-main-button select-program-button">Sign up</button>
                <input type="hidden" name="action" value="enter"/>
            </div>
        </form>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
    <body>
        <?php print $content;?>
    </body>
</html>