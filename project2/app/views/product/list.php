<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-primary text-white rounded-top d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Danh sách sản phẩm</h3>
                    <a href="/THMNM/project2/Product/add" class="btn btn-light btn-lg">Thêm sản phẩm mới</a>
                </div>
                <div class="card-body p-4">
                    <?php if (empty($products)): ?>
                        <div class="alert alert-info text-center" role="alert">
                            Chưa có sản phẩm nào được thêm.
                        </div>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td>
                                            <?php if ($product->image): ?>
                                                <img src="/THMNM/project2/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="Product Image" class="img-thumbnail" style="max-width: 80px;">
                                            <?php else: ?>
                                                <span class="text-muted">Không có ảnh</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="/THMNM/project2/Product/show/<?php echo $product->id; ?>" class="text-primary fw-bold">
                                                <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                                            </a>
                                        </td>
                                        <td><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo number_format(floatval(htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8')), 2); ?> VND</td>
                                        <td><?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td>
                                            <a href="/THMNM/project2/Product/edit/<?php echo $product->id; ?>" class="btn btn-sm btn-warning me-2">Sửa</a>
                                            <a href="/THMNM/project2/Product/delete/<?php echo $product->id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
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
    .img-thumbnail {
        border-radius: 0.375rem;
    }
    .text-primary {
        transition: color 0.2s ease;
    }
    .text-primary:hover {
        color: #0056b3 !important;
    }
</style>

<?php include 'app/views/shares/footer.php'; ?>