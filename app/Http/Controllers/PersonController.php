<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Memvuat attribute Name
    private $name = 'Rudy Sofyan';

    //Membuat Method Index
    public function index(){
        //Mengembalikan nilai attribute name
        return $this->name;
    }

    public function show($param){
        //Merubah Attribut Name 
        $this-> name = $param;
        return $this->name;
        //Membaca Atribut yang berada pada parameter
    }
}
