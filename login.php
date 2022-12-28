<?php
include "./includes/config.php";
include "./includes/header.php";



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
    <title>
        login
    </title>
    <style>
        .form-input {
            margin: 0;
            padding: 6px;
        }

        .form-group {
            background-color: white;
            width: 350px;
            height: auto;
            padding: 0px;
            margin: auto;
            margin-top: 150px;
            padding-top: 0px;
            margin-bottom: 212px;
        }



        .form-label {
            margin: 0;
            margin-bottom: 5px;
            margin-top: auto;
            color: black;
            font-size: 20px;


        }

        :placeholder-shown {
            font-size: 25px;
        }

        .input-item {
            height: 50px;
            width: 100%;
        }





        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .logo {
            float: left;
            height: 50px;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>

</head>

<body style="background-color: rgb(227, 237, 237); margin:0">
 

    <form class="form-group" method="POST" action="./login_script.php">
        <div style=" background-color:rgb(241, 243, 236);margin-left: 0%; padding:0px;">
            <span>
                <h1
                    style="text-align: center; padding-bottom: 6px; padding:0;padding-top:12px;margin-top: 150px; color: black; font-family:Verdana, Geneva, Tahoma, sans-serif">
                    Login
                </h1>
            </span>
        </div>
        <div class="form-input">
            <p class="form-label">
                Email
            </p>
            <input class="input-item" type="text" name="email" autofocus required placeholder="Enter email address">
        </div>
        <div class="form-input">
            <p class="form-label">
                Password
            </p>
            <input class="input-item" type="password" name="password" required placeholder="Enter password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1"> Remember Password</label>
        </div>
        <div>
            
                <a href="#">
                    Forgot Password?
                </a>
            

        </div>
        <div class="form-row">
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn1 btn-primary my-2">Submit</button>
            </div>
        </div>

        <div
            style="margin-top: 30px; background-color: rgb(255, 248, 248);padding-top: 12px; padding-left:0px;padding-bottom: 12px;">
            <a href="./signup.php" style="color: rgb(132, 155, 218); padding-left:90px ;  ">
                Need an account? Sign Up!
            </a>
        </div>

    </form>

    <?php
    include "includes/footer.php"
        ?>
</body>

</html>