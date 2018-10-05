<?
$title = 'program';
if (isset($_REQUEST['action']) && $_REQUEST['action']=='enter'){
    header("Location:".url('account/program.php'));
}
$content = '
    <div class="program">
        <div class="container">
            <div class="text-center go_back-margin">
                <a class="go_back-link" href="'.url('home.php').'#programs">
                    <span class="go_back">Go back to all programs</span>
                </a>
            </div>
            <img class="d-block w-100" src="images/program1.jpg" alt="First slide">
            <h1 class="d-flex justify-content-center program-elements-margin">Program 1</h1>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <p>
                        Etiam consectetur id ante dictum dictum. Proin hendrerit, sapien nec scelerisque lacinia, eros sapien pharetra turpis, 
                        ac placerat odio sem eu nibh. Donec sit amet lacus aliquet, mattis quam vitae, vehicula felis. Integer vitae diam erat. 
                        Sed sollicitudin tortor quis vulputate iaculis. Cras ultricies eu magna vel pretium. Curabitur eget pulvinar augue.
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row program-elements-margin">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <span class="program-max-participants">Max 8 participants</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <form action="program.php" method="post">
                        <div class="form-group">
                            <label class="hiden-label" for="selectLocation">Select location:</label>
                            <select id="selectLocation" name="selectLocation" class="form-control">
                                <option>Select location</option>
                            <option>Location 1</option>
                            </select>
                        </div>
                        <button type="submit" href="program.php" class="btn btn-primary my-main-button select-program-button">Sign up</button>
                        <input type="hidden" name="action" value="enter" />
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>';
?>