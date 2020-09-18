<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" href="<?= site_url("halamanutama") ?>">Form <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?= site_url("halamanedit") ?>">Table</a>
                <a class="nav-link" href="<?= site_url("halamandata") ?>">Data</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class= "container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>NIM</th>
                        <th scope='col'>Aksi</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                    <tr><?php $no = 1; foreach($data_mahasiswa as $dm) : ?>
                        <th scope="row"><?= $no; $no++; ?></th>
                        <td><?= $dm['nama'] ?></td>
                        <td><?= $dm['nim'] ?></td>
                        <td>
                            <a href="<?= site_url('edit/'.$dm['id']) ?>" class="badge badge-success">Edit</a>
                            <a href="<?= site_url('halamanedit/delete/'.$dm['id']) ?>" class="badge badge-danger">Delete</a>
                        </td>
                    </tr><?php endforeach; ?>    
                </tbody>
            </table>
        </div>
    </div>
    </div>
   
    
     <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script> 
  </body>
</html>