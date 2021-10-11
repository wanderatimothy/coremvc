<?php

namespace Classes;


class Request {

   function method():string{
      return $_SERVER['REQUEST_METHOD'];
   }

   function getRequestBody(){
     if($this->method() == 'GET'){
       return [];
     }
     if($this->method() == 'POST' && !empty($_POST)){
       $body = $_POST;
       if(!empty($_FILES)){
         foreach($_FILES as $file){
           $body[$file['name']] = $file;
         };
       }
       return $body;
     }
   }

   function input(string $key ){
     $body = $this->getRequestBody();
     return $body != [] ? $body[$key] : null;
   }



}


 ?>
