<?php
include_once __DIR__ . '/../lib/database.php';


$db = new Database();
?>



<?php
class user
{
    private $db;
    private $fm;
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }



    public function getuserbyid($id)
    {


        $query = "SELECT * FROM users WHERE id = '$id'";
        $result = $this->db->select($query);

        return $result;
    }
    public function checklogin($id)
    {


        $query = "SELECT * FROM user_user WHERE userid = '$id'";
        $result = $this->db->select($query);
        if ($result) {
            if ($result && $result->num_rows > 0) {
                while ($resultss = $result->fetch_assoc()) {
                    if ($resultss['userroles'] == 2) {
                        header('Location:page/Home.php');
                    }
                }
            }
        }
    }

    public function login($data)
    {
        $user_username = mysqli_real_escape_string($this->db->link, $data['username']);
        $user_password = mysqli_real_escape_string($this->db->link, md5($data['password']));
        $query = "SELECT * FROM users WHERE  username = '$user_username'AND password = '$user_password' ";
        $result = $this->db->select($query);

        if ($result) {
            if ($result && $result->num_rows > 0) {
                while ($resultss = $result->fetch_assoc()) {
                    $_SESSION['clone_user_id'] = $resultss['id'];
                    $alertss = "200";
                    return $alertss;
                }
            }
            $alertss = "200";
            return $alertss;
        } else {
            $alerts = "400";

            return $alerts;
        }
    }
    public function logout()
    {
        unset($_SESSION['clone_user_id']);
    }
    public function loginuser($data)
    {
        $userpass = mysqli_real_escape_string($this->db->link, md5($data['userpass']));
        $useremail = mysqli_real_escape_string($this->db->link, $data['useremail']);
        $query = "SELECT * FROM user_user WHERE  userpass = '$userpass'AND useremail = '$useremail' ";
        $result = $this->db->select($query);

        if ($result) {
            if ($result && $result->num_rows > 0) {
                while ($resultss = $result->fetch_assoc()) {
                    $_SESSION['userid'] = $resultss['userid'];
                }
            }
            $arlet = "<div class='alert alert-success' role='alert'>Login Successfully</div>";
            return $arlet;
        } else {
            $arlet = "<div class='alert alert-danger' role='alert'>Login Error </div>";

            return $arlet;
        }
    }
    public function countusser()
    {

        $query = "SELECT COUNT(*) AS total_users FROM user_user; ";
        $result = $this->db->select($query);


        return $result;
    }
}
?>