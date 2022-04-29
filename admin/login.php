<?php
    $con = mysqli_connect("localhost","root","","gged");

    if(mysqli_connect_errno()){
        echo 'Connot Connect';
    }
?>
<!-------------------------  HTML ----------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-header"><h1 style="text-align: center;">Admin Login</h1></div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Enter Username</label>
                                <input type="text" name="admin_user_name" id="admin_user_name" class="form-control">
                                <span id="error_admin_user_name" class="text-danger">
                                </span>
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="admin_password" id="admin_password" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" name="admin_login" id="admin_login" class="btn btn-info">
                            </div>
                        </form>
                        <span id="error_admin_password" class="text-danger">
                            <?php
                                if(isset($_POST['admin_login'])){
                                    $qry = "SELECT * FROM `admin_login` WHERE `admin_name` LIKE '$_POST[admin_user_name]' AND `admin_pass` LIKE '$_POST[admin_password]'";
                                    $res = mysqli_query($con, $qry);

                                    if(mysqli_num_rows($res) == 1){
                                        session_start();
                                        $_SESSION['AdminLoginId'] = $_POST['admin_user_name'];
                                        header("location: index.php");
                                    }else{
                                        echo 'Username or Password is Incorrect!';
                                    }
                                }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
        
</body>
</html>

<!-------------------------    JavaScript   ------------------------------------>
