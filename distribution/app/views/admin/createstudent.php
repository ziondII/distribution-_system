<?php include PATH . "partials/admin.php"?>


<div class="container">
  <div class="row">
    <div class="col-5"><div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Last Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last Name*">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">First Name</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="First Name*">

</div><div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Number </label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div></div>
<div class="col-5"><div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Course</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Course*">
  <div class="dropup-center dropup">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Courses
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Bachelor of Science Information System</a></li>
    <li><a class="dropdown-item" href="#">Associated In Computer Technology</a></li>
  </ul>
</div>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Year & Section </label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="E.g 1B">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Email</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Password </label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Input Schedule</label>
  <input class="form-control" type="file" id="formFile">
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
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
</div>



<?php include PATH . "partials/footer.php"?>