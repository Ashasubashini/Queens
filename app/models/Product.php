<?php
require_once "../app/core/Database.php";

class Product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getAllItems()
    {
        $this->db->query("SELECT * FROM items");
        if (!$this->db->execute()) {
            echo "Error executing query: " . $this->db->error();
            return [];
        }
        return $this->db->results();
    }
    

    public function manageItem($name, $titles, $description, $price, $file)
    {

        try {
            $this->db->beginTransaction();

            $image = $file['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image);

            // Upload the image to the server
            if (move_uploaded_file($_FILES['itemImage']['tmp_name'], $target_file)) {
                // Save the image path in the database
                $this->db->query("INSERT INTO items (name, titles, description, price, image) VALUES (:name, :titles, :description, :price, :image)");
                $this->db->bind(':name', $name);
                $this->db->bind(':titles', $titles);
                $this->db->bind(':description', $description);
                $this->db->bind(':price', $price);
                $this->db->bind(':image', $target_file);
                $this->db->execute();

                $this->db->commitTransaction();
            } else {

                echo "Failed to upload image.";
            }
        } catch (PDOException $e) {
            $this->db->rollback();
            echo $e->getMessage();
        }
    }

    public function deleteItem($id)
    {
        $this->db->beginTransaction();

        $this->db->query("DELETE FROM items WHERE id=:id");
        $this->db->bind(':id', 10);
        $this->db->execute();

        $this->db->commitTransaction();

        header("Location: ./");
    }

    public function updateItem($id, $name, $titles, $description, $price, $file)
    {

        if (!empty($file)) {
            $image = $file['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image);
        }

        if (isset($file['tmp_name']) && move_uploaded_file($file['tmp_name'], $target_file)) {
            // Update with image
            $this->db->query("UPDATE items SET name=:name, titles=:titles, description=:description, price=:price, image=:image WHERE id=:id");
            $this->db->bind(':image', $target_file);
        } else {
            // Update without image
            $this->db->query("UPDATE items SET name=:name, titles=:titles, description=:description, price=:price WHERE id=:id");
        }
        
        // Common bindings
        $this->db->bind(':name', $name);
        $this->db->bind(':titles', $titles);
        $this->db->bind(':description', $description);
        $this->db->bind(':price', $price);
        $this->db->bind(':id', $id);
        echo $this->db->execute();

    }



    public function getProduct($id)
    {
        $this->db->query("SELECT * FROM items WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->result();
    }
}
?>