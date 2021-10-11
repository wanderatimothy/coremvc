<?php
use Classes\Request;
// returns the file extension
function extension(string $filename) {
  return pathinfo($filename,PATHINFO_EXTENSION);
}

/**
 *  returns formated date string
 * */
function f_date(string $date , string $format){
  return date_format(date_create($date),$format);
}
function base_url(){
  if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] .'/'. \Classes\Setup::$configs['app_name'] . '/';
}
function asset($name){
  return base_url() . $name;
}
function view(string $name , array $data = [] ){
  $file ='Resources/Views/' . str_replace(".",DIRECTORY_SEPARATOR , $name) . '.php';
  if(file_exists($file)){
    extract($data);
    include_once($file);
    return true;
  }else{
    echo '<b> 404 :)  view not found! </b>';
    return false;
  }
}
// die and dump
function dd($variable){
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  die;
};

// access the request object
function request(){
  return new Request;
}
