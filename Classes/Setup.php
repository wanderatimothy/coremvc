<?php
namespace Classes;

class Setup {
  // framework configurations
  public static $configs  = [
    'app_name'=>'serv',
    'global_helper_path' => 'Classes.Global.Helpers.global',
    'route_register_path' => 'Routes.web',

  ];


  public static $static_assets = [
    '__asset_dir__' =>  'Public\assets',
  ];


}

 ?>
