<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ='welcome to stage project' ; 
        return view('pages.index') -> with ('title' , $title);
    }
     public function about(){
        return view('pages.about');
    }
     public function services(){
        $data = array(
            'title' => 'services' ,
            'services' => ['web design ' , 'programming' , 'seo'],
            
        );
        return view('pages.services')->with($data);
    }
}
