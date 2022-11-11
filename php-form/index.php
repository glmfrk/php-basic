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
    <div class="container g-0">
        <div class="row">
            <div class="col">
                <div class="content__body">
                    <div class="heading__content">
                        <h2 class="heading">
                            PHP Form Validation
                        </h2>
                        <div class="time">
                            today
                        </div>
                    </div>

                    <h3 class="text-center mb-3">PHP Form Validation</h3>
    <div class="form__container mb-5"> 
        <h4 style="color:red">* Required filled</h4>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="mb-3">
                <label for="user__name" class="form-label">User Name <span style="color:red; font-weight:bold;">* <?php echo $errName; ?> </span> </label>
                <input type="text" name="user__name" class="form-control" id="user__name" placeholder="user name">
            </div>
            <div class="mb-3">
                <label for="user__email" class="form-label">User Email <span style="color:red; font-weight:bold;">* <?php echo $errEmail; ?> </span> </label>
                <input type="email" name="user__email" class="form-control" id="user__email" placeholder="example@email.com">
            </div>
            <div class="mb-3">
                <label for="user__website" class="form-label">User Website <span style="color:red; font-weight:bold;">* <?php echo $errWeb; ?> </span> </label>
                <input type="text" name="user__website" class="form-control" id="user__website" placeholder="website.com">
            </div>
            <div class="mb-3">
                <label for="user__gender" class="form-label">User Gender :  <span style="color:red; font-weight:bold;">* <?php echo $errGender; ?> </span> </label>
                <input type="radio" name="user__gender" id="user__gender" value="female"><span> Female</span>
                <input type="radio" name="user__gender" id="user__gender" value="male"><span> Male</span>
            </div>
            <div class="mb-3">
                <label for="user__mgs" class="form-label">User Massagess <span style="color:red; font-weight:bold;">* <?php echo $errMgs; ?> </span> </label>
                <textarea name="user__mgs" class="form-control" id="user__mgs" placeholder="Massage..." cols="5" rows="5"></textarea>
            </div>
  
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" name="user__check" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr class="my-4">
                   

                </div>
            </div>
        </div>

    </div>
</section>
<footer class="footer__part">
    <div class="container container__wrapper">
        <div class="row">
            <div class="col">
                <p class="footer__text">by gulam faruk</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>

