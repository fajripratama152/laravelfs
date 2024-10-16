<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #ff6600; /* Warna latar belakang oranye */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .register-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            overflow: hidden;
            width: 500px; /* Ubah lebar menjadi sedang */
        }
        .register-form {
            padding: 30px; /* Kurangi padding untuk proporsi lebih kecil */
            width: 100%;
        }
        .register-form h2 {
            color: #ff6600;
            font-size: 22px;
            margin-bottom: 20px;
        }
        .form-control {
            background-color: #f3f3f3;
            border: none;
            padding: 12px; /* Kurangi padding pada input */
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #ff6600;
            border: none;
            width: 100%;
            padding: 12px; /* Sesuaikan ukuran tombol */
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #e65c00; /* Warna saat di-hover */
        }
        .form-group label {
            color: #ff6600;
        }
        .register-link {
            display: block;
            margin-top: 10px;
            color: #ff6600;
        }
        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-form">
            <h2>Register</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
            <p>Sudah punya akun? <a href="{{ route('login') }}" class="register-link">Login</a></p>
        </div>
    </div>
</body>
</html>
