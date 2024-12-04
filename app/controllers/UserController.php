<?php 
require_once "../app/core/Controller.php";

class UserController extends Controller {
    public function getAllUsers($filter = "all", $sort = "default")
    {
        if (!isset($_SESSION["user"]) && $_SESSION["user"]["role"] !== "admin") {
            header("Location: login");
            return;
        }
        $userModel = $this->loadModel("User");
        $users = $userModel->getAllUsers();
        $this->renderView("pages/Dashboard", ["tab" => "users", "filter" => $filter, "sort" => $sort, "users" => $users]);
    }
}
?>