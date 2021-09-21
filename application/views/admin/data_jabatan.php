  <!-- Main content -->
  <div class="main-content" id="panel">
      <!-- Topnav -->
      <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Search form -->

                  <!-- Navbar links -->
                  <ul class="navbar-nav align-items-center  ml-md-auto ">
                      <li class="nav-item d-xl-none">
                          <!-- Sidenav toggler -->
                          <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                              <div class="sidenav-toggler-inner">
                                  <i class="sidenav-toggler-line"></i>
                                  <i class="sidenav-toggler-line"></i>
                                  <i class="sidenav-toggler-line"></i>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                      <li class="nav-item dropdown">
                          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <div class="media align-items-center">
                                  <span class="avatar avatar-sm rounded-circle">
                                      <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                  </span>
                                  <div class="media-body  ml-2  d-none d-lg-block">
                                      <span class="mb-0 text-sm  font-weight-bold"><?= $user['name'] ?></span>
                                  </div>
                              </div>
                          </a>
                          <div class="dropdown-menu  dropdown-menu-right ">
                              <div class="dropdown-header noti-title">
                                  <h6 class="text-overflow m-0">Welcome!</h6>
                              </div>

                              <div class="dropdown-divider"></div>
                              <a href="#!" class="dropdown-item">
                                  <i class="ni ni-user-run"></i>
                                  <span>Logout</span>
                              </a>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Header -->
      <div class="header bg-primary pb-6 mb-3">
          <div class="container-fluid">
              <div class="header-body">
                  <div class="row">
                      <div class="col-lg-4">
                          <button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#tambahModal">
                              Tambah Data
                          </button>
                      </div>
                      <div class="col-lg-8 mt-3">
                          <?php echo form_open_multipart('admincontroller/importFromExcel'); ?>
                          <input type="file" class="btn btn-outline-white text-dark" name="jabatan" id="jabatan" accept="text/csv">
                          <button type="submit" name="import" class="btn btn-outline-white">submit</button>
                          <?php echo form_close(); ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">

          <div class="row">
              <!-- javascript list -->
              <div class="col-xl-12">

                  <div class="card bg-default shadow">

                      <div class="card-header bg-transparent border-0">
                          <h3 class="text-white mb-0"><?= $title; ?></h3>
                          <div class="row">
                              <div class="col-lg-2">
                                  <a href="<?= base_url('Admincontroller/cetakLaporanJabatan') ?>" class="btn btn-white mt-3"><i class="text-danger fas fa-file-pdf mr-2"></i>Export to pdf</a>
                              </div>
                              <div class="col-lg-2">
                                  <form action="<?= base_url('laporancontroller/index') ?>" method="post">
                                      <button type="submit" class="btn btn-white mt-3"><i class="text-success fas fa-file-excel mr-2"></i>Export to excel</button>
                                  </form>
                              </div>
                          </div>

                      </div>
                      <div class="table-responsive">
                          <table class="table align-items-center table-dark table-flush">
                              <thead class="thead-dark">
                                  <tr>
                                      <th scope="col" class="sort" data-sort="name">No</th>
                                      <th scope="col" class="sort" data-sort="budget">ID_Jabatan</th>
                                      <th scope="col" class="sort" data-sort="status">Nama Jabatan</th>
                                      <th scope="col" class="sort" data-sort="status">Tunjangan</th>
                                      <th scope="col" class="sort" data-sort="status">Tindakan</th>
                                  </tr>
                              </thead>
                              <tbody class="list">
                                  <?php $i = 1 ?>
                                  <?php foreach ($getAllJabatan as $p) : ?>

                                      <tr>
                                          <td><?= $i; ?></td>
                                          <td><?= $p['kode_jabatan']; ?></td>
                                          <td><?= $p['nama_jabatan']; ?></td>
                                          <td><?= $p['tunjangan']; ?></td>

                                          <td>
                                              <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ubahModal<?= $p['id'] ?>">
                                                  <i class="fas fa-pencil-alt"></i> Ubah Data
                                              </button>
                                              <a href="<?= base_url('admincontroller/hapusDataJabatan/' . $p['id']) ?>" class="btn-sm btn btn-danger">
                                                  <i class="fas fa-trash-alt"></i> Hapus</a>
                                          </td>
                                      </tr>
                                      <?php $i++; ?>
                                  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>


















              <script src="<?= base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
              <script src="<?= base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
              <script src="<?= base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
              <script src="<?= base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
              <script src="<?= base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
              <!-- Optional JS -->
              <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
              <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
              <!-- Argon JS -->
              <script src="<?= base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
          </div>
          <!--tambah modal -->
          <div class="modal fade" id="tambahModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="tambahModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <form method="POST" action="<?= base_url('/Admincontroller/tambahdatajabatan') ?>">
                              <div class="form-group">
                                  <label for="nip">ID JABATAN</label>
                                  <input type="text" class="form-control" id="nip" name="nip" placeholder="masukan kode jabatan">
                              </div>
                              <div class="form-group">
                                  <label for="nama">NAMA JABATAN</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama jabatan">
                              </div>
                              <div class="form-group">
                                  <label for="tunjangan">TUNJANGAN</label>
                                  <input type="text" class="form-control" id="tunjangan" name="tunjangan" placeholder="masukan tunjangan yang diterima">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">simpan</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ubah data jabatan -->
          <?php foreach ($getAllJabatan as $p) : ?>
              <div class="modal fade" id="ubahModal<?= $p['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="ubahModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form method="POST" action="<?= base_url('/Admincontroller/ubahdatajabatan/' . $p['id']) ?>">
                                  <div class="form-group">
                                      <label for="id">ID</label>
                                      <input type="text" class="form-control" id="id" name="id" placeholder="masukan kode jabatan" value="<?= $p['id'] ?>" readonly>
                                  </div>
                                  <div class="form-group">
                                      <label for="kode">ID JABATAN</label>
                                      <input type="text" class="form-control" id="kode" name="kode" placeholder="masukan kode jabatan" value="<?= $p['kode_jabatan'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="nama">NAMA JABATAN</label>
                                      <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama jabatan" value="<?= $p['nama_jabatan'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="tunjangan">TUNJANGAN</label>
                                      <input type="text" class="form-control" id="tunjangan" name="tunjangan" placeholder="masukan tunjangan yang diterima" value="<?= $p['tunjangan'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">simpan</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div> <?php endforeach; ?>