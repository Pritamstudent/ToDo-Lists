<?php
include "./includes/config.php";
include "./includes/header.php";
?>

<head>
    <style>
        .card:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body style="background-image: url('https://muffingroup.com/blog/wp-content/uploads/2021/03/yeloow-heaer.jpg');">


    <div style="background-color:aquamarine">
        <div class="container text-center" style="padding-bottom:20px;margin-top:100px;background-image:url('https://img.freepik.com/free-vector/hand-painted-watercolor-abstract-watercolor-background_23-2149005675.jpg?w=2000')">
            <h1>
                <b>ABOUT THE AUTHOR</b>
            </h1>
            <p style="font-style:italic">
                The author of this Page is Pritam Sharma. He is a tech enthusiast and working to become a web<br>
                developer. He has made this project when he was in the second year of his college in National <br>
                Institute of Technology Sikkim. You can use this site to save your tasks in your ToDo lists.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center" id="card" style="width: 18rem; margin: auto; margin-top: 100px;margin-bottom: 100px;">
                    <div class="bg-image hover-zoom">
                        <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">History Of <span class="text-primary">TODO LISTER</span></h5>
                        <p class="card-text">This site was developed by Pritam Sharma on 27th December , 2022</p>
                        <br>
                    </div>


                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center" id="card" style="width: 18rem; margin: auto; margin-top: 100px;margin-bottom: 100px;">
                    <div class="bg-image hover-zoom">
                        <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Languages used in <span class="text-primary">TODO LISTER</span></h5>
                        <p class="card-text">This site was developed using HTML, CSS, Javascript and MySQL</p>
                    </div>


                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center" id="card" style="width: 18rem; margin: auto; margin-top: 100px;margin-bottom: 100px;">
                    <div class="bg-image hover-zoom">
                        <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">What is offered by <span class="text-primary">TODO LISTER</span></h5>
                        <p class="card-text">This site was developed to help the people to save their tasks in ToDo list</p>
                    </div>


                </div>
            </div>

        </div>
    </div>

</body>
<?php
include "./includes/footer.php"
?>