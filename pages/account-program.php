<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Workout-MS</title>
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
        <div class="account-program">
            <div class="container">
                <div class="text-center account-program-title-location">
                    <h1>Program 1</h1>
                    <h4>Location 1</h4>
                </div>
                <div class="account-program-section account-program-section-participants text-center">
                    <h2>Participants</h2>
                    <h5>7 participants</h5>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="account-program-section-participants-single">
                                <span class="account-program-section-participants-single-icon"></span>
                                <span class="account-program-section-participants-single-name">FirstName LastName</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="account-program-section-participants-single">
                                <span class="account-program-section-participants-single-icon"></span>
                                <span class="account-program-section-participants-single-name">FirstName LastName</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="account-program-section-participants-single">
                                <span class="account-program-section-participants-single-icon"></span>
                                <span class="account-program-section-participants-single-name">FirstName LastName</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="account-program-section-participants-single">
                                <span class="account-program-section-participants-single-icon"></span>
                                <span class="account-program-section-participants-single-name">FirstName LastName</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="account-program-section-participants-single">
                                <span class="account-program-section-participants-single-icon"></span>
                                <span class="account-program-section-participants-single-name">FirstName LastName</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="account-program-section-participants-single">
                                <span class="account-program-section-participants-single-icon"></span>
                                <span class="account-program-section-participants-single-name">FirstName LastName</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="account-program-section-participants-single">
                                <span class="account-program-section-participants-single-icon"></span>
                                <span class="account-program-section-participants-single-name">FirstName LastName</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-program-section account-program-section-posts text-center">
                    <h2>Posts</h2>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-main-button" data-toggle="modal" data-target="#addNewPost">Write a post</button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="addNewPost" tabindex="-1" role="dialog" aria-labelledby="addNewPostTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="addNewPostDetails">Add new post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="name" class="hiden-label">Name:</label>
                                        <input type="text" class="form-control" id="title" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="hiden-label">Write something:</label>
                                        <textarea class="form-control" id="message" rows="3" placeholder="Write something..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-light my-light-button contactus-button">Add image</button>
                                </form>
                            </div>
                            <div class="modal-footer add-new-post-modal-footer">
                                <button type="submit" class="btn btn-primary my-main-button">Post</button>
                                <button type="button" class="btn btn-light my-light-button" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="account-program-section-posts text-left">
                        <div>
                            <h5>Title</h5>
                            <span>By <b>FirstName LastName </b>on 20.10.2018</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae molestie odio. Ut sit amet lectus id dui scelerisque maximus. 
                                Phasellus venenatis a mauris sed molestie. In erat turpis, tempor eu erat consectetur, pharetra luctus augue. In dui lectus, maximus quis 
                                diam vitae, viverra consectetur nunc. Suspendisse bibendum quam sit amet maximus dapibus. Nullam sed elit ut odio mollis hendrerit vel a enim. 
                                Phasellus a dolor nunc. Maecenas urna eros, congue vitae porttitor eu, elementum id odio. Duis tortor ipsum, luctus ac ligula ac, 
                                pulvinar volutpat libero. Vestibulum nisl lacus, cursus mollis purus ut, sollicitudin maximus tellus.
                            </p>
                            <img class="account-program-section-posts-img" src="images/run.jpg" alt="Program image">
                        </div>
                    </div>
                </div>
                <div class="account-program-section account-program-section-photos text-center">
                    <h2>Our photo journey</h2>
                    <div class="text-left">
                        <img class="account-program-section-photos-img" src="images/run.jpg" alt="Program image">
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
    <script src="js/script.js"></script>
    <!-- endinjector -->
</body>
</html>