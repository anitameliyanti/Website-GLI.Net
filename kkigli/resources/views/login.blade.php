<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: #ABD2F6;
        }
        .container-fluid {
            height: 100%;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        /* Left Section: Welcome */
        .left-section {
            position: relative;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #474747;
        }
        .left-section .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #1D6CB2;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
            z-index: 0;
        }
        .left-section .background-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #78B6F0;
            clip-path: polygon(60% 0, 100% 0, 100% 100%, 100% 100%);
            z-index: 0;
        }
        .welcome-box {
            position: relative;
            z-index: 1;
            background-color: #F6F6F6;
            padding: 2rem;
            box-shadow: 6px 10px 4px 0px rgba(0, 0, 0, 0.5);
            text-align: left;
            max-width: 500px;
            margin-left: 145px;
            clip-path: polygon(0 0, 100% 0, 87% 100%, 0 100%);
        }
        .welcome-box h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .welcome-box span {
            color: #1D6CB2;
        }
        .welcome-box img {
            max-width: 50%;
            margin-top: 0.5rem;
            margin-left: 170px;
        }
        /* Right Section with skew effect */
        .right-section {
            background: #afd1f1;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        .right-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: -50px;
            width: 110%;
            height: 100%;
            background-color: #ABD2F6;
            transform: skewX(-10deg);
            z-index: 0;
        }
        .login-box {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 400px;
        }
        .login-box h3 {
            font-weight: bold;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #474747;
        }
        .login-box input {
            border-radius: 0.5rem;
        }
        .login-box .login-btn {
            background-color: #1D6CB2;
            border: none;
        }
        .login-box .login-btn:hover {
            background-color: #0b5ed7;
        }
        .social-icons i {
            font-size: 1.5rem;
            margin: 0 0.5rem;
            cursor: pointer;
            color: #474747;
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .left-section {
                display: none;
            }
            .right-section::before {
                transform: skewX(0deg);
                left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row w-100 h-100">
            <!-- Left Section -->
            <div class="col-md-6 left-section">
                <div class="background"></div>
                <div class="background-overlay"></div>
                <div class="welcome-box">
                    <h1>Welcome to <br><span>GLI.Net</span></h1>
                    <img src="image/login-img.png" alt="Computer Graphic">
                </div>
            </div>
            <!-- Right Section -->
            <div class="col-md-6 right-section">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <div class="login-box">
                    <h3>LOGIN</h3>
                    <!-- Login Form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <a href="#" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn login-btn w-100 text-white py-2">Login</button>
                        <div class="text-center mt-3">
                            <p>Don't have an account? <a href="{{ route('register') }}" class="fw-bold text-decoration-none">Sign Up</a></p>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p>Or</p>
                        <div class="social-icons">
                            <i class="bi bi-google"></i>
                            <i class="bi bi-apple"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
