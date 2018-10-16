<?php 
$title = 'Program XXX';

if (!isset($_SESSION['user'])){
    header("Location:".url('account.php'));
}

if (isset($_POST['newPost'])){
    $currentDir = getcwd();
    $uploadDir = '/images/uploads/';

    $image = $_FILES['image'];
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $imageError = $_FILES['image']['error'];
    $imageType = $_FILES['image']['type'];
    
    $fileExt = explode('.', $imageName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array ('jpg', 'jpeg', 'png');

    //if there is no image selected
    $imageUploaded = false;
    if ($fileActualExt!=""){
        if (in_array($fileActualExt, $allowed)){
            if ($imageError === 0){
                if ($imageSize < 1000000){
                    $imageUploaded = true;
                    $newImageName = uniqid('', true).'.'.$fileActualExt;
                    $fileDest = $currentDir.$uploadDir.$newImageName;
                    move_uploaded_file($imageTmpName, $fileDest);
                } else {
                    echo "file is too big";
                }
            } else {
                echo "error uploading file";
            }
        } else {
            echo "unsuporter file";
        }   
    }
    $postTitle = mysqli_real_escape_string(get_connection(), $_POST['title']);
    $postContent = mysqli_real_escape_string(get_connection(), $_POST['content']);
    $userName = $user['full_name'];
    $datetime = date("d-M-Y");

    if ($imageUploaded){
        $query = "INSERT INTO posts (title, content, image, id_user, id_pl, upload_date) VALUES ('$postTitle ', '$postContent','$newImageName', '$user[id]', '1', NOW())";
    } else {
        $query = "INSERT INTO posts (title, content, id_user, id_pl, upload_date) VALUES ('$postTitle', '$postContent', '$user[id]', '1', NOW())";
    }
    mysqli_query(get_connection(),$query);
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
                    <form action="'.url('account/program.php').'" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="hiden-label">Name:</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="content" class="hiden-label">Write something:</label>
                                <textarea class="form-control" id="content" name="content" rows="3" placeholder="Write something..."></textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="addImage" name="image">
                                <label class="custom-file-label my-file-label form-control-file" for="addImage">Insert image</label>
                            </div>
                        </div>
                        <div class="modal-footer add-new-post-modal-footer">
                            <button type="submit" class="btn btn-primary my-main-button" name="newPost" value="save">Post</button>
                            <button type="button" class="btn btn-light my-light-button" data-dismiss="modal">Close</button>
                        </div>
                    </form>
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
