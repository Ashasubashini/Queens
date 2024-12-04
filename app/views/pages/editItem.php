
<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-96" style="background-color: #0B6E4F;">
    
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Products</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset class="mb-4">
                <label for="image-input" class="block mb-2 text-sm font-medium text-gray-700">Input images</label>
                <input type="file" name="itemImage" id="image-input" class="border border-gray-300 rounded-md p-2 w-full" value="<?=$item["image"] ?? '' ?>">
            </fieldset>
            <fieldset class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="itemName" id="name" class="border border-gray-300 rounded-md p-2 w-full" value="<?=$item["name"] ?? '' ?>">
            </fieldset>
            <fieldset class="mb-4">
                <label for="titles" class="block mb-2 text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="itemTitle" id="titles" class="border border-gray-300 rounded-md p-2 w-full" value="<?=$item["titles"] ?? '' ?>">
            </fieldset>
            <fieldset class="mb-4">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Description</label>
                <input type="text" name="itemDescription" id="description" class="border border-gray-300 rounded-md p-2 w-full" value="<?=$item["description"] ?? '' ?>">
            </fieldset>
            <fieldset class="mb-4">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="itemPrice" id="price" class="border border-gray-300 rounded-md p-2 w-full" value="<?=$item["price"] ?? '' ?>">
            </fieldset>
            <button type="submit" class="w-full bg-black hover:bg-gray-800 text-white font-bold py-2 rounded-md transition duration-200">Save</button>
            <a href="delete?id=<?=$item['id']?>" class="block text-center mt-4 text-blue-500 hover:underline">Delete</a>
        </form>
    </div>
</div>

