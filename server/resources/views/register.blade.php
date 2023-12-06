<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/sign.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/pw.js') }}"></script>
    <title>DokterKu - Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="gedung">
            <img src="img/Hospital building-amico 1.png">
        </div>

        <div class="sign">
            <div class="create">
                Create Account
            </div>

            <form action="/register" method="POST">
                @csrf
                
                <div class="isi">
                    <p class="tipe">First Name</p>
                    <input class="input" type="text" name="first_name" id="first_name" placeholder="First Name">
                </div> 

                <div class="isi">
                    <p class="tipe">Last Name</p>
                    <input class="input" type="text" name="last_name" id="last_name" placeholder="Last Name">
                </div> 

                <div class="isi2">
                    <p class="tipe">Email</p>
                    <input class="input2" type="text" name="email" id="email" placeholder="email@mail.com">
                </div> 

                <div class="isi2">
                    <p class="tipe">Password</p>
                    <input class="input2" type="password" name="password" id="password" placeholder="Password">
                    <img class="toggle-password" onclick="togglePasswordVisibility()"></span>
                </div> 

                <div class="createbutton">
                    <button type="submit" class="create-account-btn">Create Account</button>
                </div>

                <p class="already">Already have an account? <a class="login-link" href="login.html">Login</a></p>

                <div class="line-container">
                    <div class="line"></div>
                    <div class="or">or</div>
                    <div class="line"></div>
                </div>                  

                <div class="login-container">
                    <a href="#" class="login-button">
                        <img src="img/google.png" alt="Google Logo" class="google-logo">
                        Login with Google
                    </a>

                    <a href="#" class="login-button2">
                        <img src="img/fb.png" alt="Facebook Logo" class="google-logo">
                        Login with Facebook
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
