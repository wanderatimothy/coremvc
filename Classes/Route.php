<?php
namespace Classes;


class Route {


   public static function get($url, $options){
     self::registerRoute('GET',$url,$options);
   }
   public static function post($url, $options){
     self::registerRoute('POST',$url,$options);

   }
   public static function put($url,$options){
     self::registerRoute('PUT',$url,$options);

   }
   public static function patch($url, $options){
     self::registerRoute('PATCH',$url,$options);

   }
   public static function delete($url, $options){
     self::registerRoute('DELETE',$url,$options);
   }

   public static function notFound($options){
     self::registerRoute('404',null,$options);
   }

   public static function registerRoute($method , $url , $callback  ){
    global $routes ;
       $routes[] = array('method'=>$method , 'pattern' => $url , 'callback' => $callback);
   }

   public static function getRoutes(){
     global $routes;
     return $routes;
   }

}
