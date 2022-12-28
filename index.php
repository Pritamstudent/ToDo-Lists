<?php
include "./includes/config.php"
?>
<?php
include "./includes/header.php"
?>
<style>
    .card:hover {
        transform: scale(1.1);
    }
</style>
</head>
<?php
if (!isset($_SESSION["email"])) {
?>

    <body style="background-image: url('https://muffingroup.com/blog/wp-content/uploads/2021/03/yeloow-heaer.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-center" id="card" style="width: 18rem; margin: auto; margin-top: 100px;margin-bottom: 100px;">
                        <div class="bg-image hover-zoom">
                            <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">CRAVING FOR <span class="text-primary">TODO LIST?</span></h5>
                            <p class="card-text">If you are a new user, you are welcomed to have your personalized <span class="text-primary"> TODO LIST</span></p>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-secondary">Click below to Sign Up </li>
                            <li class="list-group-item">
                                <div class="btn-group">
                                    <a href="./signup.php" class="btn btn-primary active" aria-current="page">Sign Up</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center" id="card" style="width: 18rem; margin: auto; margin-top: 100px;margin-bottom: 100px;">
                        <div class="bg-image hover-zoom">
                            <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Already have a <span class="text-primary">TODO LIST?</span></h5>
                            <p class="card-text">If you are our user, you are welcomed to have your personalized <span class="text-primary"> TODO LIST</span></p>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-secondary">Click below to Log in </li>
                            <li class="list-group-item">
                                <div class="btn-group">
                                    <a href="./login.php" class="btn btn-primary active" aria-current="page">Log in</a>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </body>
<?php
} else {
?>

    <body style="background-color:aqua;">
        <div class="container">
            <h1 style="margin-top:100px;text-align:center;
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                Hello, Welcome to your TODO List </h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center" id="card" style="width: 20rem; margin: auto; margin-top: 50px;margin-bottom: 100px;">
                    <div class="bg-image hover-zoom">
                        <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Already have a <span class="text-primary">TODO LIST?</span></h5>
                        <p class="card-text">You are welcomed to have your personalized <span class="text-primary"> TODO
                                LIST</span>
                        </p>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-secondary">Click below to view your lists </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <a href="./todos.php" class="btn btn-primary active" aria-current="page">My todoLists</a>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center" id="card" style="width: 19rem; margin: auto; margin-top: 50px;margin-bottom: 100px;">
                    <div class="bg-image hover-zoom">
                        <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Want to add a new Task in <span class="text-primary">TODO LIST?</span></h5>
                        <p class="card-text">You are welcomed to have your personalized <span class="text-primary"> TODO
                                LIST</span>
                        </p>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-secondary">Click below to add new task </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <a href="./add.php" class="btn btn-primary active" aria-current="page">New todoList</a>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        </div>

    </body>



<?php
}
?>
<?php
include "./includes/footer.php"
?>