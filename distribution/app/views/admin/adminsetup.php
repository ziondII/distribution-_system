<!DOCTYPE html>
<html>
  <head>
  <style>


@import url(https://fonts.googleapis.com/css?family=Open+Sans);



.search {
  width: 100%;

  display: flex;
}

.searchTerm {
		width: 100%;
		border: 3px solid gray;
		border-right: none;
		padding: 5px;
		height: 30px;
		border-radius: 5px 0 0 5px;
		outline: none;
		color: #9DBFAF;
	  }
.searchTerm:focus{
  color: gray;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid gray;
  background: gray;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/

   </style>
    <title>Admin</title>
    <meta name = "viewport" content="width=device-width, initial-scale-1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel = "stylesheet" href = "<?=ROOT?>/assets/css/style.css">
  </head>
    <body {background-color: black;} > 
<div class = "row">
    
<div class = "leftsidebar">
  <div class="leftsidebar2">
  <center><h1> </h1></center>
      <center><img src="assets/images/pfp.png" width="150px" height="150px"></center> <br>
      <center><h2>ADMIN</h2>

      <div class ="nav">
      <div><a class="box" href="<?= ROOT ?>/admin/adminsetup"><h1>Dashboard</h1></a>
      <div><a class="box" href="<?= ROOT ?>/admin/course_setup"><h1>Set Up</a></h1>
      <div><a class="box" href="<?= ROOT ?>/home"><h1>Log out</a></h1></center> 
</div>
 

</div>

<div class="maincontainer">
    <div class = "top">
    <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Search course">
      <button type="submit" class="searchButton">
        <i class="fa fa-search">Go</i>
     </button>
   </div>
</div> 
       </div>
      
</div>

    <div class = "rightsidebar">
   
     </div>
</div>

<div id= "footer">

</div>
    </body>
    </html>