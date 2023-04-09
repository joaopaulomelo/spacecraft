<?php

namespace app\Http\Controllers;

const URL = "http://localhost:3000/spaceships";

class ApiController
{

    public function list()
    {
        $result = json_decode(file_get_contents(URL));
        return Controller::view("list", compact('result'));
    }

    public function listAll()
    {
        $result = json_decode(file_get_contents(URL));
        return Controller::view("listall", compact('result'));
        
    }
}
