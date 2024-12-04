<?php
require_once "../app/core/Controller.php";

class ProductController extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = $this->loadModel("Product");
    }
    public function index()
    {
        $data = $this->productModel->getAllItems();
        $this->renderView("pages/home", $data, "Products");
    }
    

    public function manageItem()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $name = $_POST["itemName"];
            $titles = $_POST["itemTitle"];
            $description = $_POST["itemDescription"];
            $price = $_POST["itemPrice"];
            $image = $_FILES["itemImage"];

            $this->productModel->manageItem($name, $titles, $description, $price, $image);
        }
        $this->renderView("pages/Dashboard");
    }
    public function editItem($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["itemName"];
            $titles = $_POST["itemTitle"];
            $description = $_POST["itemDescription"];
            $price = $_POST["itemPrice"];
            $image = $_FILES["itemImage"];

            $this->productModel->updateItem($id, $name, $titles, $description, $price, $image);
        }

        $item = $this->productModel->getProduct($id);
        $this->renderView("pages/editItem", ["item" => $item]);
    }

    public function delete($id) {
        $this->productModel->deleteItem($id);
    }

    public function showProduct($id)
    {
        $item = $this->productModel->getProduct($id);
        $this->renderView("pages/product", ["item" => $item]);
    }

}
?>