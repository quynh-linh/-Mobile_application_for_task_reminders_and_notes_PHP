<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/database.php');
?>
<?php 
class jsonUser{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function insertUser($namelogin,$password){
        $nameLogin = mysqli_real_escape_string($this->db->link, $namelogin);
        $passWord = mysqli_real_escape_string($this->db->link, $password);
        if (!($nameLogin == "" || $passWord =="" )) {
            $checknameLogin = "SELECT * FROM `user` WHERE namelogin = '$nameLogin'";
            $resultCheck = $this->db->select($checknameLogin);
            if ($resultCheck) {
                echo "exists";
            } else {
                $sql = "INSERT INTO `user`(`fullname`, `ngaySinh`, `phone`, `namelogin`, `password` , `image`) 
                VALUES ('','','','$nameLogin','$passWord','')";
                $result = $this->db->insert($sql);
                if ($result) {
                    echo "success";
                } else {
                    echo "error";
                }
            }  
        } 
    }
    public function updateUser($fullname,$ngaySinh,$phone,$nameLogin){
        $fullname = mysqli_real_escape_string($this->db->link, $fullname);
        $ngaySinh = mysqli_real_escape_string($this->db->link, $ngaySinh);
        $phone = mysqli_real_escape_string($this->db->link, $phone);
        $nameLogin = mysqli_real_escape_string($this->db->link, $nameLogin);
        if (!($fullname == "" || $ngaySinh =="" || $phone =="" || $nameLogin =="" )) {
            $sql = "UPDATE `user` SET `fullname`='$fullname',`ngaySinh`='$ngaySinh',`phone`='$phone' 
            WHERE `namelogin`='$nameLogin'";
            $result = $this->db->update($sql);
            if ($result) {
                echo "success";
            } else {
                echo "error";
            }
        }    
    }
    public function updateImageUser($image,$nameLogin){
        $image = mysqli_real_escape_string($this->db->link, $image);
        $nameLogin = mysqli_real_escape_string($this->db->link, $nameLogin);
        if (!($image =="" || $nameLogin =="")) {
            $sql = "UPDATE `user` SET `image`='$image' 
            WHERE `namelogin`='$nameLogin'";
            $result = $this->db->update($sql);
            if ($result) {
                echo "success";
            } else {
                echo "error";
            }
        }    
    }
    public function loginUser($nameLogin,$passWord){
        $username = mysqli_real_escape_string($this->db->link, $nameLogin);
        $password = mysqli_real_escape_string($this->db->link, $passWord);
        $check_username = "SELECT * FROM user WHERE namelogin='$username' AND password='$password'";
        $result = $this->db->select($check_username);
        if ($result) {
            echo "success";
        } else {
            echo "error";
        }
    }
    public function selectUser($user_name){        
        $sql = "SELECT * FROM `user` WHERE namelogin ='$user_name'";
        $result = $this->db->select($sql);
        //$arrayTask = array();
        if ($result) {
            while($row = $result -> fetch_assoc()){
               $user = new user($row["fullname"],$row["ngaySinh"],$row["phone"],$row["namelogin"],$row["password"]);
            }
            echo json_encode($user);
        }   
    }
}  
?>