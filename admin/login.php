<?php include '../Database/connect.php'; ?>
<?php
session_start();
$login_status_error="";
// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
  // User is already logged in, redirect to the home page or dashboard
  header('Location: index.php');
  exit();   
}

// Check if the form is submitted
if (isset($_POST['login'])) {

  // Get the submitted username and password
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

  // Prepare and execute the SQL statement
  $cmd = $con->prepare("SELECT id as user_id,password FROM tbl_admin_user WHERE username = ? AND password = ? ");
  $cmd->bind_param("ss", $username,$password);
  $cmd->execute();
  $ex = $cmd->get_result();

  if ($ex->num_rows == 1) {

    $row = mysqli_fetch_array($ex);

    $user_id = $row['user_id'];
    $_SESSION['user_id'] = $user_id;
    $login_status_error="";
    
    header('Location: index.php');
  } else{
    $login_status_error= " Invalid login or password";
  }

}
  
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include './import/head.php'; ?>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-4">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Welcome To Admin</h4>
                                    <form method="POST" action="login.php">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="9999999999" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="******" name="password">
                                            <span style="color : red;"><?php echo $login_status_error; ?></span>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>