<?php

class Students extends Controller
{
    public function index()
    {    
  
          $x = new Student();
          $rows = $x->findAll();
         
          $this->view('students/studentlogin', [
            'students' => $rows
          ]);
      
    }
    public function studentchangepass()
    {
      $x = new Student();
      $rows = $x->findAll();
      $this->view('students/studentchangepass');
    }
    
    public function studentsched()
    {
      $x = new Student();
      $rows = $x->findAll();
      $this->view('students/studentsched');
    }
} 