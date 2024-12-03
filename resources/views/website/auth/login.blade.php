<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perumahan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://4.bp.blogspot.com/-wnsjo7MTjNY/WD69jRXwaaI/AAAAAAAAEQU/PMLk_tVsqtMDPGu8LgyayvHNNNbZCuYygCLcB/w1200-h630-p-k-no-nu/komplek-perumahan.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 500px;
            margin: 100px auto;
        }

        .login-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <h2 class="login-title">Login</h2>
            <form action="{{ route('proses_login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-custom w-100">Login</button>
            </form>
            
            @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
            @endif
            <div class="text-center mt-3">
                <small>Don't have an account? <a href="#">Register here</a></small>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>