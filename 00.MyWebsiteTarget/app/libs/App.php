<?php 

class App{
    private $controller = 'home';
    private $method = 'index';
    private $params = [];

    public function __construct(){
        $url = $this->getUrl();
        if(!empty($url)):
            if(file_exists('../app/controllers/' . $url[0] . '.php')):
                $this->controller = $url[0];
                unset($url[0]);
            endif;
        endif;

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if(isset($url[1])):
            if(method_exists($this->controller,$url[1])):
                $this->method = $url[1];
                unset($url[1]);
            endif;
        endif;

        if(!empty($url)){
            $this->params = array_values($url);
        }

        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    private function getUrl(){
        if(isset($_GET['url'])){
            $url = trim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }

}