<?php include PATH . "partials/admin.php" ?>

<div class="container text-center">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row align-items-start">
            <div class="col">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Last Name</label>
                    <input name="lastnamesearch" type="text" class="form-control" id="formGroupExampleInput" placeholder="Search">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Section</label>
                    <input name="sectionsearch" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Search">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label"></label><br>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="container text-center">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Contact</th>
                <th>Course</th>
                <th>Year and Section</th>
                <th>Email</th>
                <th>Password</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($students)) { ?>
                <?php foreach ($students as $student) { ?>
                    <tr>
                        <td><?= htmlspecialchars($student->id) ?></td>
                        <td><?= htmlspecialchars($student->lastname) ?></td>
                        <td><?= htmlspecialchars($student->firstname) ?></td>
                        <td><?= htmlspecialchars($student->contact) ?></td>
                        <td><?= htmlspecialchars($student->course) ?></td>
                        <td><?= htmlspecialchars($student->yearsec) ?></td>
                        <td><?= htmlspecialchars($student->email) ?></td>
                        <td><?= htmlspecialchars($student->password) ?></td>
                        <td><img width="50px" height="50px" src="<?= ROOT ?>/<?= htmlspecialchars($student->image) ?>" alt="Profile Image"></td>
                        <td></td>
                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="9">
                        <h2>No records found.</h2>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include PATH . "partials/footer.php" ?>