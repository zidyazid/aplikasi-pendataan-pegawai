 <!-- Page content -->
 <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
          
            <div class="card-body px-lg-5 py-lg-5 mb-lg--5">
              <form role="form" method="POST" action="<?= base_url('auth/registration') ?>">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                    </div>
                    <input class="form-control" name="username" placeholder="Nama Akun" type="text">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="fullname" placeholder="Nama Lengkap" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Kata Sandi" type="password">
                  </div>
                </div>
                <div class="text-center">
                  <div class="row mb-lg-5">
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                    <div class="col-8 mt-2 text-sm">
                      Sudah punya akun? <a href="<?= base_url('auth/') ?>">Masuk</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>