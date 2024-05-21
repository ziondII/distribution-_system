<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand"><h2><?= htmlspecialchars($student->lastname) ?>, <?= htmlspecialchars($student->firstname) ?></h2></a>
  </div>
  <div class="container">
    <a class="navbar-brand"><h6><?= htmlspecialchars($student->id) ?></h6></a>
  </div>
  <div class="container">
    <a class="navbar-brand"><h6><?= htmlspecialchars($student->course) ?> <?= htmlspecialchars($student->yearsec) ?></h6></a>
  </div>
</nav>
<?php include PATH . "partials/studentportal.php" ?>
<center>
  <div class="card" style="width: 60rem; height:65rem">
    <img src="<?= ROOT ?>/<?= htmlspecialchars($student->image) ?>" class="card-img-top" alt="Profile Image">
    <div class="card-body">
      <h5 class="card-title">Schedule</h5>
    </div>
  </div>
</center>
<?php include PATH . "partials/footer.php" ?>