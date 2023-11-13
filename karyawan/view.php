<!DOCTYPE html>
<html>
<head>
    <title>View Data </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h3 {
            text-align: center;
            color: #333;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            margin: 10px;
        }

        .photo-img {
            max-width: 20%;
            height: auto;
            margin: 10px 0;
        }

        .barcode-img {
            max-width: 70%;
            height: auto;
            margin: 10px 0;
        }

        @media print {
            .print-single {
                display: none !important;
            }

            .print-all-button {
                display: none !important;
            }

            /* Tetapkan border pada kartu saat mencetak */
            .card {
                border: 1px solid #ccc !important;
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
        .textp {
        margin: 0 auto;
        text-align: center; /* Ini untuk mengatur teks ke tengah secara horizontal */
    }
       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35" id="user-location">
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
                <li class="nav-item">
                    <a class="nav-link" href="input.php">Input Data</a>
                </li>
                <li class="nav-item"style="background-color:white;  border-radius:10px; " >
                    <a class="nav-link" href="view.php" style="color:black; ">Lihat data</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="row">
            <?php
            include_once("inc/config.php");

            $sql = "SELECT * FROM orang";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $nik = $row['nik'];
                    $nama = $row['nama'];
                    $foto_path = $row['foto'];

                    $barcodeData = $nik;
                    $barcodeImageUrl = "https://barcode.tec-it.com/barcode.ashx?data=" . urlencode($barcodeData) . "&translate-esc=on";

                    echo "<div class='col-md-6'>";
                    echo "<div class='card' id='card_$nik'>";
                    echo "<div class='info'>";
                    echo "<img src='$foto_path' alt='Foto' class='photo-img'>";
                    echo "<div class='info-right'>";
                    echo "<p>NIK: $nik</p>";
                    echo "<h4>Nama: $nama</h4>";
                    echo "<p>Barcode:</p>";
                    echo "<img src='$barcodeImageUrl' alt='Barcode' class='barcode-img'>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div class='print-single'>";
                    echo "<button class='btn btn-success mx-auto' id='printButton_$nik' onclick='printSingle(\"card_$nik\", \"$nik\")'>Cetak</button>";
                    echo "</div>";

                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='textp'>Data tidak ditemukan.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="print-all-container text-center">
                    <button class="btn btn-success print-all-button mx-auto" onclick="printAll()">Cetak Semua</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function printSingle(elementId, nik) {
            var printButton = document.querySelector('#' + elementId + ' .print-single button');
            printButton.style.display = 'none';

            var printContents = document.getElementById(elementId).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;

            printButton.style.display = 'block';
            printButton.style.backgroundColor = 'red';
            printButton.disabled = true;
        }

        function printAll() {
            var printSingleButtons = document.querySelectorAll('.print-single button');
            for (var i = 0; i < printSingleButtons.length; i++) {
                printSingleButtons[i].style.display = 'none';
            }

            var printAllButton = document.querySelector('.print-all-button');
            printAllButton.style.display = 'none';

            window.print();

            for (var i = 0; i < printSingleButtons.length; i++) {
                printSingleButtons[i].style.display = 'block';
            }
            printAllButton.style.display = 'block';
        }
    </script>
</body>
</html>
