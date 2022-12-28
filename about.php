<?php
include "./includes/config.php";
include "./includes/header.php";
?>

<head>
    <style>
        .card:hover {
            transform: scale(1.1);
        }

        #topic {
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            text-indent: inherit;
            font-style: italic;

        }

        .flip-card {
            margin-top: 100px;
            margin-bottom: 600px;
            background-color: transparent;
            width: auto;
            height: auto;
            border: 1px solid #f1f1f1;
            perspective: 1000px;
            /* Remove this if you don't want the 3D effect */
        }

        /* This container is needed to position the front and back side */
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        /* Position the front and back side */
        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            /* Safari */
            backface-visibility: hidden;
        }

        /* Style the front side (fallback if image is missing) */
        .flip-card-front {
            background-color: #bbb;
            color: black;
        }

        /* Style the back side */
        .flip-card-back {
            background-color: dodgerblue;
            color: white;
            transform: rotateY(180deg);
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

    <div class="container text-primary" >
        <div class="row" style="margin-bottom:10px;height:600px;margin-top:20px;background-image:url('https://t3.ftcdn.net/jpg/04/09/81/22/360_F_409812204_DB79pC30Mid4zQgUwEFOMbniRhzUUk2X.jpg')">
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">

                            <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" id="topic">History of TODO Lister</h5>
                            </div>


                        </div>
                        <div class="flip-card-back">
                            <div class="card-body text-dark" style="background-image:url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm422-073.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=ef48caa87980815f77343e682d6324ee')">
                                <br>
                                <br>
                                <br>
                                <h5 class="card-title text-dark">History Of <span class="text-primary">TODO LISTER</span></h5>
                                <p class="card-text">This site was developed by Pritam Sharma on 27th December , 2022</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">

                            <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" id="topic">Languages used in TODO Lister</h5>
                            </div>


                        </div>
                        <div class="flip-card-back">
                            <div class="card-body text-dark" style="background-image:url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm422-073.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=ef48caa87980815f77343e682d6324ee')">
                                <br>
                                <br>
                                <br>
                                <h5 class="card-title">Languages used in <span class="text-primary">TODO LISTER</span></h5>
                                <p class="card-text">This site was developed using HTML, CSS, Javascript and MySQL</p> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">

                            <img class="card-img-top overlay" src="./images/to-do-list-apps.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" id="topic">Services offered by TODO Lister</h5>
                            </div>


                        </div>
                        <div class="flip-card-back">
                            <div class="card-body text-dark" style=" background-image:url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/rm422-073.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=ef48caa87980815f77343e682d6324ee')">
                                <br>
                                <br>
                                <br>
                                <h5 class="card-title">What is offered by <span class="text-primary">TODO LISTER</span></h5>
                                <p class="card-text">This site was developed to help the people to save their tasks in ToDo list</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
<?php
include "./includes/footer.php"
?>