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

function get_slider(){
  //create slider
  $slider_items = '';
  $slider_indicators = '';
  $slider_item_num = 0;
  $slider_rows = mysqli_query(get_connection() , "SELECT * FROM slider");
  while ($row = mysqli_fetch_array($slider_rows)){
      if ($slider_item_num!=0){
          $slider_items .= '<div class="carousel-item">';
          $slider_indicators .= '<li data-target="#carouselIndicators" data-slide-to="'.$slider_item_num.'"></li>';
      } else {
          $slider_items .= '<div class="carousel-item active">';
          $slider_indicators .= '<li data-target="#carouselIndicators" data-slide-to="'.$slider_item_num.'" class="active"></li>';
      }
      $slider_items .= '
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-5">
                  <h1>'.$row['title'].'</h1>
                  <p>'.$row['text'].'</p>
              </div>
                  <img class="d-block w-100 col-md-5" src="images/'.$row['image'].'" alt="First slide">
              <div class="col-md-1"></div>
          </div>
      </div>';
      $slider_item_num++;
  };

  $slider = '
  <div id="carouselIndicators" class="carousel slide my-slider" data-ride="carousel">
      <ol class="carousel-indicators">'.
          //add slider indicators
          $slider_indicators.'
      </ol>
      <div class="carousel-inner">'.
          //add slider items
          $slider_items.'
      </div>
      <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon align-middle" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>';
  return $slider;
}
?>