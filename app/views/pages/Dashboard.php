
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Dashboard</h1>
        <nav class="mb-6">
            <button class="tab-btn px-4 py-2 bg-blue-500 text-white rounded-md mr-2" data-tab="users">Users</button>
            <button class="tab-btn px-4 py-2 bg-blue-500 text-white rounded-md mr-2" data-tab="products">Products</button>
            <button class="tab-btn px-4 py-2 bg-blue-500 text-white rounded-md" data-tab="orders">Orders</button>
        </nav>

        
        <div class="tab-content" id="users">
            <h2 class="text-2xl font-bold mb-4">Users</h2>
            <div class="bg-white rounded-md shadow-md p-4">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">First Name</th>
                            <th class="px-4 py-2">Last Name</th>
                            <th class="px-4 py-2">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($users)) {  // Check if users data is available
                            foreach ($users as $row) {
                                echo "<tr>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["id"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["fname"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["lname"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["email"]) . "</td>"; 
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' class='px-4 py-2 text-center'>No users found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="tab-content" id="products">
            <h2 class="text-2xl font-bold mb-4">Products</h2>
            <div class="bg-white rounded-md shadow-md p-4">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Price</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($products)) {  // Check if products data is available
                            foreach ($products as $row) {
                                echo "<tr>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["id"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["name"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["titles"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["description"]) . "</td>";
                                echo "<td class='px-4 py-2'>$" . number_format($row["price"], 2) . "</td>";
                               
                                echo "</tr>";
                            } 
                        } else {
                            echo "<tr><td colspan='4' class='px-4 py-2 text-center'>No products found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-content" id="orders">
            <h2 class="text-2xl font-bold mb-4">Orders</h2>
            <div class="bg-white rounded-md shadow-md p-4">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">User ID</th>
                            <th class="px-4 py-2">Product ID</th>
                            <th class="px-4 py-2">Date</th>
                            <th class="px-4 py-2">Count</th>
                            <th class="px-4 py-2">Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($orders)) {  // Check if orders data is available
                            foreach ($orders as $row) {
                                echo "<tr>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["id"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["userid"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["productid"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["date"]) . "</td>";
                                echo "<td class='px-4 py-2'>" . htmlspecialchars($row["count"]) . "</td>";
                                echo "<td class='px-4 py-2'>$" . number_format($row["price"], 2) . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4' class='px-4 py-2 text-center'>No orders found.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <script>
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById(tabId).classList.remove('hidden');
            });
        });
    </script>

    <div class="mt-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Add New Product</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-8 max-w-lg mx-auto">
            <fieldset class="mb-4">
                <label for="image-input" class="block mb-2 text-sm font-medium text-gray-700">Input Images</label>
                <input type="file" name="itemImage" id="image-input" class="border border-gray-300 rounded-md p-2 w-full">
            </fieldset>
            <fieldset class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="itemName" id="name" class="border border-gray-300 rounded-md p-2 w-full" required>
            </fieldset>
            <fieldset class="mb-4">
                <label for="titles" class="block mb-2 text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="itemTitle" id="titles" class="border border-gray-300 rounded-md p-2 w-full" required>
            </fieldset>
            <fieldset class="mb-4">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-700">Description</label>
                <textarea name="itemDescription" id="description" class="border border-gray-300 rounded-md p-2 w-full" required></textarea>
            </fieldset>
            <fieldset class="mb-4">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-700">Price</label>
                <input type="number" name="itemPrice" id="price" class="border border-gray-300 rounded-md p-2 w-full" required>
            </fieldset>
            <button type="submit" name="add" value="add" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 rounded-md transition duration-200">Add Product</button>
        </form>
    </div>

   
</body>
 