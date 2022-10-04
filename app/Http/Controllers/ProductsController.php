<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $data = [
            'user_id'=> "34395929532",
            'user_name' =>"Zdravko Colic",
        ];
        return $data;
    } //hmm


    public function GetProductsByCategory($id){

    }
    // not implemented
}
