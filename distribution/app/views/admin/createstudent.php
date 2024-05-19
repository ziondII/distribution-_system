<?php include PATH . "partials/admin.php"?>
<style>
  .container{
    padding-top: 10px;
  }
  
</style>

<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
  <div class="row">
    
    <div class="col-5">
      <div class="mb-3">
  <label for="" class="form-label">Last Name</label>
  <input name="lastname"  value="<?= get_var('lastname') ?>" type="text"  class="form-control"required>
</div>
<div class="mb-3">
  <label for="" class="form-label">First Name</label>
  <input name="firstname" value="<?= get_var('firstname') ?>" type="text" class="form-control" id="formGroupExampleInput2" required>

</div><div class="mb-3">
  <label for="" class="form-label">contact</label>
  <input name="contact" value="<?= get_var('contact') ?>" type="text" class="form-control" id="formGroupExampleInput2" placeholder=""required>
</div><br></div>
<div class="col-5"><div class="form-floating">
  <select name="course" class="form-select" id="floatingSelect" aria-label="Floating label select example" required>
  <option value=""></option>
  <option  <?= get_select('course', 'Bachelor of Science Information System') ?>>Bachelor of Science Information System</option>
    <option <?= get_select('course', 'Asociated in Computer Technology') ?>>Asociated in Computer Technology</option>
  </select>
  <label for="">Select Course</label>
</div>
<div class="mb-3">
  <label for="" class="form-label">Year & Section </label>
  <input name="yearsec" value="<?= get_var('yearsec') ?>" type="text" class="form-control" id="formGroupExampleInput2" placeholder="E.g 1B" required>
</div>
<div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input name="email"  value="<?= get_var('email') ?>" type="email" class="form-control" id="formGroupExampleInput2" placeholder="" required>
</div>
<div class="mb-3">
  <label for="" class="form-label">Password </label>
  <input name="password"  class="form-control" type="text" value="@student2024" readonly>
</div>
<div class="mb-3">
  <label for="" class="form-label">Input Schedule</label>
  <input name="image" class="form-control" type="file" id="formFile">
</div>
<div class = "nav justify-content-end">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Save
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Please make sure all inputs are correct</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <input type="submit" class="btn btn-primary">
      </div>
    </div>
  </div>
</div>
</div>
  </div>
  </form>
</div>



<?php include PATH . "partials/footer.php"?>