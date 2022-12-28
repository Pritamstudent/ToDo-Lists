<?php
include "./includes/config.php";
include "./includes/header.php";
?>
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
        padding-left: 165px;
        padding-right: 150px;
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

<body style="background-image: url('https://muffingroup.com/blog/wp-content/uploads/2021/03/yeloow-heaer.jpg');">
    <div class="container">
        <form class="form-signup" action="addtask.php" method="POST">
            <h1 style="text-align: center; ">
                Add Task to your list
            </h1>
            <p style="text-align: center;">

            </p>
            <div class="form-group" style="margin-top:20px">
                <div class="row">

                    <div class="col-md-12">
                        Name of the task
                        <input type="text" name="name" class="form-control" placeholder="Title" required>
                    </div>

                </div>

            </div>



            <div class="form-group">
                Description of the task
                <br>
                <textarea class="form-input" name="description" rows="10" cols="52" required>

                </textarea>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        Date of Deadline
                        <input id="date" type="date" name="date" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Type of task:</label>
                        <br>
                        <input type="text" name="type" class="form-control" placeholder="Office or Home" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success btn-block" name="submit" value="Add Task">
            </div>
        </form>

    </div>



    <?php
    include "./includes/footer.php"
        ?>