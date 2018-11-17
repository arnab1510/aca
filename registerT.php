<?php 
include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.css">
  <script src="assets/js/all.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body class="login_b">
  <div class="card sign-in shadow-lg p-3 mb-5 bg-white rounded border-0" style="margin-top: 3%; margin-left: 8%;">

    <form method="post" action="registerT.php">
      <div class="form-group" style="margin-top: 15px;">

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Full Name" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Email Address" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>">
        </div>
 <div class="form-group ">
          <label for="dept">Department</label>
            <select class="form-control col-11" name="dept" style="margin-left: 10px;">
            <option value="CIV">Civil Engineering</option>
            <option value="CSE">Computer Science Engineering</option>
            <option value="MECH">Mechanical Engineering</option>
            <option value="ECE">Electroncis Engineering</option>
            <option value="AER">Aeronautical Engineering</option>
          </select>
        </div>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" class="form-control" placeholder="Password" name="password_1">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" class="form-control" placeholder="Confirm Password" name="password_2">
        </div>

        <button type="submit" class="login btn btn-outline-primary" name="reg_teacher" style=" margin-top: 7px;  border-radius: 20px;">Submit</button>

        <?php include('errors.php');?>
       </form>

       <p style="margin-top: 10px;">
      Already a member? <a href="login.php" style="text-decoration: none;">Sign in</a></p>
    </div>
    <div class="container-fluid" style="position: fixed; bottom: 15px; margin-left: 30px;text-align: center;">Made by: Harsh Gaur (1SJ15CS038) & Anubhab Dutta Choudhury (1SJ15CS013)</div>

</body>
</html>