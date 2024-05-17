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
    public function createstudent()
    {
      $x = new Student();
      $rows = $x->findAll();
      $this->view('admin/createstudent');
    }
   
    public function studentrecord()
    {
      $x = new Student();
      $rows = $x->findAll();
      $this->view('admin/studentrecord');
    }

    public function studentsearch()
    {
      $x = new Student();
      $rows = $x->findAll();
      $this->view('admin/studentsearch');
    }
    
} 