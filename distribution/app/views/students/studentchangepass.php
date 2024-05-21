<style>
  .row{
    height: 550px;
  }
</style>

<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand"><h2>Name here</h2></a>
  </div>
  <div class="container">
    <a class="navbar-brand"><h6>Course And Section</h6></a>
  </div>
  <div class="container">
    <a class="navbar-brand"><h6>Course And Section</h6></a>
  </div>
</nav>
<?php include PATH . "partials/studentportal.php"?>

<div class = "container-sm">
  <div class ="row">
<div>
<form action="" method="POST" enctype="multipart/form-data">
<div class="input-group">
 <span class="input-group-text">Old Password</span>
  <input type="text" aria-label="First name" class="form-control">
</div><br>
<div class="input-group">
 <span class="input-group-text">New Password</span>
  <input type="text" aria-label="First name" class="form-control">
</div><br>
<!-- Button trigger modal -->
<div class = "nav justify-content-end">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Save
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to change password?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</div>
</div>
<?php include PATH . "partials/footer.php"?>