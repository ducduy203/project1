<?php include_once "../resources/views/Back-end/partials/header.php" ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Danh sách người dùng</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Danh sách người dùng</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <?php if(empty($users)) { ?>
                <div>
                  <h5 style="display: flex;justify-content: center;align-items:center">Không có dữ liệu</h5>
                </div>
                <?php }else { ?>
                <h5 class="card-title">Danh sách người dùng</h5>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach($users as $key => $value): ?>
                    <tr>
                      <th scope="row"><?= $key + 1 ?></th>
                      <td><?= $value->username ?></td>
                      <td><?= $value->email ?></td>
                      <td><?= $value->role ?></td>
                      <td><?= $value->status ?></td>
                      <td style="text-align: center;">
                          <a href="./update-users?id=<?= $value->id ?>" class="btn btn-primary rounded-pill">Update</a>
                          <a 
                            href="./delete-users?id=<?= $value->id ?>" 
                            class="btn btn-warning rounded-pill"
                            onclick="return confirm('Bạn có chắc muốn xóa ?')"
                            >
                            Delete  
                          </a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              <?php } ?>
              <!-- Table with stripped rows -->

            </div>
          </div>
        </div>
      </div>
    </section>

</main>
<?php include_once "../resources/views/Back-end/partials/footer.php" ?>
