<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>EvryTec | Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <style>
        .captcha{
            text-decoration: line-through;
            letter-spacing: 10px;
            background: lavender;
        }

        .bg{
            background: #594187;
        }

        .submitBTN{
            background: #b1aac7;
        }

        .errorMM{
            color: #d22c2c;
        }
    </style>
</head>

<body>
<div class="bg">
    <div class="container">
        <div class="col d-flex align-items-center justify-content-center">
            <div class="col-8">
                <div class="d-flex align-items-center min-vh-100">
                    <div class="d-flex justify-content-center w-100 d-block bg-white shadow-lg rounded my-5">
                        <div class="row-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <a href="/" class="d-block mb-5">
                                        <img src="{{asset('assets/images/logo.png')}}" alt="app-logo" height="18" />
                                    </a>
                                </div>
                                <h1 class="h5 mb-1">Welcome Back!</h1>
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                                <form class="user" method="post" action="#">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" id="InputEmail" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="InputPassword" placeholder="Password" required>
                                    </div>
                                    <div id="capcthaBox" class="d-flex justify-content-center p-3 mb-3 font-size-20 font-italic font-weight-bold captcha"></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="InputCaptcha" placeholder="Enter Captcha" required>
                                    </div>
                                    <div id="errorBOX" class="d-none" dir="rtl"></div>
                                    <button type="submit" class="btn font-size-14 font-weight-bold btn-block submitBTN"> Log In </button>
                                </form>
                                <!-- end row -->
                            </div> <!-- end .padding-5 -->
                        </div> <!-- end col -->
                    </div> <!-- end .w-100 -->
                </div> <!-- end .d-flex -->
            </div> <!-- end col-->
        </div> <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metismenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/simplebar.min.js"></script>

<script src="assets/js/theme.js"></script>

<!-- App js -->
<script>
    let errorMessage = document.getElementById("errorBOX");
    const captcha = document.getElementById("capcthaBox");

    function generateCaptcha() {
        document.getElementById("InputCaptcha").value = "";
        let uniquechar = "";

        const randomchar =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        // Generate captcha for length of
        // 5 with random character
        for (let i = 0; i < 5; i++) {
            uniquechar += randomchar.charAt(Math.random() * randomchar.length);
        }
        captcha.innerHTML = uniquechar;
    }

    function checkCaptcha() {
        const usr_input = document.getElementById("InputCaptcha").value;

        if (usr_input == captcha.innerHTML) {
            return true;
        } else {
            generateCaptcha();
            showErrorMessage("تم إدخال ال captcha بشكل خاطئ");
            return false;
        }
    }

    const inputemail = document.getElementById("InputEmail");

    function checkEmail() {
        if (inputemail.value == null || inputemail.value == "") return true;

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(inputemail.value);
    }

    const form = document.querySelector('form');

    form.addEventListener("submit", function (e) {
        if (!validateInputs()) e.preventDefault();
    });

    function validateInputs() {
        if (!checkEmail()) {
            showErrorMessage("خطأ في إدخال الايميل");
            return false;
        }

        if (!checkCaptcha()) return false;

        showErrorMessage();

        return true;
    }

    function showErrorMessage(message){
        if(message == null)
            errorMessage.className="d-none";
        else
            errorMessage.className="errorMM p-1 d-flex justify-content-center mb-3 font-size-12";

        errorMessage.innerHTML = message;
    }
    generateCaptcha();
</script>

<script src="assets/js/theme.js"></script>
</body>
</html>
