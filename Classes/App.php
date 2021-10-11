<?php
 namespace Classes;
 use Classes\Bramus\Router;
 class App {

   function __construct(Router $Router ,array $options ){
     $this->loadResource($options['global_helper_path']);
     $Router = $this->register(function() use ($Router , $options){
      $this->loadResource($options['route_register_path']);
       foreach(Route::getRoutes() as $route){
         switch ($route['method']) {
            case 'GET':
              $Router->get($route['pattern'],$route['callback']);
             break;
             case 'POST':
              $Router->get($route['pattern'],$route['callback']);
             break;
             case 'PUT':
              $Router->get($route['pattern'],$route['callback']);
             break;
             case 'PATCH':
              $Router->get($route['pattern'],$route['callback']);
             break;
             case 'DELETE':
              $Router->get($route['pattern'],$route['callback']);
             break;
             case '404':
              $Router->set404($route['callback']);
             break;
         }
       }
       return $Router;
     });
     $Router->run();

   }

   function loadResource($resource ){
     $file = str_replace(".",DIRECTORY_SEPARATOR , $resource) . '.php';
     if(file_exists($file)){
       include_once($file);
     }
     else{
       throw new \Exception("Could not load resource", 1);
     }
   }

   function register($callback){
     return  call_user_func($callback);
   }
 }


 ?>
