<?php

namespace App\Controllers;


class Latihan extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'CV'
        ];
        return view('/pages/home', $data);
 
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('/pages/about', $data);
 
    }
    public function skill()
    {
        $data = [
            'title' => 'My Skill'
        ];
        return view('/pages/skill', $data);
 
    }
    public function experience()
    {
        $data = [
            'title' => 'Experience'
        ];
        return view('/pages/experience', $data);
 
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];
        return view('/pages/contact', $data);
 
    }
   
}

   

