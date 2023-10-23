<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>
<div class="container mt-5">
    
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
        <p class="card-text"><?= $data['mhs']['email']; ?></p>
        <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
        <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
      </div>
    </div>

</div>
</body>
</html>