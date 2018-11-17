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
  <div class="card sign-in shadow-lg p-3 mb-5 bg-white rounded border-0" style="margin-top: 1%; margin-left: 8%;">

    <form method="post" action="register.php">
      <div class="form-group" style="margin-top: 8px;">

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
          <input type="text" class="form-control" placeholder="USN" name="usn"  value="<?php echo $usn; ?>">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>">
        </div>

        <div class="form-row">
        <div class="form-group col-3" name="sem" value="<?php echo $sem; ?>">
          <label for="sem">Semester</label>
            <select class="form-control col-9" name="sem" style="margin-left: 10px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8" >8</option>
          </select>
        </div>

        <div class="form-group col-3" name="sec" value="<?php echo $sec; ?>">
          <label for="sec">Section</label>
            <select class="form-control col-9" name="sec" style="margin-left: 12px;">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
        </div>

        <div class="form-group col-6" name="dept" value="<?php echo $dept; ?>">
          <label for="dept">Department</label>
            <select class="form-control col-11" name="dept" style="margin-left: 10px;">
            <option value="CIV">Civil</option>
            <option value="CSE">Computer Science</option>
            <option value="MECH">Mechanical</option>
            <option value="ECE">Electroncis</option>
            <option value="AER">Aeronautical</option>
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

        <?php include('errors.php');?>
        <?php include('errorl.php');?>

        <button type="submit" class="login btn btn-outline-primary" name="reg_user" style=" margin-top: 5px;  border-radius: 20px;">Submit</button>
       <p>
      Already a member? <a href="login.php" style="text-decoration: none;">Sign in</a></p>
    </div>
  </form>
</div>
<div class="container-fluid" style="position: fixed; bottom: 15px; margin-left: 30px;text-align: center;">Made by: Harsh Gaur (1SJ15CS038) & Anubhab Dutta Choudhury (1SJ15CS013)</div>

</body>
</html>