<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

    <title>Document</title>

</head>

<body>
    <header class="py-3 px-3 border">
        <button class="btn button-icon" ; onclick="hamMenu()">
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="44" viewBox="0 0 24 24" class="ham-icon">
            <path fill="currentColor" fill-rule="evenodd"
                d="M5.75 5.25h12.5a.75.75 0 1 1 0 1.5H5.75a.75.75 0 0 1 0-1.5zm0 6h12.5a.75.75 0 1 1 0 1.5H5.75a.75.75 0 1 1 0-1.5zm0 6h12.5a.75.75 0 1 1 0 1.5H5.75a.75.75 0 1 1 0-1.5z">
            </path>
        </svg>
        <h1>Welcome</h1>
    </header>
    <div class="container-fluid all-content">
        <div class="row">
            <div class="profile border" id="left-bar">
                <div class="row text-center py-5">
                    <img src="./asset/photo-profile.JPG" alt="" class="Photo-profile">
                    <h3>Ridho Saputra</h3>
                </div>

                <div class="row py-2">
                    <div class="col-2">
                        <img src="./asset/email.avif" alt="" width="25px" height="25px">
                    </div>
                    <div class="col">
                        <p> saputra22022@gmail.com</p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-2">
                        <img src="./asset/insta.png" alt="" width="25px" height="25px">
                    </div>
                    <div class="col">
                        <p> @ridhosaputra22301</p>
                    </div>
                </div>
                <div class="row py-5 text-center">
                    <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ratione
                        libero ex odio officia repellat, cumque vero modi unde adipisci!"
                    </p>
                </div>
                <div class="row">
                    <h6>Donation</h6>
                    <div class="row py-2">
                        <div class="col-2">
                            <img src="./asset/trakteer.png" alt="" width="25px" height="25px">
                        </div>
                        <div class="col">
                            <p>Trakteer</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="container-fluid " id="contentId">
                    <div class="row">
                        <h2>Project List</h2>
                    </div>
                    <!-- CONTENT -->
                    <div id="overflowTest" class="project-content">
                        <div class="row">
                            <?php include 'projectList.php' ?>
                        </div>
                        <!-- END CONTENT -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>