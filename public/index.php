<?php
require "../vendor/autoload.php";
require "../routes/web.php";

try {
    $uri = parse_url($_SERVER["REQUEST_URI"]);
    $request = $_SERVER["REQUEST_METHOD"];
    $parts = explode('@', $routes[$request][$uri['path']]);
    $action = $parts[1];
    $controller = $parts[0];

    if (!isset($routes[$request])) {
        throw new Exception("route does not exist!");
    }
 
    try {
        $controllerNamespace = "app\\Http\\Controllers\\{$controller}";
        if (!class_exists($controllerNamespace)) {
            throw new Exception("The controller {$controller} does not exist!");
        }
        $controllerInstance = new $controllerNamespace();
        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("The method {$action} does not exist in the controller {$controller}!");
        }
        $controllerInstance->$action();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} catch (Exception $e) {
    $e->getMessage();
}
