<?php

class Home extends Controller
{
    public function index()
    {
        $this->view('home');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $role = $_POST['role'];
            $id = $_POST['id'];
            $password = $_POST['password'];
            $hashedPassword = md5($password);

            if ($role == 'admin') {
                $adminModel = new Admin();
                $admin = $adminModel->where(['admin_id' => $id, 'password' => $hashedPassword]);
                if ($admin) {
                    $_SESSION['admin_id'] = $admin[0]->admin_id;
                    redirect('admin/studentrecord');
                } else {
                    $this->view('home', ['error' => 'Invalid ID or password']);
                }
            } elseif ($role == 'student') {
                $studentModel = new Student();
                $student = $studentModel->where(['id' => $id, 'password' => $hashedPassword]);
                if ($student) {
                    $_SESSION['student_id'] = $student[0]->id;
                    redirect('students/studentsched');
                } else {
                    $this->view('home', ['error' => 'Invalid ID or password']);
                }
            } else {
                $this->view('home', ['error' => 'Invalid role selected']);
               
            }
        } else {
            $this->view('home');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('home');
    }
}