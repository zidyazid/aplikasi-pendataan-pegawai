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
      <!-- Header -->
      <div class="header bg-primary pb-6">
          <div class="container-fluid">
              <div class="header-body">
                  <button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#tambahModal">
                      Tambah Data
                  </button>
                  <?php echo form_open_multipart('admincontroller/importFromExcel'); ?>
                  <input type="file" name="jabatan" id="jabatan" accept="text/csv">
                  <button type="submit" name="import">submit</button>
                  <?php echo form_close(); ?>
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
                                      <th scope="col" class="sort" data-sort="name">Nama</th>
                                      <th scope="col" class="sort" data-sort="budget">Tanggal Lahir</th>
                                      <th scope="col" class="sort" data-sort="status">Tempat Lahir</th>
                                      <th scope="col" class="sort" data-sort="status">Jenis Kelamin</th>
                                      <th scope="col" class="sort" data-sort="status">Status Pernikahan</th>
                                      <th scope="col" class="sort" data-sort="status">Jumlah Anak</th>
                                      <th scope="col" class="sort" data-sort="status">Pendidikan Terakhir</th>
                                      <th scope="col" class="sort" data-sort="status">Tindakan</th>
                                  </tr>
                              </thead>
                              <tbody class="list">
                                  <?php $i = 1; ?>
                                  <?php foreach ($getAllPegawai as $p) : ?>

                                      <tr>
                                          <td><?= $i; ?></td>
                                          <td><?= $p['nama']; ?></td>
                                          <td><?= $p['tanggal_lahir']; ?></td>
                                          <td><?= $p['tempat_lahir']; ?></td>
                                          <td><?= $p['jenis_kelamin']; ?></td>
                                          <td><?= $p['status_pernikahan']; ?></td>
                                          <td><?= $p['jumlah_anak']; ?></td>
                                          <td><?= $p['pendidikan_terakhir']; ?></td>
                                          <td>
                                              <button type="button" class="btn-sm btn btn-warning" data-toggle="modal" data-target="#ubahModal<?= $p['id'] ?>">
                                                  <i class="fas fa-pencil-alt"></i> Ubah
                                              </button>

                                              <a href="" class="btn-sm btn btn-danger"> <i class="fas fa-trash-alt"></i> Hapus</a>
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
                          <h5 class="modal-title" id="tambahModalLabel">Tambah Data Pegawai</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <form method="POST" action="<?= base_url('/Admincontroller/tambahDataPegawai') ?>">
                              <div class="form-group">
                                  <label for="nama">Nama Lengkap</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama lengkap">
                              </div>
                              <div class="form-group">
                                  <label for="nip">Nip</label>
                                  <input type="text" class="form-control" id="nip" name="nip" placeholder="masukan nip lengkap">
                              </div>
                              <div class="form-group">
                                  <label for="jabatan">Jabatan</label>
                                  <select id="jabatan" name="jabatan" class="form-control">
                                      <?php foreach ($jabatan as $l) : ?>
                                          <option value="<?= $l['id'] ?>"><?= $l['nama_jabatan'] ?></option>
                                      <?php endforeach; ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="tgl_lahir">Tanggal Lahir</label>
                                  <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="masukan tanggal lahir">
                              </div>
                              <div class="form-group">
                                  <label for="tempat_lahir">Tempat Lahir</label>
                                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir">
                              </div>
                              <div class="form-group">
                                  <label for="jenkel">Jenis Kelamin</label>
                                  <select id="jenkel" name="jenkel" class="form-control">
                                      <option value="laki-laki">LAKI-LAKI</option>
                                      <option value="perempuan">PEREMPUAN</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="agama">Agama</label>
                                  <input type="text" class="form-control" id="agama" name="agama" placeholder="masukan agama">
                              </div>
                              <div class="form-group">
                                  <label for="status_nikah">Status Pernikahan</label>
                                  <input type="text" class="form-control" id="status_nikah" name="status_nikah" placeholder="masukan status nikah">
                              </div>
                              <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="jml_anak">Jumlah Anak</label>
                                  <input type="text" class="form-control" id="jml_anak" name="jml_anak" placeholder="masukan jumlah anak">
                              </div>
                              <div class="form-group">
                                  <label for="no_hp">Nomor Telpon</label>
                                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="masukan nomor hp">
                              </div>
                              <div class="form-group">
                                  <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                  <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                      <option value="smp">SMP</option>
                                      <option value="sma">SMA</option>
                                      <option value="sarjana">Strata 1</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="gaji_pokok">Gaji Pokok</label>
                                  <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="masukan gaji pokok">
                              </div>

                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">simpan</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ubah data pegawai -->
          <?php foreach ($getAllPegawai as $p) : ?>
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
                              <form method="POST" action="<?= base_url('/Admincontroller/updateDataPegawai/' . $p['id']) ?>">
                                  <div class="form-group">
                                      <label for="nama">Nama Lengkap</label>
                                      <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama lengkap" value="<?= $p['nama'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="nip">Nip</label>
                                      <input type="text" class="form-control" id="nip" name="nip" placeholder="masukan nip lengkap" value="<?= $p['nip'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="jabatan">Jabatan</label>
                                      <select id="jabatan" name="jabatan" class="form-control">
                                          <?php foreach ($jabatan as $l) : ?>
                                              <option value="<?= $l['id'] ?>"><?= $l['nama_jabatan'] ?></option>
                                          <?php endforeach; ?>
                                      </select>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                              <label for="tgl_lahir">Tanggal Lahir</label>
                                              <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="masukan tanggal lahir" value="<?= $p['tanggal_lahir'] ?>">
                                          </div>
                                      </div>
                                      <div class="col-lg-6">

                                          <div class="form-group">
                                              <label for="tempat_lahir">Tempat Lahir</label>
                                              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir" value="<?= $p['tempat_lahir'] ?>">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="jenkel">Jenis Kelamin</label>
                                      <select id="jenkel" name="jenkel" class="form-control">
                                          <option value="laki-laki">LAKI-LAKI</option>
                                          <option value="perempuan">PEREMPUAN</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="agama">Agama</label>
                                      <input type="text" class="form-control" id="agama" name="agama" placeholder="masukan agama" value="<?= $p['agama'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="status_nikah">Status Pernikahan</label>
                                      <input type="text" class="form-control" id="status_nikah" name="status_nikah" placeholder="masukan status nikah" value="<?= $p['status_pernikahan'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="alamat">Alamat</label>
                                      <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $p['alamat'] ?></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="jml_anak">Jumlah Anak</label>
                                      <input type="text" class="form-control" id="jml_anak" name="jml_anak" placeholder="masukan jumlah anak" value="<?= $p['jumlah_anak'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="no_hp">Nomor Telpon</label>
                                      <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="masukan nomor hp" value="<?= $p['nomor_telpon'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                      <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                          <option value="smp">SMP</option>
                                          <option value="sma">SMA</option>
                                          <option value="sarjana">Strata 1</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="gaji_pokok">Gaji Pokok</label>
                                      <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="masukan gaji pokok" value="<?= $p['gaji_pokok'] ?>">
                                  </div>

                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">simpan</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div> <?php endforeach; ?>