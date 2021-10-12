<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    echo "hellow";
});

//
Route::get('/hi/{garda}', function($name) {
    echo "hellow " . $name;
});

//Default Parameter
Route::get('/data/{data?}', function($data="Kosong"){
    return "Isi Parameter = " . $data;
});

//Regular Expression
Route::get('/name/{nama}', function($nama){
    return "Hellow " .$nama;
})->where('nama', '[A-Za-z]+');

//Regular Expression Menggunakan Array jika Nama hanya dimasukan huruf dan nrp dimasukan angka
Route::get('/mahasiswa/{nrp}/{nama}', function($nama, $nrp){
    echo "Selamat datang ".$nrp. " " .$nama;
})->where([
    'nama', '[A-Za-z]+',
    'nrp', '[0-9]+',
]);

//Pengecekan Bilangan
Route::get('/cekbilangan/{bilangan}', function($bilangan){
  if ($bilangan %2 == 0) {
      echo "{$bilangan} Bilangan Anda Genap";
  }else {
      echo "{$bilangan} Bilangan Anda Ganjil";
  }
});


Route::get('/deretbilangan/{deret}', function($deret){
    for ($i=0; $i <= $deret; $i++) { 
        if ($i %2 == 0) {
            echo "{$i}Bilangan Genap";
        }else {
            echo "{$i}Bilangan Ganjil";
        }
    }
});