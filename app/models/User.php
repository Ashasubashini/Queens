<?php 
require_once "../app/core/Database.php";

class User{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }



    public function login($email, $password) {
         try {
                // Fetch user details by email
            $this->db->query("SELECT * FROM users WHERE email = :email");
            $this->db->bind(':email', $email);
            $this->db->execute();
    
                // Check if user exists
            $user = $this->db->result();
            if ($user == null) {
                    // User does not exist
                return ["error" => "invalid credentials"];
            }
    
                // Verify password
            $hashedPassword = $user["password"];
            if (!password_verify($password, $hashedPassword)) {
                    // Incorrect password
                return ["error" => "Invalid credentials"];

            }
    
                // Set session data for the user
            $_SESSION["user"] = $user;
    
                // Redirect based on user role
            if ($user["role"] === "admin") {
                header("Location: dashboard");  // Redirect to admin dashboard
            } else {
                header("Location: userdashboard");  // Redirect to user dashboard
            }
            exit;
    
        } catch (Exception $e) {
            echo "Login error: " . $e->getMessage();
        }
    }

    
    
    public function getAllUsers()
    {
        $this->db->query("SELECT * FROM users");
        $this->db->execute();
        return $this->db->results();
    }

    //Register
    public function registerUser($fname, $lname, $email, $password) {
        try {
            // $this->db->beginTransaction();

            $this->db->query("INSERT INTO users (fname, lname, email, password) VALUES (:fname, :lname, :email, :password)");
            $this->db->bind(':fname', $fname);
            $this->db->bind(':lname', $lname);
            $this->db->bind(':email', $email);
            $this->db->bind(':password', $password);
            $this->db->execute();

            // session_start();
            $_SESSION["user"] = $this->db->result();

            // $this->db->commitTransaction();

            header("Location: ./");
        } catch (Exception $e) {
            // $this->db->rollback();
            echo "failed to insert: " . $e->getMessage();
        }
    }

    public function logout() {
        session_destroy();
        header("Location: login");
    }
}
?>