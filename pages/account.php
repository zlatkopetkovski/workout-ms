<?php

$title = 'Log in';

if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
      
      case 'logout':
        session_destroy();
        session_start();
        header("Location:".url('home.php'));
        //notice('You have been logged out');
        break;
      
      case 'login':
        $result = mysqli_query($connection , "SELECT * FROM users WHERE email = '" . mysqli_real_escape_string($connection, $_POST['email']) . "' AND password = '" . mysqli_real_escape_string($connection, $_POST['password']) . "'");
        if ($row = mysqli_fetch_array($result)) {
          unset($row['password']);
          $_SESSION['user'] = $row;
          header("Location:".url('home.php'));
         // notice('You have been logged in.');
        } else {
         // notice('Ah, sorry, either the username or password was incorrect.');
        }
        break;
      
    }
  }

if (isset($_SESSION['user'])) {
    $content = '
    <div class="account">
    <div class="container">
        <div class="account-title text-center">
            <h1>My account</h1>
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
                <h4>First and last name</h4>
                <label>Email address</label>
                <h4>email@address.com</h4>
                <span>Joined on 01.01.2018</span>                        
            </div>
            <div class="col-12 text-center">
                <a href="account-edit.html" class="btn btn-primary  my-main-button">Change my personal info</a>
            </div>
        </div>
        <div class="account-section account-section-programs">
            <div class="col-12 text-center">
                <h2>My programs</h2>
                <div class="row account-section-programs-block">
                    <div class="row col-6">
                        <div class="col-12 text-left d-flex align-items-center">
                            <a href="account-program.html">
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
                                <a href="account-program.html">
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
</div>';

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
                        <a class="my_main_link" href="'.url('register.php').'"><h5>Not a member? Sign up here</h5></a>
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