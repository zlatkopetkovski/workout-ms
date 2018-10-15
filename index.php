<?php

// Start the session.
session_start();

// Moved functions to their own file so we can use them in page files.
include('include/functions.php');

// Connect to the database.
db_connect();

// If this is index.php, we won't get a path, so we need to set it.
$path = isset($_GET['path']) ? $_GET['path'] : 'home.php';



// Produce some variables to use in the template.
$company_name = get_settings('company_name');
$year = date('Y');

// Show log in / log out links.

if (isset($_SESSION['user'])){
    $user = get_user_data();
    if ($user["id_role"]=="regular"){
        $login_logout = '
        <div class="d-flex justify-content-end my-nav-login dropdown">
            <a href="'.url('account.php').'" data-toggle="dropdown">
                <span class="my-nav-login-icon-description"><b>'.$user["full_name"].'</b></span>
                <span class="my-nav-login-icon" title="account" aria-hidden="true"></span>
            </a>
            <div class="dropdown-menu my-nav-dropdown-menu">
                <a class="dropdown-item" href="'.url('account.php').'">My account</a>
                <a class="dropdown-item" href="'.url('account.php').'?action=logout">Log out</a>
            </div>
        </div>
    ';
    } elseif ($user["id_role"]=="admin"){
        $login_logout = '
        <div class="d-flex justify-content-end my-nav-login dropdown">
            <a href="'.url('account.php').'" data-toggle="dropdown">
                <span class="my-nav-login-icon-description"><b>'.$user["full_name"].'</b></span>
                <span class="my-nav-login-icon" title="account" aria-hidden="true"></span>
            </a>
            <div class="dropdown-menu my-nav-dropdown-menu">
                <a class="dropdown-item" href="'.url('account.php').'">Dashboard</a>
                <a class="dropdown-item" href="#">Statistics</a>
                <a class="dropdown-item" href="'.url('account.php').'?action=logout">Log out</a>
            </div>
        </div>
    ';
    }
    
} else{
    $login_logout = '
        <div class="d-flex justify-content-end my-nav-login">
        <a href="'.url('account.php').'">
                <span class="my-nav-login-icon-description">Log in</span>
                <span class="my-nav-login-icon" title="account" aria-hidden="true"></span>
            </a>
        </div>';
}

// Include the file that matches the path name.
include('pages/' . $path);

//$notices = get_notices();

include('include/template.php');