<?php 
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";

class DashboardController extends Controller{

    private $user;

    public function __constructor(){
        
        if (isset($_SESSION["user"])) {
            header("Location: login");
            return;
        }
    }

    public function index() {

        if (!isset($_SESSION["user"])) {
            header("Location: login");
            return;
        }
        
        if ($_SESSION["user"]["role"] == "admin") {

            $userModel = $this->loadModel('User');
            $users = $userModel->getAllUsers();

            $productModel = $this->loadModel('Product');
            $products = $productModel->getAllItems();

            $orderModel = $this->loadModel('Order');
            $orders = $orderModel->orders();

            $this->renderView("pages/Dashboard", ["users" => $users, "products" => $products, "orders" => $orders]);
        } else {
            $this->renderView("pages/userDashboard", ["tab" => "home"]);
        }

    }
}
?>