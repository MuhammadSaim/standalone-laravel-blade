<?php

use Standalone\Blade\Blade;

if(!function_exists('view')){
    function view(Blade $instance, $view = null, $data = [], $extraData = []){
        $factory = $instance->view();
        if(func_num_args() === 1){
            return $factory;
        }
        return $factory->make($view, $data, $extraData);
    }
}