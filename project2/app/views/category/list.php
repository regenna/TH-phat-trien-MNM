<?php include_once "app/views/shares/header.php"; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-primary text-white rounded-top d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Danh sách danh mục</h3>
                    <a href="/THMNM/project2/Category/add" class="btn btn-light btn-lg">Thêm danh mục</a>
                </div>
                <div class="card-body p-4">
                    <?php if (empty($categories)): ?>
                        <div class="alert alert-info text-center" role="alert">
                            Chưa có danh mục nào được thêm.
                        </div>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $category): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($category->id, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td>
                                            <a href="/THMNM/project2/Category/edit/<?php echo $category->id; ?>" class="btn btn-sm btn-warning me-2">Sửa</a>
                                            <a href="/THMNM/project2/Category/delete/<?php echo $category->id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc muốn xóa danh mục này?')">Xóa</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    .btn-light {
        background-color: #fff;
        border-color: #fff;
        transition: background-color 0.3s ease;
    }
    .btn-light:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }
    .btn-warning, .btn-danger {
        transition: background-color 0.3s ease;
    }
    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .table-responsive {
        border-radius: 0.375rem;
        overflow-x: auto;
    }
</style>

<?php include_once "app/views/shares/footer.php"; ?>