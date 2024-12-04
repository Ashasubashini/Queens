<?php foreach ($users as $user): ?>
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">User Dashboard</h2>
            <p class="text-lg mb-4"><strong>First Name:</strong> <?= htmlspecialchars($user["fname"]) ?></p>
            <p class="text-lg mb-4"><strong>Last Name:</strong> <?= htmlspecialchars($user["lname"]) ?></p>      
            <p class="text-lg mb-4"><strong>Email:</strong> <?= htmlspecialchars($user["email"]) ?></p>      
            <p class="text-lg mb-4"><strong>Password:</strong> <?= htmlspecialchars($user["password"]) ?></p>      
        </div>
    </div>
<?php endforeach; ?>
