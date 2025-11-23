<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Siswa</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="nisn">NISN</label>
        <input type="number" id="nisn" name="nisn">
        <br>
        <br>
        <label for="kelas">Kelas</label>
        <select name="kelas" id="kelas">
            <option value="">Pilih Kelas</option>
            <option value="Kelas I">Kelas I</option>
            <option value="Kelas I">Kelas II</option>
            <option value="Kelas I">Kelas III</option>
            <option value="Kelas I">Kelas IV</option>
            <option value="Kelas I">Kelas V</option>
            <option value="Kelas I">Kelas VI</option>
        </select>
        <br>
        <br>
        <button type="submit" name="simpan">
            Simpan
        </button>
        <br>
        <a href="index.php">Kembali</a>
    </form>

</body>

</html>