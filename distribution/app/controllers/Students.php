<?php

class Students extends Controller
{
    public function index()
    {
        $x = new Student();
        $rows = $x->findAll();
        
        $this->view('home', [
            'students' => $rows
        ]);
    }

    public function studentchangepass()
    {
        $this->view('students/studentchangepass');
    }

    public function studentsched()
    {
        if (isset($_SESSION['student_id'])) {
            $studentModel = new Student();
            $student = $studentModel->first(['id' => $_SESSION['student_id']]);

            if ($student) {
                $this->view('students/studentsched', [
                    'student' => $student
                ]);
            } else {
                header('Location: ' . ROOT . '/home');
                exit;
            }
        } else {
            header('Location: ' . ROOT . '/home');
            exit;
        }
    }
}