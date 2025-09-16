<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotfolioController extends Controller
{
    public function home(){
        return view('website.frontend.home');
    }
    public function potfolio(){
        return view('website.frontend.portfolio.python');
    }
    public function coffee(){
        return view('website.frontend.portfolio.coffee');
    }
    public function bird(){
        return view('website.frontend.portfolio.flappy');
    }
    public function development(){
        return view('website.frontend.services.customwebdevelopment');
    }
    public function frontend(){
        return view('website.frontend.services.frontend');
    }
    public function backend(){
        return view('website.frontend.services.backend'); 
    }
    public function version(){
        return view('website.frontend.services.version');
    }
    public function solution(){
        return view('website.frontend.services.solution');
    }
    public function suppot(){
        return view('website.frontend.services.support');
    }  
    public function box(){
        return view('website.frontend.portfolio.box1');
    }  
    
       
}
