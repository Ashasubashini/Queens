<?php
require_once "../app/core/Database.php";
require_once "../app/models/Cart.php";

class Order
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function orders()
    {
        if ($_SESSION["user"]['role'] == "user") {
            $this->db->query("SELECT * FROM orders WHERE user_id=:user_id");
            $this->db->bind(':user_id', $_SESSION["user"]['id']);
        } else {
            $this->db->query("SELECT * FROM orders");
        }
        $this->db->execute();
        return $this->db->results();
    }

    public function buyNow()
    {
        try {
            $this->db->beginTransaction();
            $this->db->query("
    INSERT INTO orders (userid, productid, count, price)
    SELECT cart.user_id, cart.product_id, cart.count, SUM(cart.count*items.price)
    FROM cart JOIN items on cart.product_id=items.id WHERE cart.user_id=:user_id GROUP BY items.id");
            $this->db->bind(":user_id", $_SESSION["user"]["id"]);
            $this->db->execute();
    
            $cart = new Cart();
            $cart->deleteCart($_SESSION["user"]["id"]);
            $this->db->commitTransaction();
            header("Location: orders");
        }
        catch (Exception $e) {
            $this->db->rollback();
            echo $e->getMessage();
        }

    }
}
