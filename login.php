<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body >
    <video class=" vedio  " height="vh100" autoplay muted loop src="img/video.mp4">
    </video>
    

    <div class="col-12 content" style="margin-top: 9%;">
        <div class="col-12 ">
            <div class="row">
                <div class="col-12 mt-1 d-flex justify-content-center">
                    <img src="img/lock.png" width="60px" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-inline-flex  justify-content-center">
                <div class="col-12 rounded-end d-flex justify-content-center">
                    <div class="col-5">
                        <div class="row">
                            <div class="text-center">
                                <span class="signIN">SignIn</span>
                            </div>
                        </div>
                        <div class=" col-12 rounded mt-4">
                            <div class="row">
                                <span class=" form-lable fs-5">Email</span>
                               
                            </div>
                            <div class=" col-12">
                                <input class="form-control" type="text" id="email" value="<?php echo $fb_login_url;?>">
                            </div>
                            <div class="row mt-4">
                                <span class=" form-lable fs-5">Password</span>
                               
                            </div>
                            <div class=" col-12">
                                <input class="form-control" type="password" id="password">
                            </div>
                        </div>
                        <div class="col-12 text-end mt-4">
                            <div class="col-5"></div>
                            <span class="fogot">Forgot Password</span>
                        </div>
                        <div class="col-12 mt-5 d-flex justify-content-center">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-center social google" id="google">
                                    <img src="img/google.png" alt="google" onclick="Googlelogin();">
                                </div>
                                <div class="col-6 d-flex justify-content-center social">
                                    <img src="img/twitter.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5 d-flex justify-content-center">
                            <div class="row">
                                <div class=" col-6 d-grid">
                                    <button class="btn btn-primary" onclick="login();">SignIn</button>
                                </div>
                                <div class=" col-6 d-grid ">
                                    <button class="btn btn-success">SignUp</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="./node_modules/bootstrap/js/dist/modal.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>