<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Memvuat attribute Name
    private $contoh = 'Rudy Sofyan';
    private $code = "190313014";
    private $name = "Garda";

    //Membuat Method Index
    public function index(){
        //Mengembalikan nilai attribute name
        return view("person.index");
    }

    public function show($param){
        //Merubah Attribut Name 
        $this-> name = $param;
        return $this->name;
        //Membaca Atribut yang berada pada parameter
    }
    
    public function sendData (){
        $code = $this->code;
        $name = $this->name;
        return view("person.sendData", compact('code','name'));
}
}
