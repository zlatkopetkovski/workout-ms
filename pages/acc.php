<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Project 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- injector:css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- endinjector -->
</head>
<body>

    <header>
      <nav class="navbar navbar-expand-sm my-nav">
        <div class="container">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand navbar-textual" href="index.html">
                    <h1>ACME</h1>
                </a>
            </div>
            <div class="d-flex justify-content-end my-nav-login dropdown">
                <a href="login.html" data-toggle="dropdown">
                    <span class="my-nav-login-icon-description"><b>First and Last name</b></span>
                    <span class="my-nav-login-icon" title="account" aria-hidden="true"></span>
                </a>
                <div class="dropdown-menu my-nav-dropdown-menu">
                    <a class="dropdown-item" href="account.html">My account</a>
                    <a class="dropdown-item" href="index.html">Log out</a>
                </div>
            </div>
        </div>
      </nav>
    </header>

    <main>
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
                        <a href="index.html#programs" class="btn btn-primary  my-main-button">Explore all programs</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="my-footer">
            <div class="container">
                <div class="d-flex justify-content-between"> 
                    <div>
                        <h3>ACME</h3>
                        <p>&copy 2018</p>
                    </div>
                    <div class="my-footer-social"> 
                        <div class="my-footer-social-icon-box">
                            <a href="https://facebook.com" target="_blank"><span class="my-footer-social-facebook"></span></a>
                        </div>
                        <div class="my-footer-social-icon-box">
                            <a href="https://twitter.com" target="_blank"><span class="my-footer-social-twitter"></span></a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </footer>

    <!-- injector:js -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="js/script.js"></script>
    <!-- endinjector -->
</body>
</html>