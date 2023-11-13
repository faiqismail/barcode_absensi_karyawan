<!DOCTYPE html>
<html>

<head>
    <title>Scan Barcode NIK</title>
    <script src="https://example.com/barcode-scanner.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }

        h1 {
            margin-top: 20px;
        }

        #barcodeContainer {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        #nikInput {
            opacity: 0;
    position: absolute;
    left: -9999px;
    
    flex: 1;
    padding: 10px;
    font-size: 18px;
    margin-right: 10px;
    max-width: 50%; /* Maksimum 50% dari lebar kontainer */
}

.refresh-button {
    background-color: #279EFF;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    max-width: 50%; /* Maksimum 50% dari lebar kontainer */
}

        .refresh-button svg {
            width: 26px;
            height: 26px;
            fill: white;
            margin-right: 5px;
        }

        #historyTable {
    margin-top: 20px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    border: 2px solid black; /* Add a thicker black border to the table */
}

#historyTable th {
    background-color: #0C356A; /* Set the background color of th elements to blue */
    color: white; /* Set the text color to white */
}

#historyTable td {
    border: 2px solid #dddddd;
    text-align: left;
    padding: 8px;
}
#historyTable th,
#historyTable td {
    border: 2px solid #dddddd; /* Increase the border width to make it thicker */
    text-align: center; /* Center align the content in each column */
    padding: 8px;
}

#historyTable img {
    display: block; /* Ensure the image is centered within the cell */
    margin: 0 auto; /* Center the image horizontally */
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
            <a class="navbar-brand" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35" id="user-location">
  <path d="M14.49,10.86a3.09,3.09,0,1,0-5,0,4.67,4.67,0,0,0-1.12,1A1,1,0,1,0,10,13.12a2.62,2.62,0,0,1,2.05-1h0a2.62,2.62,0,0,1,2.05,1,1,1,0,0,0,.78.37,1,1,0,0,0,.78-1.62A4.67,4.67,0,0,0,14.49,10.86ZM12,10.13h0A1.09,1.09,0,1,1,13.09,9,1.09,1.09,0,0,1,12,10.13Zm8.46-.5A8.5,8.5,0,0,0,7.30,3.36,8.56,8.56,0,0,0,3.54,9.63,8.46,8.46,0,0,0,6,16.46l5.3,5.31a1,1,0,0,0,1.42,0L18,16.46A8.46,8.46,0,0,0,20.46,9.63ZM16.6,15.05,12,19.65l-4.6-4.6A6.49,6.49,0,0,1,5.53,9.83,6.57,6.57,0,0,1,8.42,5a6.47,6.47,0,0,1,7.16,0,6.57,6.57,0,0,1,2.89,4.81A6.49,6.49,0,0,1,16.6,15.05Z" fill="#FFFFFF"/>
</svg>&nbsp;Jeclock</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                style="background-color:white; border: 1px solid black;">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="none" viewBox="0 0 510 511"
                        id="menu"><path fill="#000" fill-rule="evenodd"
                            d="M356 181H156V166H356V181zM283.017 256.352L156.001 256 156.043 241 283.059 241.352 283.017 256.352zM356.004 331H156.004V316H356.004V331z"
                            clip-rule="evenodd"></path></svg></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="absen.php">Absen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="input.php">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">Lihat Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>
    <h1>Scan Barcode </h1>
<p>Gunakan alat barcode !</p>
    <div id="barcodeContainer">
        <input type="text" id="nikInput" placeholder="Scan NIK" autofocus>
        
    </div>

    <script>
    function handleBarcodeScan(result) {
        var nik = result;

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "fungsi/add_absen.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                console.log(response);
                // Me-refresh halaman setelah pemindaian barcode berhasil
                window.location.reload();
            }
        };
        xhr.send("nik=" + nik);
    }

    document.getElementById("nikInput").addEventListener("change", function () {
        var nik = document.getElementById("nikInput").value;
        handleBarcodeScan(nik);
    });
</script>


    <h2>Riwayat Absen</h2>

    <?php
    include "inc/config.php";

    $query = "SELECT orang.foto, orang.nama, orang.nik, absen.tanggal, absen.jam
              FROM absen 
              INNER JOIN orang ON absen.id_orang = orang.id_orang 
              ORDER BY absen.tanggal DESC, absen.jam DESC 
              LIMIT 4";

    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table id='historyTable'>";
            echo "<tr><th>Profil</th><th>Nama</th><th>NIK</th><th>Tanggal</th><th>Jam</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='" . $row["foto"] . "' width='100' height='100'></td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["nik"] . "</td>";
                echo "<td>" . $row["tanggal"] . "</td>";
                echo "<td>" . $row["jam"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada riwayat absen.";
        }
    } else {
        echo "Query error: " . mysqli_error($conn);
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
