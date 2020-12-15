<?php
$result = show_all_user();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-success alert-bold">
            <h6 class="font-weight-bold alert-text"><?= $_SESSION['message'] ?></h6>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="POST" class="col-12">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="checkall" id="checkall">
                                </th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>avatar</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>

                                </th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($result as $r) : ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="id[]" id="" value="<?= $r['id_product'] ?>">
                                    </td>
                                    <td><?= $r['id'] ?></td>
                                    <td><?= $r['fullname'] ?></td>
                                    <td><?= $r['address'] ?></td>
                                    <td><?= $r['email'] ?></td>
                                    <td><?= $r['phone'] ?></td>
                                    <td>
                                        <a href="<?= ROOT ?>admin/?page=product&action=edit&id=<?= $r['id_product'] ?>" class="btn btn-success"><i class="far fa-edit"></i></a>
                                        <a href="<?= ROOT ?>admin/?page=product&action=del&id=<?= $r['id_product'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" id="btndel-category" name="btn-del">Xóa mục đánh dấu</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->