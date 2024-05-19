<?php include PATH . "partials/admin.php"?>
<style>
  .container{
    height: auto;
  }
.container_2{
    padding-top: 10px;
    height: 500px;
    overflow-x: auto;
}
thead{
    position: sticky;
    top: 0;
    z-index: 1;
}
th {
    background-color: #4CAF50;
    color: white;
}
tbody {
    display: block;
    height: 400px; /* Adjust as needed */
    overflow-y: auto;
}
thead, tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed;
}
tbody {
            display: block;
            max-height: 400px; /* Adjust as needed */
            overflow-y: auto;
            overflow-x: hidden;
        }

        thead, tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        tbody td {
            overflow: hidden;
            text-overflow: ellipsis; /* Ensure long text doesn't overflow */
        }
        th, td {
            
            padding: 8px;     
        }
       
</style>
<div class= "container">
    <div class ="container_2">
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
      <th>schedule</th> 
    </tr>
</thead>
    <?php if (!empty($students)) { ?>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?= $student->id ?></td>
                <td><?= $student->lastname ?></td>
                <td><?= $student->firstname ?></td>
                <td><?= $student->contact ?></td>
                <td><?= $student->course ?></td>
                <td><?= $student->yearsec ?></td>
                <td><?= $student->email ?></td>
                <td><?= $student->password ?></td>
                <td><img width="50px" height="50px" src="<?= ROOT ?>/<?= $student->image ?>" alt=""></td>
            </tr>
        <?php } ?>
    <?php } else { ?>
        <tr>
            <td colspan="9">
                <h2>No records found.</h2>
            </td>
        </tr>
    <?php } ?>
    </table>
    </div>
</div>
<?php include PATH . "partials/footer.php"?>
