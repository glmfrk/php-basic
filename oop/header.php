<?php 

    $errName = $errEmail = $errWeb = $errGender = $errMgs = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if ( empty( $_REQUEST['user__name'] ) ) {
            $errName = "User Name is required.";
        } elseif ( empty( $_REQUEST['user__email'] ) ) {
            $errEmail = "User Email is required.";
        } elseif ( !filter_var( $_REQUEST['user__email'], FILTER_VALIDATE_EMAIL )) {
            $errEmail = "User Email is Invalid.";
        } elseif ( empty( $_REQUEST['user__website'] ) ) {
            $errWeb = "User Website is required.";
        }elseif ( !filter_var( $_REQUEST['user__website'], FILTER_VALIDATE_URL )) {
            $errWeb = "User Website URL is Invalid.";
        } elseif ( empty( $_REQUEST['user__gender'] ) ) {
            $errGender = "User Gender is required.";
        } elseif ( empty( $_REQUEST['user__mgs'] ) ) {
            $errMgs = "User Massage is required.";
        } else {
            
            $userName       = userValidations($_REQUEST['user__name']);
            $userEmail      = userValidations($_REQUEST['user__email']);
            $userWeb        = userValidations($_REQUEST['user__website']);
            $userGender     = userValidations($_REQUEST['user__gender']);
            $userMgs        = userValidations($_REQUEST['user__mgs']);
        }
        
        
        // echo "User Name: " . $userName . "<br>";
        // echo "User Email: " . $userEmail . "<br>";
        // echo "User Website: " . $userWeb . "<br>";
        // echo "User Gender: " . $userGender . "<br>";
        // echo "User Massage: " . $userMgs . "<br>";
    }

    function userValidations ($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamental Practices</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<header class="header__part">
    <div class="container container__wrapper">
        <div class="row">
            <div class="col">
                <h2 class="title"> PHP Fundamental Coding Practices <span>by traing with live projects</span></h2>
            </div>
        </div>
    </div>
</header>
<section class="php__code-sec">
  <div class="content__body container">
      <div class="heading__box mb-2 border-bottom border-dark d-flex justify-content-between align-items-center">
          <h3 class="heading">PHP Fundamental - "Array" </h3>
          <p class="time">
            <?php echo date('d-F-Y'); ?>
          </p>
      </div>