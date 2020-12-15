<?php
$result = list_all_product();
?>

<!-- Begin Page Content -->
<div class="container-fluid" style="min-height:100vh; position: relative;">
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-success alert-bold">
            <h6 class="font-weight-bold alert-text"><?= $_SESSION['message'] ?></h6>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" style="position: absolute; top: 0; bottom: 0; right: 50px; left: 50px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thống kê doanh thu </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="text-center">Tổng số đơn thành công</h2>
                <h1 class="display-1 text-success text-center">02</h1>
                <h2 class="text-center">Tổng doanh thu tháng</h2>
                <h1 class="display-1 text-danger text-center">7.866.000 VNĐ</h1>
                <h2 class="text-center">Tổng doanh thu năm</h2>
                <h1 class="display-1 text-info text-center">130.866.000 VNĐ</h1>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->