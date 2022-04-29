<?php
    session_start();
    if(!isset($_SESSION['AdminLoginId'])){
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        <?php require ('index.css') ?>
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <title>Admin Panel</title>
</head>
<body>
<section class="content">
    <section class="navigation">
        <div class="info">
            <a href="dashboard.php" target="mainframe"><h3><?php echo $_SESSION['AdminLoginId'];?></h3></a>
        </div>
        <div class="links">
            <a href="links/dashboard.php" target="mainframe">Dashboard</a>
            <a href="links/students.php" target="mainframe">Student List</a>
            <a href="links/Teacher.php" target="mainframe">Teacher List</a>
            <a href="links/Class.php" target="mainframe">Class</a>
            <a href="links/Attendence.php" target="mainframe">Attendence</a>
            <form action="" method="POST">
                <button class="btn" name="logout">Log Out</button>
            </form>
        </div>
    </section>
    <section class="main">
        <iframe name="mainframe" frameborder="0" width="100%" height="100%"></iframe>
    </section>
</section>
</body>
</html>
<?php

    if(isset($_POST['logout'])){
            session_destroy();
            header("location:login.php");
        }
?>