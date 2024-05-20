<?php include PATH . "partials/admin.php" ?>
<div class="container">
    <h2>Edit Student</h2>
    <?php if (isset($student)) { ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input name="firstname" type="text" class="form-control" id="firstname" value="<?= htmlspecialchars($student->firstname) ?>" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input name="lastname" type="text" class="form-control" id="lastname" value="<?= htmlspecialchars($student->lastname) ?>" required>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input name="contact" type="text" class="form-control" id="contact" value="<?= htmlspecialchars($student->contact) ?>" required>
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <input name="course" type="text" class="form-control" id="course" value="<?= htmlspecialchars($student->course) ?>" required>
        </div>
        <div class="mb-3">
            <label for="yearsec" class="form-label">Year and Section</label>
            <input name="yearsec" type="text" class="form-control" id="yearsec" value="<?= htmlspecialchars($student->yearsec) ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" value="<?= htmlspecialchars($student->email) ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" value="<?= htmlspecialchars($student->password) ?>" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Profile Image</label>
            <input name="image" type="file" class="form-control" id="image">
            <?php if (!empty($student->image)) { ?>
                <img src="<?= ROOT . '/' . htmlspecialchars($student->image) ?>" alt="Profile Image" width="100">
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php } else { ?>
        <p>Student not found.</p>
    <?php } ?>
</div>

<?php include PATH . "partials/footer.php"; ?>