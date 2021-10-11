<?php

namespace Classes;
use Classes\Request;

class Controller {


   function loadHelper(string $name){
     $file = str_replace(".",DIRECTORY_SEPARATOR , $name) . '.php';
     if(file_exists($file)){
       include_once($file);
     }
   }

   function statusCode(int $code){
     http_response_code($code);
   }


   function getRequest(){
     return new Request;
   }



}


 ?>
