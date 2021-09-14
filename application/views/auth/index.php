 <!-- Page content -->

 <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
          
            <div class="card-body px-lg-5 py-lg-5 mb-lg--5">
              <form role="form" method="POST" action="<?= base_url('auth/') ?>">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="username" placeholder="Username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="text-center">
                  <div class="row mb-lg-5">
                    <div class="col-6">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                    <div class="col-6 mt-lg-2">
                      <a href="<?= base_url('auth/registration'); ?>">Daftar</a>
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