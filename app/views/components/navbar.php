<div class="relative">
    <nav class="bg-emerald-900 mb-0 pb-0 fixed w-full top-0 left-0 z-40">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex-1 flex items-center">
                <div>
                    <button id="menu-toggle" class="text-black focus:outline-none z-50 relative">
                        <img id="menu_icon" src="images/menus.png" alt="menu" style="height: 25px; width:25px">
                        <img id="close_icon" src="images/close.png" alt="close" style="height: 25px; width: 25px"
                            class="hidden">
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center h-20 p-2">
                <img src="images/logo2.png" alt="logo" class="h-full object-cover">
            </div>
            <div class="flex-1 flex justify-end">
                <a href="/queens/public/dashboard" class="text-gray-300 hover:text-white ml-4 text-sm">Admin</a>
                <?php if (!isset($_SESSION["user"])) : ?>
                    <a href="/queens/public/login" class="text-gray-300 hover:text-white ml-4 text-sm">Sign In </a>
                <?php else : ?>
                    <a href="/queens/public/logout" class="text-gray-300 hover:text-white ml-4 text-sm">Log out</a>
                <?php endif; ?>
                <a href="/queens/public/userdashboard" class="ml-4">
                    <img src="images/profile-user.png" alt="Profile" class="h-6 w-6 rounded-full hover:opacity-75">
                </a>

            </div>
        </div>
        <div id="menu-items" class="absolute bg-[linear-gradient(45deg,black,transparent)] backdrop-blur-[15px] hidden z-40 w-full h-[calc(100vh-80px)]">
            <div class="container mx-auto px-12 py-2 h-full flex flex-col justify-center">
                <a href="<?= BASE_URL ?>" class="menu-link">Home</a>
                <a href="<?= BASE_URL ?>about-us" class="menu-link">About us</a>
                <a href="<?= BASE_URL ?>watchMaking" class="menu-link">Watch Making</a>
                <a href="<?= BASE_URL ?>branches" class="menu-link">Branches</a>
                <a href="<?= BASE_URL ?>services" class="menu-link">Service & Care</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-0 p-0 absolute"></div>
</div>