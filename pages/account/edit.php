<?php
$title = "Edit account";
if (!isset($_SESSION['user'])) {
    header("Location:".url('account.php'));
} else {
    $user = get_user_data();

    if (isset($_REQUEST['edit'])) {
        switch ($_REQUEST['edit']) {
        
        case 'change':
            echo print("");
            break;
        
        case 'remove':
            echo print("");
            break; 

        case 'save':
            change_user_informations(); 
            break; 

        case 'cancel':
            header("Location:".url('account.php'));
            break; 
        }
    }

    $content='
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
                    <form action="'.url('account/edit.php').'" method="post">
                        <div class="form-group">
                            <label for="name" class="hiden-label">Name:</label>
                            <input type="text" class="form-control" id="name" value="'.$user['full_name'].'">
                        </div>
                        <div class="form-group">
                            <label for="email" class="hiden-label">Email:</label>
                            <input type="email" class="form-control" id="email" value="'.$user['email'].'">
                        </div>
                        <div class="form-group">
                            <label for="current-pass" class="hiden-label">Current-password:</label>
                            <input type="password" class="form-control" id="current-pass" name="current-pass" placeholder="Current-password">
                        </div>
                        <div class="form-group">
                            <label for="new-pass" class="hiden-label">New-password:</label>
                            <input type="password" class="form-control" id="new-pass" placeholder="New-password">
                        </div>
                        <div class="form-group">
                            <label for="conf-pass" class="hiden-label">Confirm-password:</label>
                            <input type="password" class="form-control" id="conf-pass" placeholder="Confirm-password">
                        </div>
                        <div class="form-group col-12 text-center">
                            <span>Profile picture</span>
                            <span class="account-section-info-img"></span>
                            <button type="submit" class="btn btn-light my-light-button" name="edit" value="change">Change</button>
                            <button type="submit" class="btn btn-light my-light-button" name="edit" value="remove">Remove</button>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary my-main-button" name="edit" value="save">Save changes</button>
                            <button type="submit" class="btn btn-light my-light-button" name="edit" value="cancel">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>';
}