<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | shop.online</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <?php
    if (isset($_SESSION["user"])) {
    ?>
        <div class=" col-12">
            <?php include 'header.php'; ?>
            <hr>
            <hr>
            <br>
            <div class=" col-12 mt-3">
                <div class=" row">
                    <div class="col-6 col-lg-7">
                        <div class="card mb-3 ms-2" style="max-width: 760px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/product_img/kungChiken.webp" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ms-2" style="max-width: 760px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/product_img/kungChiken.webp" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-6 col-lg-5">
                        <div class="card" style="max-width: 500px;">
                            <div class="card-header">
                                Food item (2)
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Summary of food items</h5>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-9">
                                            <span class="card-text">Sum of food prices</span><br>
                                            <span class="card-text">delevary fees</span><br>
                                        </div>
                                        <div class="col-3 text-end">
                                            <span>Rs 1000.00</span><br>
                                            <span class="text-danger">Rs 100/=</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <div class=" col-9">
                                            <span class="card-text">Net price</span><br>
                                            </div>
                                            <div class="col-3 text-end">
                                            <span class="card-text text-success">Rs 1100/=</span><br>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary font-monospace">Go to check out</a>
                                <a href="home" class="btn btn-warning font-monospace ">Continue shopping</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'footer.php'; ?>
        </div>
    <?php
    } else {
        header("Location: login");
    }
    ?>

</body>

</html>