<?php 
namespace App\Http\Controllers;



class AdminController extends Controller {
    public function count(){
        $a = 1; 
        $b = 2; 
        $c = $a + $b; 
        
       return view('index')->with('c' , $c);
    }
}