<?php
include('../dbConnection.php');
session_start();
if (!isset($_SESSION['is_login'])) {
    if (isset($_REQUEST['uEmail'])) {
        $uEmail = mysqli_real_escape_string($connection, trim($_REQUEST['uEmail']));
        $uPassword = mysqli_real_escape_string($connection, trim($_REQUEST['uPassword']));
        $sql = "SELECT u_EMAIL, u_PASSWORD FROM  createuseraccount_db WHERE u_EMAIL='" . $uEmail . "'  AND u_PASSWORD= '" . $uPassword . "'  limit 1";
        $result = $connection->query($sql);
        if ($result->num_rows == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['uEmail'] = $uEmail;
            echo "<script>location.href='requesterProfile.php'; </script>";
            exit;
        } else {
            $msg = '<div class="alert alert-warning mt-2 text-center">Enter Valid Credentials</div>';
        }
    }
}else{
    echo "<script>location.href='requesterProfile.php'; </script>";
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap css  -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <style>
        .custom-margin {
            margin-top: 4rem;
        }
    </style>
</head>

<body style="background-color: aliceblue;">
    <div class="mb-3 mt-5 text-center" style="font-size: 30px;">
        <i class="fas fa-stethoscope"></i>
        <span>Online Service Management System</span>
    </div>
    <p class=" text-center " style="font-size: 20px;"><i class=" fas fa-user-secret text-danger"></i> Requester Area</p>

    <div class="container-fluid">
        <div class="row justify-content-center custom-margin">
            <div class="col-sm-6 col-md-4">
                <form action="" method="post" class="shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="form-group">
                        <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="uEmail">
                        <small class="form-text">We'll never share your email with anyone else</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="password" class="font-weight-bold pl-2">Passwword</label>
                        <input type="password" name="uPassword" id="" class="form-control " placeholder="Password">
                    </div>
                    <button class="btn btn-outline-danger mt-4  font-weight-bold btn-block" type="submit">Login</button>
                    <?php if (isset($msg)) {
                        echo $msg;
                    } ?>
                </form>
                <div class="text-center"><a href="../index.php" class="btn btn-info  font-weight-bold">Back to Home</a></div>
            </div>
        </div>
    </div>


    <!-- javascript files  -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>

</body>

</html>