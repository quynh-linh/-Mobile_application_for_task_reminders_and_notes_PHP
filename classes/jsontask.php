<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/database.php');
?>
<?php 
class jsontask{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function showJsonTask($nameLogin){
        $sql = "SELECT * FROM task WHERE user_id = '$nameLogin' ";
        $result = $this->db->select($sql);
        $arrayTask = array();
        while($row = $result -> fetch_assoc()){
            array_push($arrayTask,new task($row["id"],$row["name"],$row["content"],$row["date"],$row["user_id"],$row["time"]));
        }
        echo json_encode($arrayTask);
    }
    public function insertTask($id,$name,$content,$date,$userId,$time){
        $id = mysqli_real_escape_string($this->db->link, $id);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $content = mysqli_real_escape_string($this->db->link, $content);
        $date = mysqli_real_escape_string($this->db->link, $date);
        $userId = mysqli_real_escape_string($this->db->link, $userId);
        $time = mysqli_real_escape_string($this->db->link, $time);
        if (!($id == "" || $name =="" || $content =="" || $date =="" || $userId =="" || $time =="")) {
            $sql = "INSERT INTO task (`id`, `name`, `content`, `date`, `user_id`, `time`) 
            VALUES ('$id','$name','$content','$date','$userId','$time')";
            $result = $this->db->insert($sql);
            if ($result) {
                echo "success";
            } else {
                echo "error";
            }
        } 
    }
    public function updateTask($id,$name,$content,$date,$userId,$time){
        $id = mysqli_real_escape_string($this->db->link, $id);
        $name = mysqli_real_escape_string($this->db->link, $name);
        $content = mysqli_real_escape_string($this->db->link, $content);
        $date = mysqli_real_escape_string($this->db->link, $date);
        $userId = mysqli_real_escape_string($this->db->link, $userId);
        $time = mysqli_real_escape_string($this->db->link, $time);
        if (!($id == "" || $name =="" || $content =="" || $date =="" || $userId =="" || $time =="")) {
            $sql = "UPDATE `task` 
            SET 
            `name`='$name',
            `content`='$content',
            `date`='$date',
            `time`='$time'
            WHERE id = '$id' AND user_id = '$userId'";
            $result = $this->db->insert($sql);
            if ($result) {
                echo "$sql";
            } else {
                echo "error";
            }
        } 
    }
    public function deleteUser($id){        
        $sql = "DELETE FROM `task` WHERE id ='$id'";
        $result = $this->db->delete($sql);
        if ($result) {
           echo "Delete Success";
        } else {
            echo "Error Delete";
        }
    }
}   
?>