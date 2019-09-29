  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Proceed</title>
</head>

<body>
    

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1 style="padding-bottom: 20px">Create Account</h1>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="tel" placeholder="Phone Number" />
                <input type="password" placeholder="Password" />
                <span style="padding-top: 10px"><button>Sign Up</button></span>
            </form>
        </div>


        <div class="form-container sign-in-container">
            <form action="#">
                <h1 style="padding-bottom: 20px">Sign in</h1>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>


        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Foodie!</h1>
                    <p>Enter your personal details and start eating with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <div class="landing">
        <div class="opac">
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="index.html">Foodilite</a>
        </p>
    </footer>
    <script src="./js/main.js"></script>
</body>

</html>
