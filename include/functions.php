<?php
function get_settings($name) {
    static $settings;
    
    if (!isset($settings)) {
      include('settings/settings.php');
    }
    
    return $settings[$name];
  }

function url($path){
    return get_settings('base_path').$path;
}

function db_connect(){
  $connection;
  $connection = mysqli_connect(get_settings('db_server'),get_settings('db_username'),get_settings('db_password'),get_settings('db_database'));
  if(!$connection){
    die('<strong>You were not able to connect to your db becouse '.mysqli_connect_error().'</strong>');
  }
}

function get_connection(){
  $connection;
  $connection = mysqli_connect(get_settings('db_server'),get_settings('db_username'),get_settings('db_password'),get_settings('db_database'));
  if(!$connection){
    die('<strong>You were not able to connect to your db becouse '.mysqli_connect_error().'</strong>');
  } else {
    return $connection;
  }
}

function login(){
  db_connect();
  $result = mysqli_query(get_connection() , "SELECT * FROM users WHERE email = '" . mysqli_real_escape_string(get_connection(), $_POST['email']) . "' AND password = '" . mysqli_real_escape_string(get_connection(), $_POST['password']) . "'");
  if ($row = mysqli_fetch_array($result)) {
    unset($row['password']);
    $_SESSION['user'] = $row;
    header("Location:".url('home.php'));
 // notice('You have been logged in.');
  } else {
 // notice('Ah, sorry, either the username or password was incorrect.');
  }
}

function logout(){
  session_destroy();
  session_start();
  header("Location:".url('home.php'));
  //notice('You have been logged out');
}
?>