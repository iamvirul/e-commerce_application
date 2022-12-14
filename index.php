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
        <hr />
        <div class=" col-12" id="basicSearchResults">
            <div class="row">
                <div class=" col-12 d-none d-lg-block">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block mb-4 carousel-fade" data-bs-ride="true">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner w-100 mt-2">
                                <div class="carousel-item active ">
                                    <img src="img/product_img/pork.webp" class="d-block w-100 poster rounded-3" alt="...">
                                    <div class=" carousel-caption d-none d-md-block poster-caption">
                                        <span class="poster-title pt fs-4">Welcome to shop.online</span><br>
                                        <span class="poster-txt">Best online food store in one click.</span>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/product_img/fried_rice.webp" class="d-block w-100 poster rounded-3">
                                    <div class=" carousel-caption d-none d-md-block poster-caption">
                                        <span class="poster-title pt fs-4">Your favorite foods in one touch</span>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/product_img/duck.webp" class="d-block w-100 poster rounded-3 " alt="...">
                                    <div class=" carousel-caption d-none d-md-block poster-caption mb-5">
                                        <span class="poster-title pt fs-1">Find your favorites now <i class="bi bi-hearts" style="color: red;"></i></span>
                                    </div>
                                </div>
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
    <div class=" col-12">
        <div class=" row ms-5">
            <?php
            require_once 'backend/lib/connection.php';
            $db = new Database();
            $catagory_rs = $db->search("SELECT * FROM `catagory`");
            $catagory_num = $catagory_rs->num_rows;

            for ($x = 0; $x < $catagory_num; $x++) {
                $catagory_data = $catagory_rs->fetch_assoc();
            ?>
                <span class="fs-4 fw-bolder"><?php echo $catagory_data["catogory"] ?></span>
                <hr class=" col-11 g-1">


                <div class=" col-12">
                    <div class=" row">
                        <?php
                        $product_rs = $db->search("SELECT * FROM `product` WHERE `catagory_id` = '" . $catagory_data["id"] . "' ORDER BY `added_date` DESC LIMIT 6 OFFSET 0");
                        $product_num = $product_rs->num_rows;
                        for ($y = 0; $y < $product_num; $y++) {
                            $product_data = $product_rs->fetch_assoc();
                            $img_rs = $db->search("SELECT * FROM `img` WHERE `product_id` = '" . $product_data["id"] . "'");
                            $img_data = $img_rs->fetch_assoc();
                        ?>
                            <div class="card me-4 mt-2" style="width: 22rem;">
                                <img src="<?php echo $img_data["path"] ?>" class="card-img-top imgtop" alt="..." style="height: 180px;">
                                <div class="card-body">
                                    <span class="card-title fs-5"><?php echo $product_data["title"] ?></span> &nbsp;&nbsp;&nbsp;&nbsp; <span class=" text-end heart"><i class="bi bi-suit-heart"></i></span><br>
                                    <span class=" text-muted">Price:-Rs.<?php echo $product_data["price"] ?>.00</span>&nbsp;|&nbsp;<span class=" text-muted">Delivery fee:-Rs.<?php echo $product_data["delevery_fee_colombo"] ?>/=</span>
                                    <div class=" col-12 text-center">
                                        <button class="btn btn-success mt-3">Order Now</button>
                                        <button class="btn btn-danger mt-3" onclick="addcart(<?php echo $product_data['id']; ?>);">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            <?php
            }

            ?>
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