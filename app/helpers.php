<?php 

define('MYSQL_HOST', 'eu-cdbr-west-01.cleardb.com');
define('MYSQL_USER', 'b042e8a8530af9');
define('MYSQL_PWD', '82c568a7');
define('MYSQL_DB', 'heroku_ff75782c2d5fda1');

function dd($data, $die=true){
echo '<pre>';
print_r($data);
echo '</pre>';
if($die){
  die;
} else {
  echo '<hr>';
}
}
function str_random($length = 30) {
  
  $characters = '0123456789';
  $characters .= 'abcdefghijklmnopqrstuvwxyz';
  $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  
  $max = strlen($characters) - 1;
  $randomString = '';

  for ($x = 0; $x < $length; $x++) {
    
    $randomString .= $characters[ rand(0, $max) ];
    
  }

  return $randomString;
  
}


function get_footer($page = 'footer'){
  include "tpl/$page.php";
}

function get_header($page = 'header'){
  global $page_title;
  include "tpl/$page.php";
}

function old($fn){
  return $_REQUEST[$fn] ?? '';
}

function email_exist($link, $email){

  $exist = false;
  $sql = "SELECT email FROM users WHERE email = '$email'";
  $result = mysqli_query($link, $sql);

  if( $result && mysqli_num_rows($result) ){
    $exist = true;
  }

  return $exist;

}