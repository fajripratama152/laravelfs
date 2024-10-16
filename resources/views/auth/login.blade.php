<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #ff6600; /* Ubah warna ungu menjadi oranye */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            overflow: hidden;
            width: 800px;
        }
        .login-form {
            padding: 40px;
            width: 50%;
        }
        .login-form h2 {
            color: #ff6600; /* Ubah warna teks menjadi oranye */
            font-size: 24px;
            margin-bottom: 30px;
        }
        .form-control {
            background-color: #f3f3f3;
            border: none;
            padding: 15px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #ff6600; /* Ubah warna tombol menjadi oranye */
            border: none;
            width: 100%;
            padding: 15px;
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #e65c00; /* Warna saat tombol di-hover */
        }
        .login-image {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ff6600; /* Ubah warna ungu di bagian gambar menjadi oranye */
            color: #fff;
            text-align: center;
            font-size: 50px;
        }
        .login-image i {
            font-size: 100px;
            color: #fff;
        }
        .form-group label {
            color: #ff6600; /* Ubah warna label menjadi oranye */
        }
        .forgot-password, .register-link {
            display: block;
            margin-top: 10px;
            color: #ff6600; /* Ubah warna link menjadi oranye */
        }
        .forgot-password:hover, .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <a href="#" class="forgot-password">Forgot password?</a>
            <p>Belum punya akun? <a href="{{ route('register') }}" class="register-link">Daftar</a></p>
        </div>
        <div class="login-image">
            <i class="fas fa-user"></i> <!-- Menggunakan icon user -->
        </div>
    </div>
</body>
</html>
