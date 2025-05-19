<?php
// Định nghĩa đường dẫn gốc
define('ROOT_PATH', __DIR__);

// Xử lý route
$request = $_SERVER['REQUEST_URI'];
$basePath = '/THMNM/project2';
$path = preg_replace('#^' . preg_quote($basePath, '#') . '#', '', $request);
$parts = explode('/', trim($path, '/'));

// Default controller và action
$controller = 'Product';
$action = 'index';
$params = [];

// Nếu URL có chứa thông tin controller và action
if (!empty($parts[0])) {
    $controller = $parts[0];

    if (isset($parts[1]) && !empty($parts[1])) {
        $action = $parts[1];
    }
    
    // Lấy các tham số còn lại
    $params = array_slice($parts, 2);
}

// Tạo tên controller
$controllerName = $controller . 'Controller';
$controllerFile = "app/controllers/{$controllerName}.php";

// Kiểm tra xem controller có tồn tại không
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    
    $controllerInstance = new $controllerName();
    
    // Kiểm tra xem action có tồn tại không
    if (method_exists($controllerInstance, $action)) {
        call_user_func_array([$controllerInstance, $action], $params);
    } else {
        // Action không tồn tại
        echo "Action not found";
    }
} else {
    // Controller không tồn tại
    echo "Controller not found";
}
?>
