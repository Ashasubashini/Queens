<?php require_once "../app/views/components/navbar.php" ?>

<div class="mt-72 max-w-4xl mx-auto p-4">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden flex">
        <div class="w-1/2 p-6">
            <img src="<?= $item["image"] ?>" alt="product image" class="w-64 h-64 object-cover rounded-md mx-auto"> <!-- Increased size -->
        </div>
        <div class="w-1/2 p-6">
            <h2 class="text-2xl font-bold mb-2"><?= $item["name"] ?></h2>
            <h3 class="text-xl text-gray-700 mb-2"><?= $item["titles"] ?></h3>
            <p class="text-gray-600 mb-4"><?= $item["description"] ?></p>
            <p class="text-lg font-semibold mb-4">Price: $<?= $item["price"] ?></p>

            <div class="flex space-x-2">
                <form action="cartadd" method="POST" class="inline">
                    <input type="hidden" name="productid" value="<?= $item['id'] ?>">
                    <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200">
                        Add to Cart
                    </button>
                </form>
            </div>
            <?php if ($_SESSION["user"]["role"] == "admin") : ?>
                <a href="edit?id=<?= $item["id"] ?>" class="block mt-4 text-black hover:underline">Update</a>
            <?php endif; ?>
        </div>
    </div>
</div>