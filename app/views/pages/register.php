

<body class="bg-gray-100">
 
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-3xl font-bold text-center mb-6 text-emerald-600">Sign Up</h1>
            <form action="" method="POST" class="space-y-6">
                <!-- First Name -->
                <div>
                    <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" name="fname" id="fname" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>

                <!-- Last Name -->
                <div>
                    <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" name="lname" id="lname" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="confirmpassword" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" name="signup" 
                        class="w-full bg-emerald-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-emerald-700 focus:ring-2 focus:ring-emerald-500 focus:ring-opacity-50">
                        Sign Up
                    </button>
                </div>
            </form>

            <!-- Log In Link -->
            <div class="text-center mt-4">
                <a href="login" class="text-sm font-medium text-emerald-600 hover:underline">
                    Have an account? <span class="font-bold">Log In</span>
                </a>
            </div>
        </div>
    </div>

</body>

