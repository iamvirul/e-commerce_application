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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    <video class=" vedio  " height="vh100" autoplay muted loop src="img/video.mp4">
    </video>


    <div class="col-12 content d-none" style="margin-top: 9%;" id="signInBox">
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
                    <div class="col-6">
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
                                <input class="form-control" type="text" id="email">
                            </div>
                            <div class="row mt-4">
                                <span class=" form-lable fs-5">Password</span>

                            </div>
                            <div class=" col-12">
                                <input class="form-control" type="password" id="password">
                            </div>
                        </div>
                        <div class="col-12  mt-4">
                            <div class="text-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="rememberme">
                                    <span>Remember me</span>
                                    <!-- <span class="fogot text-start" onclick="forgotPassword();">Forgot Password</span> -->
                                </div>
                                <div class="text-end ">
                                    <span class="fogot text-decoration-underline" onclick="forgotPassword();">Forgot Password</span>
                                </div>
                            </div>
                            <div class="col-12 mt-5 d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center social google" id="google">
                                        <img src="img/google.png" alt="google" onclick="Googlelogin();">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5 d-flex justify-content-center">
                                <div class="row">
                                    <div class=" col-6 d-grid">
                                        <button class="btn btn-primary" onclick="login();">SignIn</button>
                                    </div>
                                    <div class=" col-6 d-grid ">
                                        <button class="btn btn-success" onclick="changeView();">SignUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal" tabindex="-1" id="forgotpassword">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-monospacet text-dark ">Forgot Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class=" col-12">
                                        <div>
                                        </div>
                                    </div>
                                    <div class=" col-12">
                                        <span class=" col-6 text-dark">Verification code</span> <span class=" col-6 text-danger" style="font-size: smaller;">(Your verification code sent to your email.)</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="verification code" id="verification">
                                            <button class=" btn btn-warning" onclick="verify();">verify</button>
                                        </div>
                                        <span class="text-success" id="verify-sucess"></span>
                                    </div>
                                    <div class=" text-center">
                                        <span id="alertverify" style="font-size: smaller;"></span>
                                    </div>
                                    <div class=" col-9">
                                        <span class="text-black">New Password</span>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="newP">
                                            <span class="input-group-text btn btn-secondary" onclick="showpassword();"><i class="bi bi-eye-slash-fill" id="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class=" col-9">
                                        <span class="text-black">Comfrom Password</span>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="conformP">
                                            <span class="input-group-text btn btn-secondary" onclick="showpassword1();"><i class="bi bi-eye-slash-fill" id="eye1"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="verifier();">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-12 content" style="margin-top: 3%;" id="signUpBox">
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
                    <div class="col-6">
                        <div class="row">
                            <div class="text-center">
                                <span class="signIN">SignUp</span>
                            </div>
                        </div>
                        <div class=" col-12 rounded mt-4">
                            <div class="row">
                                <span class=" form-lable fs-5">Email</span>

                            </div>
                            <div class=" col-12">
                                <input class="form-control" type="text" id="email">
                            </div>
                            <div class="row mt-4">
                                <span class=" form-lable fs-5">Password</span>

                            </div>
                            <div class=" col-12">
                                <input class="form-control" type="password" id="password">
                            </div>
                            <div class=" col-12">
                                <div class=" row">
                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">First name</span>
                                        <input type="text" class=" form-control">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">Last name</span>
                                        <input type="text" class=" form-control">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">Moble</span>
                                        <input type="text" class=" form-control">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">Gender</span>
                                        <input type="text" class=" form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12  mt-4">

                            <div class="col-12 mt-5 d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center social google" id="google">
                                        <img src="img/google.png" alt="google" onclick="Googlelogin();">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-5 d-flex justify-content-center">
                                <div class="row">
                                    <div class=" col-6 d-grid">
                                        <button class="btn btn-primary" onclick="changeView();">SignIn</button>
                                    </div>
                                    <div class=" col-6 d-grid ">
                                        <button class="btn btn-success">SignUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                    <script src="./js/script.js"></script>

</body>

</html>