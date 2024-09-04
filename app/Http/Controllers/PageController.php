<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Mi Amor';
       }
    
       public function about() {
        return 'Hanum Mufida A (2241760042)';
       }

       public function articles($id){
        return 'Page Articles with ID' . $id;
       }
       
}