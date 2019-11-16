<?php 
    $barang = 100000;
    $diskon = 10000;
    $totalbayar = $barang-$diskon;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>TUGAS UTS DAWUD</title>
  </head>
  <body>
    <!-- =====================================// NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><b>TUGAS UTS DAWUD</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- =====================================// NAVBAR -->

    <!-- =====================================// FORM -->
    <div class="container">
        <div class="row">
            <div class="col-md-19 offset-md-1 mt-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header"><CENTER>TUGAS UTS DAWUD</CENTER></div>
                <div class="card-body">
                    <h5 class="card-title"><CENTER>NOTA PEMBELIAN BARANG</CENTER></h5>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">NAMA BARANG</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">JUMLAH BELI</th>
                            <th scope="col">JENIS BAYAR</th>
                            <th scope="col">JENIS MEMBER</th>
                            <th scope="col">DISKON</th>
                            <th scope="col">TOTAL BAYAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo $_POST['nambar'];?></td>
                                <td><?php echo $barang?></td>
                                <td><?php echo $_POST['jumbel']?></td>
                                <td><?php echo $_POST['jenbay']?></td>
                                <td><?php echo $_POST['ck']?></td>
                                <td><?php echo $_POST['diskon']?></td>
                                <td><?php echo $totalbayar?></td></td>
                            </tr>
                        </tbody>
                        </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====================================// FORM -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>