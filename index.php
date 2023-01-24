<?php
  include 'corona.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">ISENGCOVID</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
		
    <main role="main" class="flex-shrink-0">
      <div class="container">
        <h1 class="text-center mt-5">SEBARAN COVID19</h1>
        <h6>INDONESIA</h6>
        <h6>LAST UPDATE : <?php echo date('Y-m-d',strtotime($result->last_date)); ?></h6>
        <hr>
        <?php $all_covid = array();?>
        <?php $all_recovery = array();?>
        <?php $all_death = array();?>
        <?php foreach ($result->list_data as $kasus) { ?>
          <?php $all_covid[] = $kasus->jumlah_kasus; ?>
          <?php $all_recovery[] = $kasus->jumlah_sembuh; ?>
          <?php $all_death[] = $kasus->jumlah_meninggal; ?>
        <?php } ?>
        
        <div class="row">
          <div class="col-sm-4">
            <div class="card text-white bg-danger">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <h5 class="card-title">TOTAL POSITIF</h5>
                    <h1><?php echo array_sum($all_covid); ?></h1>
                    <p class="card-text">orang</p>
                  </div>
                  <div class="col-md-4">
                    <img src="img/emoji-04.png" alt="icon" height="100" width="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-white bg-success">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <h5 class="card-title">TOTAL SEMBUH</h5>
                    <h1><?php echo array_sum($all_recovery); ?></h1>
                    <p class="card-text">orang</p>
                  </div>
                  <div class="col-md-4">
                    <img src="img/emoji-01.png" alt="icon" height="100" width="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card text-white bg-info">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <h5 class="card-title">TOTAL MENINGGAL</h5>
                    <h1><?php echo array_sum($all_death); ?></h1>
                    <p class="card-text">orang</p>
                  </div>
                  <div class="col-md-4">
                    <img src="img/emoji-03.png" alt="icon" height="100" width="100">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- TABLE -->
      <div class="container mt-5">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Positif</th>
              <th scope="col">Sembuh</th>
              <th scope="col">Meninggal</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result->list_data as $key => $data) { ?>
              <tr>
                <th scope="row"><?php echo $key+1; ?></th>
                <td><?php echo $data->key; ?></td>
                <td><?php echo $data->jumlah_dirawat; ?> Orang</td>
                <td><?php echo $data->jumlah_sembuh; ?> Orang</td>
                <td><?php echo $data->jumlah_meninggal; ?> Orang</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>