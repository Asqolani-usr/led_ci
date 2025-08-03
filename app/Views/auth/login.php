<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

    <!-- Font & CSS -->
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="<?= base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #4e73df;
            --secondary-blue: #5a6acf;
            --light-blue: #6f7ce8;
            --blue-gradient: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow-soft: 0 10px 25px rgba(78, 115, 223, 0.15);
            --shadow-hover: 0 15px 30px rgba(78, 115, 223, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--blue-gradient);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* Subtle background pattern */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.06) 0%, transparent 50%);
            pointer-events: none;
        }

        .container {
            position: relative;
            z-index: 10;
            max-width: 420px;
            width: 100%;
            margin: 0 20px;
        }

        /* Clean Glass Card */
        .login-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid var(--glass-border);
            box-shadow: var(--shadow-soft);
            padding: 50px 40px;
            transition: all 0.3s ease;
        }

        .login-card:hover {
            box-shadow: var(--shadow-hover);
        }

        /* Clean Header */
        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-header h1 {
            color: white;
            font-weight: 600;
            font-size: 2.2rem;
            margin-bottom: 8px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .login-header p {
            color: rgba(255, 255, 255, 0.8);
            font-weight: 400;
            font-size: 1rem;
        }



        /* Clean Form Styling */
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.12);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            color: white;
            font-size: 16px;
            padding: 18px 50px 18px 20px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            width: 100%;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.18);
            border-color: rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.1);
            color: white;
            outline: none;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
            font-weight: 400;
        }

        /* Input Icons */
        .input-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease;
        }

        .form-control:focus+.input-icon {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Professional Button */
        .btn-login {
            background: linear-gradient(135deg, #6f7ce8 0%, #4e73df 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            font-size: 16px;
            padding: 18px;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-transform: none;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(78, 115, 223, 0.4);
            background: linear-gradient(135deg, #7c8ce8 0%, #5a6acf 100%);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* Clean Links */
        .login-links {
            text-align: center;
            margin-top: 30px;
        }

        .login-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
            margin: 8px 15px;
            position: relative;
        }

        .login-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 50%;
            background: white;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .login-links a:hover {
            color: white;
            text-decoration: none;
        }

        .login-links a:hover::after {
            width: 100%;
        }

        /* Loading Animation - Simple */
        .btn-login.loading {
            pointer-events: none;
            opacity: 0.8;
        }

        .btn-login.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.6);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 5;
        }

        .password-toggle:hover {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .login-card {
                padding: 40px 30px;
                margin: 15px;
                border-radius: 16px;
            }

            .login-header h1 {
                font-size: 1.9rem;
            }

            .form-control {
                padding: 16px 45px 16px 18px;
            }

            .btn-login {
                padding: 16px;
            }
        }

        /* Focus states for accessibility */
        .form-control:focus,
        .btn-login:focus,
        .login-links a:focus {
            outline: 2px solid rgba(255, 255, 255, 0.4);
            outline-offset: 2px;
        }

        /* Subtle entrance animation */
        .login-card {
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-card">
            <div class="login-header">
                <h1>Welcome Back!</h1>
                <p>Silakan masuk ke akun Anda</p>
            </div>

            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                                    <?= session()->getFlashdata('msg') ?>
                                </div>
                        <?php endif; ?>

            <form class="login-form" action="<?= base_url('login'); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control"
                        placeholder="Enter Username..." value="<?= old('username'); ?>" required>
                    <i class="fas fa-user input-icon"></i>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                        required>
                    <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                </div>

                <button type="submit" class="btn btn-login" id="loginBtn">
                    <span id="btnText">Login</span>
                </button>
            </form>

        </div>
    </div>

    <!-- JS -->
    <script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('js/sb-admin-2.min.js'); ?>"></script>

    <script>
        // Password visibility toggle
        document.getElementById('togglePassword').addEventListener('click', function () {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // Form submission with loading
        document.querySelector('.login-form').addEventListener('submit', function (e) {
            const btn = document.getElementById('loginBtn');
            const btnText = document.getElementById('btnText');

            btn.classList.add('loading');
            btnText.style.opacity = '0';
        });

        // Simple focus management
        document.addEventListener('DOMContentLoaded', function () {
            // Focus on first input
            document.getElementById('username').focus();

            // Enter key navigation
            document.getElementById('username').addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    document.getElementById('password').focus();
                    e.preventDefault();
                }
            });
        });
    </script>
</body>

</html>