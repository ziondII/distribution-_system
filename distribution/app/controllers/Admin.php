<?php

class Admin extends Controller
{
    public function index()
    {    
  
      $student = new Student();
      $x = new Student();
      
  
      $this->view('admin/adminlogin');
    }
    public function createstudent()
      {
        $students = new Student();
        if (count($_POST) > 0) {
   
          if (count($_FILES) > 0) 
          {
  
            $allowed[] = 'image/png';
            $allowed[] = 'image/jpeg';
  
            if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) 
            {
              $folder = 'assets/images/';
              if (!file_exists($folder)) 
              {
                mkdir($folder, 0777, true);
              }
              $destination = $folder . $_FILES['image']['name'];
              move_uploaded_file($_FILES['image']['tmp_name'], $destination);
              $_POST['image'] = $destination;
            } 
          }
          $students->insert($_POST);
          header('Location: createstudent'); // Redirect to createstudent after form submission
          exit();
        }
      $this->view('admin/createstudent');
    }
   
    public function studentrecord()
    {

    $studentModel = new Student();
  
    $students = $studentModel->findAll();
     
    $this->view('admin/studentrecord', [
        'students' => $students
    ]);
    }

    public function studentsearch()
    {
      $student = new Student();
     
      $this->view('admin/studentsearch');
    }
  
    
} 