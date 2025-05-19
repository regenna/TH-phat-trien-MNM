<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-primary text-white rounded-top">
                    <h3 class="mb-0">Sửa sản phẩm</h3>
                </div>
                <div class="card-body p-4">
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                <?php foreach ($errors as $error): ?>
                                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="/THMNM/project2/Product/update" enctype="multipart/form-data" class="needs-validation" novalidate onsubmit="return validateForm();">
                        <input type="hidden" name="id" value="<?php echo $product->id; ?>">
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên sản phẩm.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label fw-bold">Mô tả:</label>
                            <textarea id="description" name="description" class="form-control" rows="5" placeholder="Nhập mô tả sản phẩm" required><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
                            <div class="invalid-feedback">
                                Vui lòng nhập mô tả sản phẩm.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="price" class="form-label fw-bold">Giá:</label>
                            <input type="number" id="price" name="price" class="form-control form-control-lg" step="0.01" min="0" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập giá sản phẩm (số dương).
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="category_id" class="form-label fw-bold">Danh mục:</label>
                            <select id="category_id" name="category_id" class="form-select form-select-lg" required>
                                <option value="" disabled>Chọn danh mục</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?php echo $category->id; ?>" <?php echo $category->id == $product->category_id ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Vui lòng chọn danh mục.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="form-label fw-bold">Hình ảnh:</label>
                            <input type="file" id="image" name="image" class="form-control" accept="image/*">
                            <input type="hidden" name="existing_image" value="<?php echo $product->image; ?>">
                            <small class="form-text text-muted">Chọn file ảnh mới (tùy chọn, định dạng: JPG, PNG, ...).</small>
                            <?php if ($product->image): ?>
                                <div class="mt-2">
                                    <p class="mb-1 fw-bold">Hình ảnh hiện tại:</p>
                                    <img src="/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" alt="Product Image" class="img-thumbnail" style="max-width: 150px;">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Lưu thay đổi</button>
                            <a href="/THMNM/project2/Product" class="btn btn-outline-secondary btn-lg">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 validation script and custom validation -->
<script>
    // Enable Bootstrap form validation
    (function () {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();

    // Custom form validation (retaining original onsubmit)
    function validateForm() {
        const form = document.querySelector('.needs-validation');
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return false;
        }
        return true;
    }
</script>

<style>
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .form-control:focus, .form-control-lg:focus, .form-select:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .btn-outline-secondary {
        transition: background-color 0.3s ease;
    }
    .btn-outline-secondary:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
    }
    .alert {
        border-radius: 0.375rem;
    }
    .form-select-lg {
        font-size: 1.125rem;
        padding: 0.5rem 1rem;
    }
    .img-thumbnail {
        border-radius: 0.375rem;
    }
</style>

<?php include 'app/views/shares/footer.php'; ?>