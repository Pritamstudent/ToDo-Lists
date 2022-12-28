<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      .line
      {
        padding-left:20px;
        color:gray;
      }
    
       .input-item
       {
        width:60%;
        height:39px;
       }
       
       .header {
            background-color: #000;
            color: #fff;
            border-color: #080808;
            min-height: 50px;
            border: 1px solid transparent;
        }

        .inner-header {
            width: 80%;
            margin: auto;
        }

        .logo {
            float: left;
            height: 50px;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        .header-link {
            float: right;
            font-size: 14px;
            height: 50px;
            padding: 15px 15px;
            font-size: 16px;
            font-weight: bold;
        }
.form-label
{
  margin-top:12px;
  margin-bottom:6px;
}
        .inner-header {
            width: 80%;
            margin: auto;
        }
    </style>
  </head>
  <?php
  include "./includes/config.php";
  include "./includes/header.php";
   ?>
  <body style="background-color:rgb(240, 245, 245); text-decoration: brown;">
    

    <h2 style="padding-left:20px;padding-top:90px;">
      Contact Details
    </h2>
    <p class="line">
    Lower Bhanu Nagar<br/>
    Sevoke Road , Siliguri
    </p>
    <p class="line">
      P: (123) 456 -7890
    </p>
    <p class="line">
      <a href="https://mail.google.com">
      
       E: todolister@gmail.com
      </a>
    </p>
    <p class="line">
      H: Monday - Friday: 9:00 AM to 5:00 PM
      <br/>
      <br/>
      <br/>

    </p>
    <h2 style="padding-left:20px;">
      Send us a message
    </h2>
    <form style="padding-left:20px;">
      <div class="form-input">
        <p class="form-label">
            Full Name
        </p>
        <input  class="input-item" type="text" name="username" autofocus required >
    </div>
    <div class="form-input">
        <p class="form-label">
            Phone Number
        </p>
        <input class="input-item" type="number" name="number" required >
    </div>
    <div class="form-input">
      <p class="form-label">
          Email Address
      </p>
      <input class="input-item" type="text" name="email" required >
  </div>
  <div class="form-input">
    <p class="form-label">
        Message
    </p>
    <textarea class="form-input" name="area" rows="10" cols="117" required>

    </textarea>
</div>
<div class="form-group" style="margin-top:20px">
  <a href="./success_message.php">
  <button type="button" class="btn btn-success">Submit</button>
  </a>
</div>
    </form>
    <?php
            include  "includes/footer.php"
            ?>
  </body>
</html>