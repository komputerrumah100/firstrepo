<?php
$nomor = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/baseStyle.css">
</head>

<body>

    <div class="container">
        <h1 class="align-center">Home</h1>


        <form action="" class="form-group">
            <div class="form-item">
                <label class="labelInput" for="nama">Nama</label>
                <input class="textInput" type="text" name="nama" id="nama">
            </div>
            <div class="form-item">
                <label class="labelInput"  for="nrp">NRP</label>
                <input class="textInput"  type="text" name="nrp" id="nrp">
            </div>
            <div class="form-item">
                <label class="labelInput"  for="email">Email</label>
                <input class="textInput"  type="text" name="email" id="email">
            </div>
            <div class="form-item">
                <label class="labelInput"  for="jurusan">Jurusan</label>
                <input class="textInput"  type="text" name="jurusan" id="jurusan">
            </div>
            <div class="form-item">
                <label class="labelInput"  for="gambar">Gambar</label>
                <input class="textInput"  type="text" name="gambar" id="gambar">
            </div>
            <div class="form-item">
                <input class="btn-success btn" type="submit" name="submit" id="submit" value="Submit">
            </div>
        </form>

        <table class="table-f">
            <thead>
                <tr class="tr-th">
                    <th class="th-cell">No</th>
                    <th class="th-cell">Nama</th>
                    <th class="th-cell">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['allData'] as $row) : ?>
                    <tr>
                        <td class="td-cell"><?= $nomor++; ?></td>
                        <td class="td-cell"><?= $row['nama']; ?></td>
                        <td class="td-cell"><?= $row['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</body>

</html>