<?php

$title = 'Log in';

if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
      
      case 'logout':
        logout();
        break;
      
      case 'login':
        login();
        break; 
    }
}

if (isset($_REQUEST['remove'])){
    $query = "DELETE FROM users WHERE id = $_REQUEST[remove]";
    mysqli_query(get_connection(),$query);
}

if (isset($_SESSION['user'])) {
    $title = 'Account';
    $user = get_user_data();
    $page_heading = "My account";
    if ($user["id_role"] == "admin"){
        $page_heading = "Dashboard";
    }
    $content = '
    <div class="account">
    <div class="container">
        <div class="account-title text-center">
            <h1>'.$page_heading.'</h1>
        </div>
        <div class="row account-section account-section-info">
            <div class="col-12 text-center">
                <h2>Personal info</h2>
            </div>
            <div class="col-md-2">
                <span class="account-section-info-img"></span>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-9 account-section-info-data">
                <label>First and last name</label>
                <h4>'.$user['full_name'].'</h4>
                <label>Email address</label>
                <h4>'.$user['email'].'</h4>
                <span>TODO:Joined on 01.01.2018</span>                        
            </div>
            <div class="col-12 text-center">
                <a href="'.url('account/edit.php').'" class="btn btn-primary  my-main-button">Change my personal info</a>
            </div>
        </div>';

        if ($user["id_role"] == "regular"){
        $content .= '<div class="account-section account-section-programs">
            <div class="col-12 text-center">
                <h2>My programs</h2>
                <div class="row account-section-programs-block">
                    <div class="row col-6">
                        <div class="col-12 text-left d-flex align-items-center">
                            <a href="account/program.php">
                                <h4>Program 1</h4>
                            </a>
                        </div>
                    </div>
                    <div class="row col-6  d-flex align-items-center account-section-programs-block-details">
                        <div class="col-4">
                            <span>7 participants</span>
                        </div>
                        <div class="col-4">
                            <span>Location 1</span>
                        </div>
                        <div class="col-4 account-section-programs-block-details-date">
                            <span>Signed up on 20.09.2018</span> 
                        </div>
                    </div>
                </div>

                <div class="row account-section-programs-block">
                        <div class="row col-6">
                            <div class="col-12 text-left d-flex align-items-center">
                                <a href="account/program.php">
                                    <h4>Program 2</h4>
                                </a>
                            </div>
                        </div>
                        <div class="row col-6  d-flex align-items-center account-section-programs-block-details">
                            <div class="col-4">
                                <span>4 participants</span>
                            </div>
                            <div class="col-4">
                                <span>Location 3</span>
                            </div>
                            <div class="col-4 account-section-programs-block-details-date">
                                <span>Signed up on 20.09.2018</span> 
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-12 text-center">
                <a href="'.url('index.php').'#programs" class="btn btn-primary  my-main-button">Explore all programs</a>
            </div>
        </div>
    </div>
</div>';}
elseif($user["id_role"] == "admin"){
    //all programs
    $programs_block = '';
    $program_rows = mysqli_query(get_connection(), "SELECT * FROM programs");
    $number_of_programs = 0;
    while ($program_row = mysqli_fetch_array($program_rows)){
        $number_of_programs++;
        $number_locations = mysqli_fetch_assoc(mysqli_query(get_connection(), "SELECT COUNT(*) AS NumberOfLocations FROM program_location WHERE idp = $program_row[id]"));

        $programs_block .='
        <div class="row default-block default-block-border">
            <div class="row col-6">
                <div class="col-12 text-left d-flex align-items-center">
                    <a href="'.url('program.php').'?id='.$program_row['id'].'">
                        <h4>'.$program_row['title'].'</h4>
                    </a>
                </div>
            </div>
            <div class="row col-6  flex-row-reverse align-items-center account-section-programs-block-details">
                <span>'.$number_locations['NumberOfLocations'].' locations</span> 
            </div>
        </div>';
    }

    //all participants
    $participants_block = '';
    $participant_rows = mysqli_query(get_connection(), "SELECT * FROM users WHERE id_role = 'regular'");
    $number_of_participant = 0;
    while ($participant_row = mysqli_fetch_array($participant_rows)){
        $number_of_participant++;
        $participants_block .='
        <form action="'.url('account.php').'" method="post">
        <div class="row default-block default-block-border">
            <div class="row col-6">
                <div class="col-12 text-left d-flex align-items-center">
                    <a href="#">
                        <h4>'.$participant_row['full_name'].'</h4>
                    </a>
                </div>
            </div>
            <div class="row col-6  flex-row-reverse align-items-center account-section-programs-block-details">
                <button type="submit" name="remove" value="'.$participant_row['id'].'" class="btn btn-light  my-light-button default-block-button">Delete participant</button>
            </div>
            <div class="row col-12">
                <div class="col-12 text-left d-flex align-items-center default-block">
                    <span>Program 1</span>
                </div>
                <div class="col-12 text-left d-flex align-items-center">
                    <span>Program 2</span>
                </div>
            </div>
        </div>
        </form>
        ';
    }

    $content .='<div class="default-section default-section-bottom-line">
    <div class="col-12 text-center">
        <h2 class="default-section-title">Programs</h2>
        <span>'.$number_of_programs.' programs</span>
        <div class="col-12 text-center">
            <button type="submit" name="addNew" value="Add new program" class="btn btn-primary  my-main-button default-section-button">Add new program</button>
        </div>
        '.
        $programs_block
        .'
    </div>
</div>

<div class="row default-section default-section-bottom-line">
    <div class="col-12 text-center">
        <h2 class="default-section-title">Participants</h2>
        <span>'.$number_of_participant.' participants</span>
        '.
        $participants_block
        .'
    </div>
</div>

</div>
</div>';
}

} else{
    $content ='
        <div class="login">
            <div class="container">
                <div class="text-center  go_back-margin">
                    <a class="go_back-link" href="index.php">
                        <span class="go_back">Go back to Home</span>
                    </a>
                </div>
                <h1 class="d-flex justify-content-center">Login</h1>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 text-center login-separator login-margin">
                        <span class="login-margin">Login with your email address</span>
                        <form action="account.php" method="post">
                            <div class="form-group">
                                <label for="email" class="hiden-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label for="password" class="hiden-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="text-right login-forgot-pass">
                                <a class="" href="#">Forgot password?</a>
                            </div>
                            <button type="submit" href="account.php" class="btn btn-primary my-main-button login-button">Log in</button>
                            <input type="hidden" name="action" value="login" />
                        </form>
                        <div class="login-register">
                            <h5><a href="'.url('register.php').'">Not a member? Sign up here</a></h5>
                        </div>
                    </div>
                    <div class="col-md-4 text-center login-margin">
                        <span class="login-margin">Or login with your social media account</span>
                        <a href="https://facebook.com" target="_blank" class="btn btn-block btn-primary login-button-facebook">Login with Facebook</a>
                        <a href="https://twitter.com" target="_blank" class="btn btn-block btn-primary login-button-twitter">Login with Twitter</a>
                        <a href="https://google.com" target="_blank" class="btn btn-block btn-primary login-button-google">Login with Google</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>';
}