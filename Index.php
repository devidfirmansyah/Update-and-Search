<?php
    require 'Functions.php';
    $mahasiswa=query("SELECT * FROM mahasiswa");

    //tombol cari ditekan
    //cari pada line 7 adalah name dari buton
    if(isset($_POST["cari"]))
    {
        //cari line 10 adalah function cari dan keyboard adalah name dari inputan text
        $mahasiswa=cari($_POST["keyword"]);
    }
?>

<html lang="en">
    <head>
        <meta charsey="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1><center>Daftar Mahasiswa</h1>
        <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
            <button type="submit" name=cari> cari </button>
        </form>
        <br>
        <div class="container">
        <a href="tambah_data.php"> Tambah Data Mahasiswa</a>
        <table border="1" cellpadding="10" cellspacing="0">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        <?php foreach($mahasiswa as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Nim"]; ?></td>
            <td><?= $row["Email"]; ?></td>
            <td><?= $row["Jurusan"]; ?></td>
            <td><img src="Gambar/<?php echo $row["Gambar"]; ?>" alt="" scrset="" width="100" height="100"></td>
            <td>
                <a href="Edit.php?ID=<?php echo $row["ID"];?>">Edit</a>
                <a href="Hapus.php?ID=<?php echo $row["ID"]; ?>"onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>
        </table>        
    </body>
</html>