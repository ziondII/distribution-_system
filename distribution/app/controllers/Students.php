<?php

class Students extends Controller
{
    public function index()
    {   
        if (!Auth::logged_in()) {
            redirect('home');
          }
        $x = new Student();
        $rows = $x->findAll();
        
        $this->view('home', [
            'students' => $rows
        ]);
    }
    public function studentchangepass()
    {
        if (!Auth::logged_in() || !Auth::is_student()) {
            redirect('login');
        }

        $studentModel = new Student();
        $student = $studentModel->first(['email' => $_SESSION['student']->email]);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [];
            if (isset($_POST['password'])) {
                $data['password'] = $_POST['password'];
            }

            if (!empty($data)) {
                $studentModel->update($student->id, $data);
                $_SESSION['success_message'] = 'Password changed successfully';
            }
            redirect('students/studentsched');
        }

        $this->view('students/studentchangepass', ['student' => $student]);
    }

    

    public function studentsched()
    {
      if (Auth::is_student()) {
        $studentModel = new Student();
        $student = $studentModel->first(['email' => $_SESSION['student']->email]);
  
        if ($student) {
          $this->view('students/studentsched', [
            'student' => $student
          ]);
        } else {
          header('Location: ' . ROOT . '/login');
          exit;
        }
      } else {
        header('Location: ' . ROOT . '/login');
        exit;
      }
    }
}