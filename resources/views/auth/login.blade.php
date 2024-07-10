<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login/SignUp | Incognito Technology</title>

    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}" />
    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="shortcut icon" href="../../img/favicon.png" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <!-- signin form -->
                    <form action="{{ route('admin.login') }}" method="POST" autocomplete="off" class="login-form">
                      @csrf
                        <div class="logo">
                            <img src="../../img/logo.png" alt="logo" />
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            {{-- <h6>Don't have an account?</h6>
                            <a href="#" class="toggle">Sign Up</a> --}}
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                              <input type="email" class="input-field" name="email" id="email" autocomplete="off" required />
                                <label>Email *</label>
                                <div class="icon-wrap">
                                    <i class="mdi mdi-email-outline mdi-18px"></i>
                                </div>
                            </div>

                            <div class="input-wrap">
                              <input type="password" minlength="4" class="input-field" name="password" id="password" autocomplete="off" required />
                                <label>Password *</label>
                                <div class="icon-wrap">
                                    <i class="mdi mdi-lock-outline mdi-18px"></i>
                                </div>
                            </div>

                            <div class="checkbox-forgotpwd">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="remember_me" />
                                    <label class="form-check-label"> Remember me </label>
                                </div>
                                <a href="../../pages/samples/forgot-password.html" class="forgot-pwd-link">Forgot
                                    password?</a>
                            </div>

                            <input type="submit" value="Sign In" class="sign-btn" />

                            <div class="social-icons">
                                <p>Or continue with</p>
                                <div class="social-icons-wrap">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- carousel part -->
                <div class="carousel-slide">
                    <div class="images-wrapper">
                        <img src="../../img/image1.png" class="image img-1 show" alt="carousel" />
                        <img src="../../img/image2.png" class="image img-2" alt="carousel" />
                        <img src="../../img/image3.png" class="image img-3" alt="carousel" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Welcome to our community</h2>
                                <h2>Customize as you like</h2>
                                <h2>More than 17k people joined us</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->
    <script src="{{ asset('js/toggle.js') }}"></script>
</body>

</html>
