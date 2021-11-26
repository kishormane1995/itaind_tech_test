<?php

use Illuminate\Support\Facades\Route;

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
    $a = array(
        100, 78, 33, 11, 5, 0
    );
    $out= array();
    for($i=sizeof($a)-1;$i>=0;$i--) {
        $out[]=$a[$i];
    }
    return json_encode($out);
    // return view('welcome');
});

Route::get('/sort', function () {
    $a = array(
        200 ,10,2,4,400,20
    );
    $out= array();
    $i=0;
    $n=sizeof($a);
    while($i<$n){
        $min = min($a);
        $out[] = $min;
        $key = array_search($min, $a);
        if($key!=-1){
            unset($a[$key]);
        }
        $i++;
    }
    // for($i=0;$i<sizeof($a);$i++){
    //     for($j=0;$j<sizeof($a);$j++){
            
    //     }
    // }
    return json_encode($out);
    // return view('welcome');
});
