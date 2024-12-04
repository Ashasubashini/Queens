<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Cart</h1>

        <div class="tab-content" id="cart-items">
            <h2 class="text-2xl font-bold mb-4">Cart Items</h2>
            <div class="bg-white rounded-md shadow-md p-4">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Product ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Price</th>
                            <th class="px-4 py-2">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($cart)): ?>
                            <?php foreach ($cart as $item): ?>
                                <tr>
                                    <td class='px-4 py-2 text-center'><?= $item['cart_id'] ?></td>
                                    <td class='px-4 py-2 text-center'><?= $item['product_id'] ?></td>
                                    <td class='px-4 py-2 text-center'><?= $item['name'] ?></td>
                                    <td class='px-4 py-2 text-center'><?= $item['price'] ?></td>
                                    <td class='px-4 py-2 text-center'><?= $item['count'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="px-4 py-2 text-center">No items in cart.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <a href="buynow" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200">
                    Buy Now
                </a>
            </div>
        </div>
    </div>
</body>