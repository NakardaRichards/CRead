<?php
if (!isset($_SESSION)) {
    session_start();
}

class Users
{
    private $servername;
    private $username;
    private $password;
    private $database;
    public  $con;

    public function __construct()
    {
        // Load environment variables
        $this->servername = getenv('DB_HOST');
        $this->username   = getenv('DB_USER');
        $this->password   = getenv('DB_PASS');
        $this->database   = getenv('DB_NAME');

        if (!$this->servername || !$this->username || !$this->database) {
            die("Database environment variables are not set!");
        }

        // Connect to MySQL using mysqli
        $this->con = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->con->connect_error) {
            die("Failed to connect to MySQL: " . $this->con->connect_error);
        }
    }

    public function signupData($post)
    {
        $fname = trim($post['fname'] ?? '');
        $lname = trim($post['lname'] ?? '');
        $email = trim($post['email'] ?? '');
        $password = trim($post['pass'] ?? '');

        if (!$fname || !$lname || !$email || !$password) {
            return "All fields are required!";
        }

        // Hash the password before storing
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        // Use prepared statement to prevent SQL injection
        $stmt = $this->con->prepare(
            "INSERT INTO users (fname, lname, email, pass) VALUES (?, ?, ?, ?)"
        );
        $stmt->bind_param("ssss", $fname, $lname, $email, $passwordHash);

        if ($stmt->execute()) {
            $_SESSION['username'] = $fname;
            header("Location: diagnostics.php");
            exit;
        } else {
            return "Failed to signup: " . $stmt->error;
        }
    }

    public function loginData($post)
    {
        $email = trim($post['email'] ?? '');
        $password = trim($post['pass'] ?? '');

        if (!$email || !$password) {
            return "Email and password are required!";
        }

        // Use prepared statement
        $stmt = $this->con->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row && password_verify($password, $row['pass'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['fname'] . " " . $row['lname'];
            $_SESSION['class'] = $row['class'] ?? null;
            header("Location: ../dashboard/dashboard.php");
            exit;
        } else {
            return "Login failed: Invalid email or password!";
        }
    }
}
