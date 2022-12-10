<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1 class="">DICARI ORANG HILANGGGG!!!!!!</h1>
  <p>Hidup Ada Mati</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Foto Saya</h3>
      <p><img src="{{ asset('') }}" class="img-thumbnail" alt=""></p>
      <p><a href="{{ url('/hal2') }}" class="btn btn-outline-secondary">Ke Cerita</a></p>
    </div>
    <div class="col-sm-4">
      <h3>Biodata</h3>
      <p>Nama: Duta Pasha Febrian</p>
      <p>Kelas: XI PPLG A</p>
      <p>Absen: 8</p>
      <p>Alamat: Jln Ya'm Sabran Tanjung Hulu Pontianak</p>
      <p></p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
