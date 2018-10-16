<?php 
$title = 'Program XXX';

if (!isset($_SESSION['user'])){
    header("Location:".url('account.php'));
}

$content='
<div class="account-program">
    <div class="container">
        <div class="text-center account-program-title-location">
        <h1>'.$title.'</h1>
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
                    <img class="account-program-section-posts-img" src="'.url('images/run.jpg').'" alt="Program image">
                </div>
            </div>
        </div>
        <div class="account-program-section account-program-section-photos text-center">
            <h2>Our photo journey</h2>
            <div class="text-left">
                <img class="account-program-section-photos-img" src="'.url('images/run.jpg').'" alt="Program image">
            </div>
        </div>
    </div>
</div>';
