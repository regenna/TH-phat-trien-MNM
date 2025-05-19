<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/THMNM/project2/assets/favicon.png">
    <style>
        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff !important;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: #0056b3 !important;
        }
        .nav-link {
            color: #495057 !important;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
        }
        .nav-link:hover {
            color: #007bff !important;
        }
        .nav-item.active .nav-link {
            color: #007bff !important;
            font-weight: bold;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        @media (max-width: 991.98px) {
            .navbar-nav {
                padding: 1rem 0;
            }
            .nav-item {
                margin: 0.25rem 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/THMNM/project2/">Quản lý sản phẩm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/THMNM/project2/Product/">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/THMNM/project2/Product/add">Thêm sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/THMNM/project2/Category/">Quản lý danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/THMNM/project2/Category/add">Thêm danh mục</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">