<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman About</title>
</head>
<body>
<div class="container">
    
    <h1 class="mt-4">About Me</h1>
    <img src="<?= BASEURL; ?>/img/Hafizh.png" alt="Hafizh Faiz" width="200" class="rounded-circle shadow">
    <p>Halo, nama saya <?= $data['nama']; ?>, umur saya <?= $data['umur']; ?> tahun, saya adalah seorang <?= $data['pekerjaan']; ?>.</p>

</div>
</body>
</html>