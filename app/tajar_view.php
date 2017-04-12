<?php
include '../config/DbConnect.php';
$aktif = $db->frs_tajar->where("is_active", "1")->fetch();
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="../bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="../bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
    <title>Tugas Topik Khusus | Tahun Ajar</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FRS Online</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../app/index.php">Home</a></li>
            <li><a href="../app/frs_view.php">FRS</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../app/index.php">Master Mahasiswa</a></li>
                <li><a href="../app/dosen_view.php">Master Dosen</a></li>
                <li><a href="../app/matkul_view.php">Master Mata Kuliah</a></li>
                <li><a href="../app/tajar_view.php">Master Tahun Ajar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="page-header">
        <h1 id="tajarTitle">Tahun Ajar : <?php echo $aktif["nama_tajar"]; ?></h1>
      </div>

      <div class="col-md-4" style="margin-bottom:20px">
        <button type="button" class="btn btn-success pull-left" data-toggle="modal" data-target="#add-form-tajar-modal">Tambah</button>
      </div>
      <div class="col-md-12 select_tajar"></div>

      <!-- Add Form Tajar Modal -->
      <div class="modal fade" id="add-form-tajar-modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Mata Kuliah</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="periode_tajar">Periode :</label>
                <select class="form-control" name="periode_tajar" id="periode_tajar">
                  <option>Gasal</option>
                  <option>Genap</option>
                </select>
              </div>
              <div class="form-group">
                <label for="tahun_tajar">Tahun :</label>
                <input type="text" class="form-control" name="tahun_tajar" id="tahun_tajar" />
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-success" onclick="addRecord()">Tambah</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script src="../js/script-set-tajar.js"></script>
  </body>
</html>
