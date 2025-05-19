<?php include_once "app/views/shares/header.php"; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-primary text-white rounded-top">
                    <h3 class="mb-0">Thêm danh mục mới</h3>
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

                    <form method="POST" action="/THMNM/project2/Category/save" class="needs-validation" novalidate>
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold">Tên danh mục:</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên danh mục.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label fw-bold">Mô tả:</label>
                            <textarea id="description" name="description" class="form-control" rows="5" placeholder="Nhập mô tả danh mục (tùy chọn)"></textarea>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Thêm danh mục</button>
                            <a href="/THMNM/project2/Category" class="btn btn-outline-secondary btn-lg">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap 5 validation script -->
<script>
    // Enable Bootstrap form validation
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<style>
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .form-control:focus, .form-control-lg:focus {
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
    .alert {
        border-radius: 0.375rem;
    }
</style>

<?php include_once "app/views/shares/footer.php"; ?>