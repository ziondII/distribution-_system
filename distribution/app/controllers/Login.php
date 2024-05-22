<?php

class Login extends Controller
{
  // public function index()
  // {  
    
  //   $user = new Student();

  //   if (count($_POST) > 0) {

  //     $arr['email'] = $_POST['email'];

  //     $row = $user->first($arr);

  //     if ($row) {

  //       if ($_POST['password'] == $row->password) {

  //         Auth::authenticate($row);
  //         redirect('admin/studentrecord');
  //       } else {
  //         $errors['errors'] = 'Email or Password is not valid.';
  //       }
  //     } else {
  //       $errors['errors'] = 'Email or Password is not valid.';
  //     }
  //   }
  //   $this->view('login');
  // }
  public function index()
  {  
    $errors = [];
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role = $_POST['roles'];
      
      $userModel = new Student();
      $arr = ['email' => $email];
      $row = $userModel->first($arr);

      if ($row) {
        if ($password == $row->password) {
          Auth::authenticate($row);

          if ($row->roles == 'admin') {
            redirect('admin/studentrecord');
          } else if ($row->roles == 'student') {
            redirect('students/studentsched');
          }
        } else {
          $errors['login'] = 'Email or Password is not valid.';
        }
      } else {
        $errors['login'] = 'Email or Password is not valid.';
      }
    }

    $this->view('login', ['errors' => $errors]);
  }
  
}