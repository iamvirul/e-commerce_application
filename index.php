<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop.online</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class=" container-fluid">
        <hr />
        <hr />
        <hr />
        <div class=" col-12" id="basicSearchResults">
            <div class="row">
                <div class=" col-12 d-none d-lg-block">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block mb-4" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner w-100 mt-2">
                                <div class="carousel-item active ">
                                    <img src="img/lock.png" class="d-block w-100 poster mt-2" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/logo2.png" class="d-block w-100 poster" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/google.png" class="d-block w-100 poster " alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
 
    </div>
    </div>

    <?php
    include 'footer.php';
    ?>

    <script src="./node_modules/bootstrap/js/src/toast.js"></script>
    <script src="./js/script.js"></script>

</body>

</html>