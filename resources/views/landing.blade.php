<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/app.css">
    <style>
        body {
            background-color: white;
        }

        .landing h1,
        .landing h2 {
            font-size: 2.5rem;
            /* Sesuaikan ukuran font */
            color: black;
            /* Warna teks */
        }

        .landing p {
            font-size: 1.2rem;
            /* Sesuaikan ukuran font */
            color: black;
            /* Warna teks */
        }

        .landing {
            text-align: center;
            margin: 50px auto;
            max-width: 600px;
            background-color: transparent;
            /* Menghilangkan warna latar kotak */
            padding: 0;
            /* Menghilangkan padding */
        }

        .btn-outline-primary,
        .btn-outline-success {
            font-size: 1.2rem;
            /* Sesuaikan ukuran font tombol */
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="landing">
                    <div class="container my-9">
                        <h1>Selamat Datang Calon Mahasiswa Baru</h1>
                        <p>Silahkan melakukan registrasi akun untuk dapat masuk</p>
                        <a href="{{route('register.index')}}" class="btn btn-outline-primary">Register</a>
                    </div>
                    <div class="container my-5">
                        <h2>Sudah Memiliki Akun?</h2>
                        <p>Klik untuk ke halaman login</p>
                        <a href="{{route('register.login')}}" class="btn btn-outline-success">Login</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>