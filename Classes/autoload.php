<?php
spl_autoload_register(function($classname){
  $file = str_replace("\\",DIRECTORY_SEPARATOR,$classname) . ".php";
  if(file_exists($file)){
    include_once($file);
  }
});

 ?>
