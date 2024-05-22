<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $role = $_POST['role'];
            $id = $_POST['id'];
            $password = md5($_POST['password']); // Assuming passwords are hashed with md5

            if ($role == 'admin') {
                $adminModel = new Admin();
                $admin = $adminModel->where(['admin_id' => $id, 'password' => $password]);
                if ($admin) {
                    $_SESSION['admin_id'] = $admin[0]->admin_id;
                    header('Location: ' . ROOT . '/admin/studentrecord');
                    exit;
                } else {
                    $this->view('login', ['error' => 'Invalid ID or password']);
                }
            } elseif ($role == 'student') {
                $studentModel = new Student();
                $student = $studentModel->where(['id' => $id, 'password' => $password]);
                if ($student) {
                    $_SESSION['id'] = $student[0]->id;
                    $_SESSION['firtstname'] = $student[0]->firstname . ' ' . $student[0]->lastname;
                    header('Location: ' . ROOT . '/students/studentsched');
                    exit;
                } else {
                    $this->view('login', ['error' => 'Invalid ID or password']);
                }
            } else {
                $this->view('login', ['error' => 'Invalid role selected']);
            }
        } else {
            $this->view('login');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . ROOT . '/home');
        exit;
    }
}