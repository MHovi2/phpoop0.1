<?php
include 'db/database.php';
$cmd = new database();
// if(isset($_POST["submit"])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $cmd->insert('tbl_users',['name'=>"$name",'email'=>"$email",'pass'=>"$pass"]);
//     }
// echo "Insert Id : ";
// print_r($cmd->getMessage());

// $name = "Ovi";
// $email = "ovi@gmail.com";
// $pass = "165456";


// $cmd->update('tbl_users',['name'=>"$name",'email'=>"$email",'pass'=>"$pass"], 'id="2"');
// echo "Insert Id : ";
// print_r($cmd->getMessage());

// $cmd->delete('tbl_users', 'id="2"');
// echo "Insert Id : ";
// print_r($cmd->getMessage());

// $cmd->delete('tbl_users','id ="4"');
// echo "Delete result is : ";
// print_r($cmd->getMessage());

// $cmd->sql('SELECT * FROM tbl_users');
// echo "SQL result is : ";
// print_r($cmd->getMessage());

// $cmd->select('tbl_users','*',null,'pass="123"',null,null);
// echo "Select result is : ";
// print_r($cmd->getMessage());

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red  font-robo" style="padding-top: 70px;">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="" method="post">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" placeholder="Password" name="pass">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" placeholder="Confirm Password"
                                        name="">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="p-t-30" style="display: inline-block;">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Sign Up</button>
                        </div>
                        <div class="p-t-30" style="display: inline-block;">
                            <button class="btn btn--radius btn--green" type="" name="login"><a href="pages/table.php">
                                    Sign Up</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html>
<!-- end document-->