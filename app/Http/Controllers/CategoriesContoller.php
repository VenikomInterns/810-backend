<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesContoller extends Controller
{

    public function index(){
        $data = [
          'user_id'=> "34395929532",
          'user_name' =>"Zdravko Colic",
        ];
        return $data;
    }
    //this should return categories list, and fetch them from database. 
}
