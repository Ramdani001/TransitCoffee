<?php error_reporting(1);

  include "config/database.php";
  include "config/session.php";

  // BASE URL
  $base_url = "http://localhost:8080";
  $project_location = "/Coffee-Shop";

  // Global Variable
  $vars = explode("/",$_SERVER['REQUEST_URI']);
  $main_url = $base_url."/".$vars[1]."/";
  // End Global Variable

  $request = $_SERVER['REQUEST_URI'];
  $me = $project_location;

  try{
    switch ($request) {
      case $me.'/' : require "view/home.php"; break;
      case $me.'/Menu' : require "view/Menu.php"; break;
      default:
        http_response_code(404); require "view/404.php";
        break;
    }
  }catch(\err){
    http_response_code(419);
  }

?>