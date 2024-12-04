<?php 
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";

class Auth extends Controller{
    
    private $user;

    public function __construct(){
        $this->user = new User();
    }

    public function login() {
        if (isset($_SESSION["user"])) {
            header(header: "Location: ".BASE_URL);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $this->user->login($email, $password);

        }
        $this->renderView("pages/login");
    }


        public function register() {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $this->user->registerUser($fname, $lname, $email, $password);
        }
        $this->renderView("pages/register");
    }

    public function logout() {
        $this->user->logout();
    }
}
?>