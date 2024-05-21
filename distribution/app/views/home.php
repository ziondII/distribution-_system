<?php include PATH . "partials/header.php"?>
<link rel = "stylesheet" href = "<?=ROOT?>/assets/css/home.css">
<style>
  .container-xxl{
    background-color: whitesmoke;
    height: 550px;
  }
  /* .row{
    background-color: black;
    height: 550px;
  } */
  .conatainer2{
    background-color: whitesmoke;
    margin-top: 50px;
    margin-bottom: 50px;
  }
  .login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: white;
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color:black;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: black;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: black;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: black;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: black;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}
</style>
<body>
<div class="container-xxl">
    <div class="row">
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <div class="login-box">
                <h2>Login</h2>
                <form method="POST" action="<?= ROOT ?>/home/login">
                    <label for="role">Services</label>
                    <select name="role" class="form-select form-select-sm" aria-label="Small select example">
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                    </select><br>
                    <div class="user-box">
                        <label for="id"></label>
                        <input name="id" type="text" required="" placeholder="ID">
                    </div>
                    <div class="user-box">
                        <label for="password"></label>
                        <input name="password" type="password" required="" placeholder="Password">
                    </div>
                    <div>
                        <button type="submit" class="btn">Login</button>
                    </div>
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>
</body>


<?php include PATH . "partials/footer.php"?>


