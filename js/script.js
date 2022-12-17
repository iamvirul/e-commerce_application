function Googlelogin() {
    let xhttps = new XMLHttpRequest();
    xhttps.onreadystatechange = function () {
        if (this.readyState == 4) {
            let text = xhttps.responseText;
            // alert(text);
            window.location.href = text;
        }
    }
    xhttps.open("POST", "backend/gloginP.php", true);
    xhttps.send();
}
function login() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let rememberMe = document.getElementById("rememberme").checked;

    let form = new FormData();
    form.append("email", email);
    form.append("password", password);
    form.append("rememberme", rememberMe);

    let xhttps = new XMLHttpRequest();
    xhttps.onreadystatechange = function () {
        if (this.readyState == 4) {
            let text = xhttps.responseText;
            if (text == "Success") {
                window.location = "home"
            }
        }
    }
    xhttps.open("POST", "backend/loginP.php", true);
    xhttps.send(form);
}
let forgotPasswordModal;
function forgotPassword() {
    let email = document.getElementById("email").value;
    let forgotpassword = document.getElementById("forgotpassword");
    forgotPasswordModal = new bootstrap.Modal(forgotpassword);

    let xhttps = new XMLHttpRequest();
    xhttps.onreadystatechange = function () {
        if (this.readyState == 4) {
            let text = xhttps.responseText;
            // alert(text);
            if (text = "Success") {

                forgotPasswordModal.show();
            } else {
                forgotPasswordModal.hide();
                alert(text);
            }
        }
    }
    xhttps.open("POST", "backend/forgotpassword.php?email=" + email, true);
    xhttps.send();
}
function verify() {
    let verification_code = document.getElementById("verification").value;
    let email = document.getElementById("email").value;
    let form = new FormData();
    form.append("verification_code", verification_code);
    form.append("email", email);


    let xhttps = new XMLHttpRequest();
    xhttps.onreadystatechange = function () {
        if (this.readyState == 4) {
            let text = xhttps.responseText;
            // alert(text);
            if (text == "Your verification code is correct") {
                document.getElementById("alertverify").classList = "text-sucess alert alert-success mt-1 ";
                document.getElementById("alertverify").innerText = text;
            } else if (text == "Please type your email in Sign In") {
                window.location.href = "login.php";
                alert(text);
            } else {
                document.getElementById("alertverify").classList = "text-danger alert alert-danger mt-1";
                document.getElementById("alertverify").innerText = text;
            }
        }
    }
    xhttps.open("POST", "backend/modalverify.php", true);
    xhttps.send(form);
}
function showpassword() {
    let newPassword = document.getElementById("newP");
    document.getElementById("eye");

    if (newPassword.type == "password") {
        document.getElementById("newP").type = "text";
        document.getElementById("eye").className = "bi bi-eye-fill";

    } else {
        document.getElementById("newP").type = "password";
        document.getElementById("eye").className = "bi bi-eye-slash-fill";
    }

}
function showpassword1() {
    let conPassword = document.getElementById("conformP");
    document.getElementById("eye");

    if (conPassword.type == "password") {
        document.getElementById("conformP").type = "text";
        document.getElementById("eye1").className = "bi bi-eye-fill";

    } else {
        document.getElementById("conformP").type = "password";
        document.getElementById("eye1").className = "bi bi-eye-slash-fill";
    }

}
function verifier() {
    let code = document.getElementById("verification").value;
    let newP = document.getElementById("newP").value;
    let conPassword = document.getElementById("conformP").value;
    let email = document.getElementById("email").value

    let form = new FormData();
    form.append("code", code);
    form.append("newP", newP);
    form.append("conPassword", conPassword);
    form.append("email", email);

    let xhttps = new XMLHttpRequest();
    xhttps.onreadystatechange = function () {
        if (this.readyState == 4) {
            let text = xhttps.responseText;
            alert(text);
            if (text == "sucess") {
                forgotPasswordModal.hide();
            }

        }
    }
    xhttps.open("POST", "backend/changePassword.php", true);
    xhttps.send(form);
}
function changeView() {

    let signUpBox = document.getElementById("signUpBox");
    let signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");

}
function signUp(){
    let email = document.getElementById("email1").value;
    let gender = document.getElementById("gender").value;
    let mobile = document.getElementById("mobile").value;
    let password = document.getElementById("password1").value;
    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;

    let form = new FormData();
    form.append("email",email);
    form.append("gender",gender);
    form.append("mobile",mobile);
    form.append("password",password);
    form.append("fname",fname);
    form.append("lname",lname);


    let xhttps = new XMLHttpRequest();
    xhttps.onreadystatechange = function(){
        if(this.readyState == 4){
            let text = xhttps.responseText;
            alert(text);
            if(text = "success"){
                changeView();
                document.getElementById("warningBox").classList = "col-12 alert alert-success text-center"
                document.getElementById("signupWarning").innerText = text;
            }else{
                document.getElementById("warningBox").classList = "col-12 alert alert-danger text-center"
                 document.getElementById("signupWarning").innerText = text;
            }
        }
    }
    xhttps.open("POST","backend/signupP.php",true);
    xhttps.send(form);

   
}
function addcart(ProductId){
    let xhttps = new XMLHttpRequest();
    xhttps.onreadystatechange = function(){
        if(this.readyState == 4){
            let text = xhttps.responseText;
            if(text == "0"){
                window.location = "login";
            }else{
                alert(text);
            }
        }
    }
    xhttps.open("GET","backend/cartP.php?ProductId="+ProductId,true);
    xhttps.send();
}
   