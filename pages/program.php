<?
$title = 'program';

global $location;
$id = $_GET['id'];
json_encode($id);

if (!isset($_REQUEST['action'])&&$id!=''){
    $query = "SELECT * FROM programs WHERE id=$id";
    $program = mysqli_fetch_array(mysqli_query(get_connection(), $query));
    if (count($program)==0){
        header("Location:".url('home.php#programs'));  
    } else {
        $options = '';
        $query = "SELECT l.address, l.id, pl.max_participants FROM program_location as pl, locations as l WHERE pl.idp=$id AND pl.idl=l.id";
        $locations = mysqli_query(get_connection(), $query);

        while ($location = mysqli_fetch_array($locations)){
            $options .= '<option id="location" value="'.$location['id'].'">'.$location['address'].'</option>';
        }
    }
} else {
    header("Location:".url('home.php#programs'));
}

//SELECT * FROM $query WHERE id=
$content = '
    <div class="program">
        <div class="container">
            <div class="text-center go_back-margin">
                <a class="go_back-link" href="'.url('home.php').'#programs">
                    <span class="go_back">Go back to all programs</span>
                </a>
            </div>
            <img class="d-block w-100" src="images/'.$program['image'].'" alt="First slide">
            <h1 class="d-flex justify-content-center program-elements-margin">'.$program['title'].'</h1>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <p>'.
                        $program['details']
                        .'
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                        <div class="form-group">
                            <label class="hiden-label" for="selectLocation">Select location:</label>
                            <select id="selectLocation" name="selectLocation" class="form-control">
                                <option value="-1">Select location</option>
                                '.
                                $options
                                .'
                            </select>
                        </div>
                        <div id="max-for-location" class="col-md-11">
                        
                        </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>';
?>