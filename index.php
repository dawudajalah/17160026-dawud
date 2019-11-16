<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>UTS WEBPRO 1</title>
  </head>
  <body>
    <!-- =====================================// NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><b>UTS WEBPRO 1</b></a>
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
            <div class="col-md-6 offset-md-3 mt-4">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header"><b>UTS WEBPRO 1</b></div>
                <div class="card-body">
                    <h5 class="card-title">FORM PEMBELIAN BARANG</h5>
                    
                    <form action="hasil.php" method="POST">
                        <div class="form-group row">
                            <label for="nambar" class="col-3">Nama Barang</label>
                            <div class="col">
                            <input type="text" name="nambar" class="form-control" id="nambar" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumbel" class="col-3">Jumlah Beli</label>
                            <div class="col">
                            <input type="text" name="jumbel" class="form-control" id="jumbel" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Jenis Bayar</label>
                            <div class="col">
                            <select class="form-control" name="jenbay">
                            <option value="Kredit">Kredit</option>
                            <option value="Cash">Cash</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="ck1" id="inlinecheckbox1" value="Asuransi">
                                <label class="form-check-label" for="inlinecheckbox1">Asuransi</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="ck2" id="inlinecheckbox1" value="Member">
                                <label class="form-check-label" for="inlinecheckbox1">Member</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="ck2" id="inlinecheckbox1" value="Non Member">
                                <label class="form-check-label" for="inlinecheckbox1">NonMember</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3">Diskon</label>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="diskon" id="inlineradio1" value="10%">
                                <label class="form-check-label" for="inlineradio1">10%</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="diskon" id="inlineradio1" value="20%">
                                <label class="form-check-label" for="inlineradio1">20%</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col">
                                <button type="submit" class="btn btn-outline-success">Submit</button>
                                <button type="reset" class="btn btn-outline-danger">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====================================// FORM -->
    <!-- =====================================// FOOTER -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">STMIK ANTAR BANGSA</a>
            </div>
        </nav>
    <!-- =====================================// FOOTER -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>