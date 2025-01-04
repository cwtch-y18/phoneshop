<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách User</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>name</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($data)) {
                    foreach ($data as $value) {
                        ?>
                        <tr>
                            <td><?= $value['name'] ?></td>
                            <td><?= !empty($value['phone']) ? $value['phone'] : 'Chưa cập nhật' ?></td>
                            <td><?= !empty($value['email']) ? $value['email'] : 'Chưa cập nhật' ?></td>
                            <td>
                                <a href="/admin/user/edit?id=<?= $value['id']?>" title="Sửa" class="btn btn-warning btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="javascript:void(0)" data-id="<?= $value['id'] ?>" title="Xóa"
                                   class="delete btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                }else{
                ?>
                    <tr>
                        <td colspan="5"><p class="text-center">Không có dữ liệu...</p></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

