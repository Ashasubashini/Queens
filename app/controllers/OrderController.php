<?php
require_once "../app/core/Controller.php";
require_once "../app/models/Order.php";

class OrderController extends Controller{

    private $orderModel;

    public function orders(){

        if (!isset($_SESSION["order"])) {
            header("Location: login");
            return;
        }

        $this->orderModel = $this->loadModel("Order");

        if ($_SESSION["user"]["user_role"] == "admin") {
            $this->renderView("pages/Dashboard", ["tab" => "orders", "orders" => $this->orderModel->orders()]);
        } else {
            $this->renderView("pages/userDashboard", ["tab" => "orders", "orders" => $this->orderModel->orders()]);
        }

    }

    public function buyNow() {
        $this->orderModel = $this->loadModel("Order");
        $this->orderModel->buyNow();
    }
}

?>