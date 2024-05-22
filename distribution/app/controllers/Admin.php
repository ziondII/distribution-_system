<?php

class Admin extends Controller
{
    public function index()
    {    
      if (!Auth::logged_in()) {
        redirect('login');
      }
      $student = new Student();
      $x = new Student();
      
      $this->view('home');
    }
    public function createstudent()
      {
        if (!Auth::logged_in()) {
          redirect('login');
        }
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
   
    // public function studentrecord()
    // {
    //   if (!Auth::logged_in()) {
    //     redirect('login');
    //   }
    // $studentModel = new Student();
  
    // $students = $studentModel->findAll();
     
    // $this->view('admin/studentrecord', [
    //     'students' => $students
    // ]);
    // }

    public function studentrecord()
    {
      if (Auth::is_admin()) {
        // Fetch student records and pass to the view
        $studentModel = new Student();
        $students = $studentModel->findAll();
        
        $this->view('admin/studentrecord', [
          'students' => $students
        ]);
      } else {
        header('Location: ' . ROOT . '/login');
        exit;
      }
    }

    public function studentsearch()
    {
        $students = new Student();

        $lastnameSearch = '';
        $sectionSearch = '';
        $rows = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $lastnameSearch = $_POST['lastnamesearch'] ?? '';
            $sectionSearch = $_POST['sectionsearch'] ?? '';

            $rows = $students->search($lastnameSearch, $sectionSearch);
        }

        $this->view('admin/studentsearch', [
            'students' => $rows
        ]);
    }
    public function editstudent($id = null)
    {
      if (!Auth::logged_in()) {
        redirect('login');
      }
        $studentModel = new Student();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Update the student record
            $data = $_POST;
            if (count($_FILES) > 0) {
                $allowed = ['image/png', 'image/jpeg'];
                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                    $folder = 'assets/images/';
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $data['image'] = $destination;
                }
            }
            $studentModel->update($id, $data);
            redirect('admin/studentsearch'); // Redirect to the studentsearch page
        } else {
            // Retrieve the student data for the given ID
            $student = $studentModel->find($id);
            $this->view('admin/editstudent', [
                'student' => $student
            ]);
        }
    }
    public function deletestudent($id)
    {
        if (!Auth::logged_in() || !Auth::is_admin()) {
            redirect('login');
        }

        $studentModel = new Student();
        $student = $studentModel->find($id);

        if ($student) {
            $studentModel->delete($id);
            $_SESSION['success_message'] = 'Student record deleted successfully';
        } else {
            $_SESSION['error_message'] = 'Student record not found';
        }

        redirect('admin/studentrecord');
    }
 
} 