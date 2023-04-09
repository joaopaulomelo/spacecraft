<?php

namespace app\Http\Controllers;

use League\Plates\Engine;

class Controller
{
public static function view(string $view, array $data = []){
    $viewsPath = dirname(__FILE__, 4) . "/templates";
    if(!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . ".php")) {
      throw new \Exception("the view{$view} does not exist");
    }
    $templates = new Engine($viewsPath);
    echo $templates->render($view, $data);
}
}