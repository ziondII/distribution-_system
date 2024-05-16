<div><?php include PATH . "partials/header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "<?=ROOT?>/assets/css/login.css">
    <title><?=APP_NAME?></title>
</head>
<body>
     <<center>
<p class="lead">

</p>
</center>
<div class="center">
  <h1>WELCOME PROJECT ALICE</h1>
  <form>
    <div class="inputbox">
      <input type="text" name = "id" required="required">
      <span>Student ID</span>
    </div>
    <div class="inputbox">
      <input type="password" name = "password" required="required">
      <span>Password</span>
    </div>
    <div class="inputbox">
     <a input type="button" value="login" href="<?= ROOT ?>/students/studentsched"> Log in </a>
    </div>
  </form>
</div>
</body>
</html>
<?php include PATH . "partials/footer.php"?>