<?php
echo"sdjfk";

class App{
    private $controller = 'home';
    private $method = 'index';

    static public  function splitUrl(){
    $url = $_GET['url'] ?? 'home'; 
    $url =  explode("/",$url);
    return $url;
}


public function loadController(){
    $url = self::splitUrl();
    $filename = "../app/controllers/".ucfirst($url[0])."Controller.php";
    if(file_exists($filename)){
        require $filename;
        $this->controller = ucfirst($url[0]);
    }else{
        $filename = "../app/controllers/_404Controller.php";
        require $filename;
        $this->controller = "_404";
    }
    $controller = new $this->controller;
    call_user_func_array([$controller,$this->method],[]);
}


}
?>