<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <ul class="menu">
        <li><a href="index.php">Create</a></li>
        <li><a href="read.php">Read</a></li>
        <li><a href="update.php">Update</a></li>
        <li><a href="delete.php">Delete</a></li>
    </ul>
    <form action="./create/create_data.php" method="post" class="form">
        <div class="title">Welcome!</div>
        <div class="subtitle">Isikan Data Anda</div>
        <div class="input-container mt-30">
            <input id="nama_lengkap" class="input" type="text" name="nama_lengkap" placeholder=" " />
            <div class="cut">
            </div>
            <label for="nama_lengkap" class="placeholder">Nama Lengkap</label>
        </div>
        <div class="input-container mt-30">
            <input id="kelas" class="input" type="text" name="kelas" placeholder=" " />
            <div class="cut"></div>
            <label for="kelas" class="placeholder">Kelas</label>
        </div>
        <div class="input-container mt-30">
            <input id="jurusan" class="input" type="text" name="jurusan" placeholder=" " />
            <div class="cut"></div>
            <label for="jurusan" class="placeholder">Jurusan</label>
        </div>
        <button class="submit" type="submit">Submit</button>
    </form>
</body>

</html>