<?php
include "./includes/header.php";

include "./includes/config.php";

?>
<?php
if(isset($_SESSION["email"]))
{
    echo "<script type='text/javascript'>location.href = './index.php';</script>";
}
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>
        SignUp form
    </title>

    <style type="text/css">
        .form-signup {
            margin: 0 auto;
            max-width: 400px;
            margin-bottom: 150px;
            margin-top: 100px;
            padding-top: 100px;

        }

        body {
            padding-top: 0px;
        }

        input[type="submit"] {
            transform: translate(2.2%);
            padding-left: 140px;
            padding-right: 140px;
            margin-top: 0.6rem;
            font-family: cursive;
            font-weight: bold;
        }

        .logo {
            float: left;
            height: 50px;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
    <script src=”signup.js”></script>
</head>


<body style="background-color: rgb(227, 237, 237); margin:0">

    <div class="container">
        <?php
        echo $msg;
        ?>       ?? <form class="form-signup" action="./signup_script.php" method="POST">
            <h1 style="text-align: center;">
                Create Account
            </h1>
            <p style="text-align: center;">
                Create a account in one minute. It's free.
            </p>
            <div class="form-group" style="margin-top:20px">
                <div class="row">

                    <div class="col-md-6">
                        First Name
                        <input type="text" name="firstname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        Last Name
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                    </div>
                </div>

            </div>
            <div class="form-group">
                Email
                <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        Password
                        <input id="password" type="password" name="password" class="form-control"
                            placeholder="Password">
                    </div>
                    <div class="col-md-6">
                        Confirm Password
                        <input id="confirm_password" type="password" name="confirmpassword" class="form-control"
                            placeholder="Confirm Password">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" required>
                    I accept the <a href="#">terms and conditions</a>
                </label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" name="submit" value="Create Account">
            </div>
        </form>

    </div>
    <?php
    include "includes/footer.php"
        ?>
</body>

</html>