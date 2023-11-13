<!DOCTYPE html>
<html>

<head>
    <title>Tambah karyawan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h3 {
            text-align: center;
            color: #333;
        }

        .containerr {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(245, 245, 245, 0.7);
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 10px rgba(0, 0, 0, 0.2); /* Tambahkan box-shadow untuk lapisan hitam pudar */
            max-width: 600px;
            margin: 100px auto;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .card img {
            max-width: 10%;
            height: auto;
            margin: 10px 0;
        }

        .center-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
            padding-bottom: 20px;
        }

        .print-button {
            text-align: center;
            margin-top: 20px;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-container .btn {
            width: 48%;
        }
 

        body {
            background-image: url('https://dorandev.com/wp-content/uploads/2023/08/3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            color: #333;
        }

        a {
            color: #007BFF;
        }

        @media (max-width: 768px) {
    .container {
        width: 90%;
    }

    .btn-container {
        flex-direction: column;
    }

    .btn-container .btn {
        width: 100%;
        margin-bottom: 10px;
        background-color: white; /* Warna latar belakang putih */
        color: #0C356A; /* Warna teks */
    }


            .navbar-toggler {
                margin-left: auto;
            }

            .navbar-nav {
                flex-direction: column;
            }

            .navbar-nav .nav-item {
                margin-right: 0 !important;
            }

            .navbar-brand {
                margin-right: 0 !important;
            }
        }

        /* Navbar Style */
        .navbar {
            background-color: #0C356A;
            padding: 10px 0;
        }

        .navbar-brand {
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .navbar-toggler-icon {
            color: white;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav a {
            color: white;
            font-size: 18px;
            padding: 5px 10px;
        }

        .navbar-container {
            max-width: 100%;
            margin: 0;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-nav-right {
            display: flex;
            flex-direction: row;
        }

        .ml-auto {
            margin-left: auto !important;
        }

        .navbar-nav-right .nav-item {
            margin-left: 10px;
        }

        @media (min-width: 768px) {
            .navbar-nav-right {
                flex-direction: row;
            }
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar">
    <div class="container">
        <a class="navbar-brand"  href="index.php" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35" id="user-location">
  <path d="M14.49,10.86a3.09,3.09,0,1,0-5,0,4.67,4.67,0,0,0-1.12,1A1,1,0,1,0,10,13.12a2.62,2.62,0,0,1,2.05-1h0a2.62,2.62,0,0,1,2.05,1,1,1,0,0,0,.78.37,1,1,0,0,0,.78-1.62A4.67,4.67,0,0,0,14.49,10.86ZM12,10.13h0A1.09,1.09,0,1,1,13.09,9,1.09,1.09,0,0,1,12,10.13Zm8.46-.5A8.5,8.5,0,0,0,7.30,3.36,8.56,8.56,0,0,0,3.54,9.63,8.46,8.46,0,0,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Z" fill="#FFFFFF"/>
</svg>&nbsp;Jeclock</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white; border: 1px solid black;">
    <span ><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="none" viewBox="0 0 510 511" id="menu"><path fill="#000" fill-rule="evenodd" d="M356 181H156V166H356V181zM283.017 256.352L156.001 256 156.043 241 283.059 241.352 283.017 256.352zM356.004 331H156.004V316H356.004V331z" clip-rule="evenodd"></path></svg></span>
</button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="absen.php">Absen</a>
                </li>
                <li class="nav-item"style="background-color:white;  border-radius:10px; " >
                    <a class="nav-link" href="input.php" style="color:black; ">Input Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view.php">Lihat Data</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="containerr center-form">
    <h3>TAMBAH KARYAWAN</h3><br>

    <form method="post" action="add_orang.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control" name="nik" id="nik" minlength="4" maxlength="20" required onkeyup="generateBarcode()">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
    </div>
    <div class="form-group">
        <label for="nomerwa">Nomer WA</label>
        <input type="text" class="form-control" name="nomerwa" id="nomerwa" required>
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto" accept="image/*" required>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="submit" id="btn_submit" value="Tambah">
    </div>
</form>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/jsbarcode/3.11.0/JsBarcode.all.min.js"></script>
<script>
    function generateBarcode() {
        var nik = document.getElementById("nik").value;
        JsBarcode("#barcodeImage", nik, {
            format: "CODE128",
            displayValue: false
        });
    }
</script>
</body>

</html>
