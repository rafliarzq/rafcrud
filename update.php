<?php
    include "connection.php";
?>
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
    <form action="update/cari.php" method="get" class="form-update">
        <div class="mt-30">
            <input id="nama_lengkap" class="input-update" type="text" name="keyword" placeholder="Input ID" autocomplete="off">
        </div>
        <button class="submit-update mt-10" type="submit">Search</button>
    </form>

    <div class="container-table">
        <table border="1" class="table">
            <thead class="table-header">
                <tr>
                    <th align="center">ID</th>
                    <th align="center">Nama</th>
                    <th align="center">Kelas</th>
                    <th align="center">Jurusan</th>
                    <th align="center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    $query=mysqli_query($koneksi,"SELECT * FROM siswi");
                    while($data=mysqli_fetch_array($query)) {?>

                <tr>
                    <td align="center"> <?= $data['id'] ?> </td>
                    <td align="center"> <?= $data['nama_lengkap'] ?> </td>
                    <td align="center"> <?= $data['kelas'] ?> </td>
                    <td align="center"> <?= $data['jurusan'] ?> </td>
                    <td align="center"><a href="./update/form.php?id=<?php echo $data['id'] ?>">Update</a></td>
                </tr>
            </tbody>
        <?php }
        ?>
        </table>
    </div>

</body>

</html>