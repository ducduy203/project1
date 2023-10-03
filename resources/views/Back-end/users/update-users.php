<?php include_once "../resources/views/Back-end/partials/header.php" ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Cập nhật người dùng</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Cập nhật người dùng</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cập nhật người dùng</h5>

              <!-- General Form Elements -->
              <form action="./update-users" method="POST" enctype="multipart/form-data">
                <input type="text" hidden value="<?= $users->id ?> " name="id">

                <div class="row mb-3">
                  <label for="username" class="col-sm-2 col-form-label">Tên người dùng</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" required value="<?= $users->username ?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" required name="email" value="<?= $users->email ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="role" class="col-sm-2 col-form-label">Role</label>
                  <div class="col-sm-10">
                    <input type="number" min="0" class="form-control" required name="role" value="<?= $users->role ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="status" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <input type="number" min="0" class="form-control" required name="status" value="<?= $users->status ?>" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Cập nhật người dùng</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  <?php include_once "../resources/views/Back-end/partials/footer.php" ?>