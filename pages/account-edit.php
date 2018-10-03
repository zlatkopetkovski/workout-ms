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
                <div class="row account-section">
                    <div class="col-12 text-center">
                        <h2>Change my personal info</h2>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <form action="#">
                            <div class="form-group">
                                <label for="name" class="hiden-label">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="First and last name">
                            </div>
                            <div class="form-group">
                                <label for="current-pass" class="hiden-label">Current-password:</label>
                                <input type="password" class="form-control" id="current-pass" placeholder="Current-password">
                            </div>
                            <div class="form-group">
                                <label for="email" class="hiden-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label for="new-pass" class="hiden-label">New-password:</label>
                                <input type="password" class="form-control" id="current-pass" placeholder="New-password">
                            </div>
                            <div class="form-group">
                                <label for="Conf-pass" class="hiden-label">Confirm-password:</label>
                                <input type="password" class="form-control" id="current-pass" placeholder="Confirm-password">
                            </div>
                            <div class="form-group col-12 text-center">
                                <span>Profile picture</span>
                                <span class="account-section-info-img"></span>
                                <button type="submit" class="btn btn-light my-light-button">Change</button>
                                <button type="submit" class="btn btn-light my-light-button">Remove</button>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary my-main-button">Save changes</button>
                                <button type="submit" class="btn btn-light my-light-button">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
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