<?php include_once "app/views/shares/header.php"; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-primary text-white rounded-top">
                    <h3 class="mb-0">Chi tiết danh mục</h3>
                </div>
                <div class="card-body p-4">
                    <h4 class="mb-3 fw-bold"><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></h4>
                    <p class="text-muted"><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8') ?: 'Chưa có mô tả.'; ?></p>
                    
                    <div class="d-flex gap-2 mt-4">
                        <a href="/THMNM/project2/Category" class="btn btn-outline-secondary btn-lg">Quay lại danh sách</a>
                        <a href="/THMNM/project2/Category/edit/<?php echo $category->id; ?>" class="btn btn-warning btn-lg">Sửa</a>
                        <a href="/THMNM/project2/Category/delete/<?php echo $category->id; ?>" class="btn btn-danger btn-lg" onclick="return confirm('Bạn có chắc muốn xóa danh mục này?')">Xóa</a>
                    </div>
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
    .btn-warning, .btn-danger, .btn-outline-secondary {
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }
    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }
    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
    .btn-outline-secondary:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }
    .text-muted {
        font-size: 1.1rem;
        line-height: 1.5;
    }
</style>

<?php include_once "app/views/shares/footer.php"; ?>