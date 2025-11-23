<?php
    include_once "koneksi.php";

    $query = "SELECT * FROM siswa";

    $queryStudent = mysqli_query($conn, $query);

    while ($student = mysqli_fetch_assoc($queryStudent)) {
        $students[] = $student;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
        
    <h5>
    <a href="TambahSiswa.php">+Tambah Siswa</a>
    </h5>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $siswa) {?>
                
                <tr>
                    <td>
                        <?php echo $siswa['id'];?>
                    </td>
                    <td>
                        <?= $siswa['nama'];?>
                    </td>
                    <td>
                        <?= $siswa['nisn'];?>
                    </td>
                    <td>
                        <?= $siswa['kelas'];?>
                    </td>
                    <td>
                        <a href="UbahSiswa.php?id=<?=$siswa['id'];?>" target="_blank">Edit</a>
                    </td>
                </tr>
            
                <?php } ?>
            
        </tbody>
    </table>
</body>
</html>