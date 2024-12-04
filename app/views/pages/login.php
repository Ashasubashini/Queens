

<body class="bg-gray-100">

    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-3xl font-bold text-center mb-6 text-emerald-600">Log In</h1>
            <form action="" method="POST" class="space-y-6">
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>
                
                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>
                
                <!-- Submit Button -->
                <div>
                    <button type="submit" name="login" 
                        class="w-full bg-emerald-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-emerald-700 focus:ring-2 focus:ring-emerald-500 focus:ring-opacity-50">
                        Log In
                    </button>
                </div>
            </form>

            <!-- Sign Up Link -->
            <div class="text-center mt-4">
                <a href="register" class="text-sm font-medium text-emerald-600 hover:underline">
                    Don't have an account? <span class="font-bold">Sign Up</span>
                </a>
            </div>
        </div>
    </div>

</body>



