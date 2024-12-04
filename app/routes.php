<?php 

return $routes = [
    //'' => ['controller' => 'ProductController', 'method' => 'index']
    '' => ["controller" => "ProductController", "method" => 'index'],

    'add-new' => ["controller" => "ProductController", "method" => 'manageItem'],
    'edit' => ["controller" => "ProductController", "method" => 'editItem'],
    'delete' => ["controller" => "ProductController", "method" => 'delete'],
    'product' => ["controller" => "ProductController", "method" => 'showProduct'],

    'about-us' => ["controller" => "PagesController", "method" => 'aboutUs'],
    'history' => ["controller" => "PagesController", "method" => 'history'],
    'watchMaking' => ["controller" => "PagesController", "method" => 'watchMaking'],
    'branches' => ["controller" => "PagesController", "method" => 'branches'],
    'services' => ["controller" => "PagesController", "method" => 'services'],
    'login' => ["controller" => "Auth", "method" => 'login'],
    'register' => ["controller" => "Auth", "method" => 'register'],
    'logout' => ["controller" => "Auth", "method" => 'logout'],

    'dashboard' => ["controller" => "DashboardController", "method" => 'index'],
    'dashboard/home' => ['controller' => 'DashboardController', 'method' => 'index'],
    'dashboard/orders' => ['controller' => 'OrderController', 'method' => 'orders'],

    'cart' => ["controller" => "CartController", "method" => 'viewCart'],
    'cartadd' => ["controller" => "CartController", "method" => 'addItem'],
    'cartremove' => ["controller" => "CartController", "method" => 'removeItem'],
    'cartview' => ["controller" => "CartController", "method" => 'viewCart'],
    'buynow' => ["controller" => "OrderController", "method" => 'buyNow'],

    


]
?>