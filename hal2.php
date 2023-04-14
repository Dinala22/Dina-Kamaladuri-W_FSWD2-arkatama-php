<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <title>Homepage | Dina Mala</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body style="background-image: url(image/bage.jpg);">
    <?php
    // Deklarasi variabel dengan informasi biodata
    $nama = "Dina Kamaladuri Wardani";
    $ttl = "Bantul, 22 Desember 2001";
    $jenis_kelamin = "Perempuan";
    $alamat = "Jln srikaloka no 544 yk";
    $riwayat_pendidikan = "SD MUH Wirobrajan 3 Yogyakarta, SMP Negeri 2 Godean,     MAN 2 Yogyakarta, Universitas Negeri Semarang";
    $hobby = "mendengarkan musik";
  ?>
    <div class="bg">
        <br>
        <img src="image/dina.jpg" ; style="border-color:gold ;">
        <hr style="border-color: gold;">
        <p style="color:gold; font-size: 25px;"><?php echo $nama ?></p>
        
        <div class="main">
    <table>
        <tr>
            <td>TTL :</td>
            <td><?php echo $ttl ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td><?php echo $jenis_kelamin ?></td>
        </tr>
        <tr>
            <td>Alamat :</td>
            <td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Riwayat Pendidikan :</td>
            <td><?php echo $riwayat_pendidikan ?></td>
        </tr>
        <tr>
            <td>Hobby :</td>
            <td><?php echo $hobby ?></td>
        </tr>
    </table>
</div>


        </p>
    </div>
</body>

</html>