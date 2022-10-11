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
    <form action="./update/update_data.php" method="post" class="form-update">
    </form>
    <div class="container-table">
        <table border="1" class="table">
            <thead class="table-header">
                <tr>
                    <th align="center">No</th>
                    <th align="center">Nama</th>
                    <th align="center">Kelas</th>
                    <th align="center">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";
                $i=0;
                $query = mysqli_query($koneksi, "SELECT * FROM siswi");
                while($data = mysqli_fetch_array($query)) {?>
                <?php $i++ ?>
                <tr>
                    <td align="center"><?php echo $i ?></td>
                    <td align="center"><?= $data["nama_lengkap"]?></td>
                    <td align="center"><?= $data["kelas"]?></td>
                    <td align="center"><?= $data["jurusan"]?></td>
                </tr>
            </tbody>
                <?php }
                ?>
        </table>
    </div>

</body>

</html>