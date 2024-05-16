<?php

class Admin extends Controller
{
    public function index()
    {    
  
          $x = new Student();
          $rows = $x->findAll();
         
          $this->view('admin/adminlogin', [
            'admin' => $rows
          ]);
      
    }
    public function adminsetup()
    {
      $x = new Student();
      $rows = $x->findAll();
      $this->view('admin/adminsetup');
    }
   
    public function course_setup()
    {
      $x = new Student();
      $rows = $x->findAll();
      $this->view('admin/course_setup');
    }
    
} 