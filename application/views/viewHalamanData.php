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
                <a class="nav-link" href="<?= site_url("halamanVideo") ?>">Video</a>
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
                    </tr>
                </thead>
                <tbody id="target">
                
                </tbody>
            </table>
        </div>
    </div>
    </div>   
    
   
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Data Mahasiswa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form role="form" action="editmhs.php" method="get">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="inputID" value="">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="inputNama"  placeholder="Silahkan Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="inputJurusan" placeholder="Silahkan Masukkan Jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    
    <script type='text/javascript'>
    ambilData();

        function ambilData(){
            $.ajax({
            type:'POST',
            url: '<?php echo base_url().'index.php/halamandata/ambilData'?>',
            dataType: 'json',
            success: function(data){                  
            var baris = '';
            for(var i=0;i<data.length;i++){
                baris += '<tr>'+
                            '<td>'+parseInt(i+1)+'</td>'+
                            '<td>'+data[i].nama+'</td>'+
                            '<td>'+data[i].nim+'</td>'+
                          '<tr>';
                    }
                    $('#target').html(baris);
                }
                });
            }
                        
    </script>
     <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script> 
  </body>
</html>