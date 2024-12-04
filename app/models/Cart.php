<?php
require_once "../app/core/Database.php";

class Cart {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addToCart($userId, $productId) {
        $this->db->query("SELECT product_id FROM cart WHERE user_id=:userid");
        $this->db->bind(':userid', $userId);
        $this->db->execute();

        $count = $this->db->result();

        if (empty($count)) {
            $this->db->query("INSERT INTO cart (user_id, product_id) VALUES (:userid, :productid)");
            $this->db->bind(':userid', $userId);
            $this->db->bind(':productid', $productId);
            return $this->db->execute();
        }

        $this->db->query("UPDATE cart SET count=count+1 WHERE product_id=:product_id");
        $this->db->bind(':product_id', $productId);
        return $this->db->execute();
    }

    public function deleteCart($userId) {
        $this->db->query("DELETE FROM cart WHERE user_id = :userid");
        $this->db->bind(':userid', $userId);
        return $this->db->execute();
    }

    public function getCart($userId) { 
        $this->db->query("SELECT c.*, p.* FROM cart c JOIN items p ON c.product_id=p.id WHERE user_id=:userid");
        $this->db->bind(':userid', $userId);
        $this->db->execute();
        return $this->db->results();
    }
}
?>
