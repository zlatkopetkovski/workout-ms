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
  global $connection;
  $connection = mysqli_connect(get_settings('db_server'),get_settings('db_username'),get_settings('db_password'),get_settings('db_database'));
  if(!$connection){
    die('<strong>You were not able to connect to your db becouse '.mysqli_connect_error().'</strong>');
  }
}
?>