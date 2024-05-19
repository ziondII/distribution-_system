<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    <meta name = "viewport" content="width=device-width, initial-scale-1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand"><h2>Admin</h2></a>
  </div>
</nav>
<nav class="navbar bg-body-tertiary">
  <div class="container">
  <nav class="nav">
  <a class="nav-link" href="<?= ROOT ?>/admin/studentrecord">Student Record</a>
  <a class="nav-link" href="<?= ROOT ?>/admin/createstudent">Add Student</a>
  <a class="nav-link" href="<?= ROOT ?>/admin/studentsearch">Find Student</a>
  <a class="nav-link " href="<?= ROOT ?>/admin/adminlogin">Log out</a>
</nav>
  </div>
</nav>
    </body>
    </html>