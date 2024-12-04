<?php 
require_once "../app/core/Controller.php";

class CartController extends Controller {

    private $cartModel;

    public function __construct() {
        $this->cartModel = $this->loadModel('Cart');
    }

    public function addItem() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (!isset($_SESSION['user'])) {
                header("Location: login");
                exit;
            }

            $userId = $_SESSION['user']['id'];
            $productId = $_POST['productid'];

            if ($this->cartModel->addToCart($userId, $productId)) {
                // Redirect to the cart page after adding the item
                header("Location: cart");
            } else {
                // Handle error 
                header("Location: /product?id={$productId}&error=Failed to add to cart");
            }
            exit;
        }
    }

    public function viewCart() {
        // Ensure user ID is set
        if (!isset($_SESSION['user'])) {
            header("Location: login");
            exit;
        }

        $userId = $_SESSION['user']['id'];
        $cart = $this->cartModel->getCart($userId);
        $this->renderView('pages/cart', ['cart' => $cart]);
    }

    public function deleteCart() {
        $userId = $_SESSION['user']['id'];
        $this->cartModel->deleteCart($userId);
    }
}
?>
