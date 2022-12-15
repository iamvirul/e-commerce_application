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
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
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
    <div class="col-12 content" style="margin-top: 0;" id="signUpBox">
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
                            <div class="" id="warningBox">
                                <span id="signupWarning">
                                    
                                </span>
                            </div>
                        </div>

                        <div class=" col-12 rounded mt-2">
                            <div class=" col-12">
                                <div class=" row">

                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">First name</span>
                                        <input type="text" class=" form-control" id="fname">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">Last name</span>
                                        <input type="text" class=" form-control" id="lname">
                                    </div>
                                    <div class="col-12 mt-4">
                                        <span class=" fs-5">Email</span>
                                        <input type="text" class=" form-control" id="email1">
                                    </div>
                                    <div class="col-12 mt-4">
                                        <span class=" fs-5">Password</span>
                                        <input type="text" class=" form-control" id="password1">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">Moble</span>
                                        <input type="text" class=" form-control" id="mobile">
                                    </div>
                                    <div class="col-6 mt-4">
                                        <span class=" fs-5">Gender</span>
                                        <select class=" form-select" id="gender">
                                            <?php
                                            require  'backend/lib/connection.php';
                                            $db = new Database();
                                            $rs = $db->search('SELECT * FROM `gender`');
                                            $n = $rs->num_rows;
                                            for ($x = 0; $x < $n; $x++) {
                                                $d = $rs->fetch_assoc();
                                            ?>
                                                <option value="<?php echo $d["id"]; ?>"><?php echo $d["gender"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12  mt-2">

                            <div class="col-12 mt-5 d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center social google" id="google">
                                        <img src="img/google.png" alt="google" onclick="Googlelogin();">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 d-flex justify-content-center">
                                <div class="row">
                                    <div class=" col-6 d-grid">
                                        <button class="btn btn-primary" onclick="changeView();">SignIn</button>
                                    </div>
                                    <div class=" col-6 d-grid ">
                                        <button class="btn btn-success" onclick="signUp();">SignUp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
                    <script src="./js/script.js"></script>

</body>

</html>