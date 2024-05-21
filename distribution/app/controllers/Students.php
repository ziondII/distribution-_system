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
        // Ensure the user is logged in and has a student session
        if (!isset($_SESSION['student_id'])) {
            redirect('home/login');
        }

        $studentModel = new Student();
        $student = $studentModel->where(['id' => $_SESSION['student_id']]);

        if ($student) {
         
            $this->view('students/studentsched', [
                'student' => $student[0]
            ]);
        } else {
            $this->view('home', ['error' => 'Student not found']);
        }
    }
}