<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-lg bg-white p-8 rounded-xl shadow-2xl transform transition-all duration-300 hover:shadow-xl">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Sửa sản phẩm</h1>
        
        <form method="POST" action="/thmnm/project1/Product/edit/<?php echo $product->getID(); ?>" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Tên sản phẩm</label>
                <input type="text" id="name" name="name" required 
                       value="<?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?>"
                       class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Mô tả</label>
                <textarea id="description" name="description" required 
                          class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm h-36 transition duration-150"><?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Giá</label>
                <input type="number" id="price" name="price" step="0.01" required 
                       value="<?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?>"
                       class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-150">
            </div>

            <div class="flex justify-between items-center mt-8">
                <button type="submit" 
                        class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 transform hover:scale-105">
                    Lưu thay đổi
                </button>
                <a href="/thmnm/project1/Product/list" 
                   class="text-indigo-600 hover:text-indigo-800 font-medium hover:underline transition duration-150">
                    Quay lại danh sách sản phẩm
                </a>
            </div>
        </form>
    </div>
</body>
</html>