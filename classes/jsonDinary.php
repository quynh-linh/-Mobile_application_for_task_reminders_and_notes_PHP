<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once($filepath.'/../lib/database.php');
?>
<?php 
class jsonDinary{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function showJsonDinary($nameLogin){
        $sql = "SELECT * FROM lib WHERE user_id = '$nameLogin' ORDER BY date ASC ";
        $result = $this->db->select($sql);
        $arrayTask = array();
        while($row = $result -> fetch_assoc()){
            array_push($arrayTask,new DinaryPost($row["id"],$row["title"],$row["content"],$row["date"],$row["image"],$row["user_id"],$row["find_id"]));
        }
        echo json_encode($arrayTask);
    }
    public function showJsonDinaryUpdate($id){
        $sql = "SELECT * FROM lib WHERE id = '$id'";
        $result = $this->db->select($sql);
        $arrayTask = array();
        while($row = $result -> fetch_assoc()){
            array_push($arrayTask,new DinaryPost($row["id"],$row["title"],$row["content"],$row["date"],$row["image"],$row["user_id"],$row["find_id"]));
        }
        echo json_encode($arrayTask);
    }
    public function insertDinary($title,$content,$date,$image,$user_id,$find_id){
        $user_id = mysqli_real_escape_string($this->db->link, $user_id);
        $title = mysqli_real_escape_string($this->db->link, $title);
        $content = mysqli_real_escape_string($this->db->link, $content);
        $date = mysqli_real_escape_string($this->db->link, $date);
        $find_id = mysqli_real_escape_string($this->db->link, $find_id);
        $image = mysqli_real_escape_string($this->db->link, $image);
        if (!($user_id == "" || $title == "" || $content =="" || $date == "" || $find_id =="" || $image =="")) {
            $sql = "INSERT INTO `lib`(`id`, `title`, `content`, `date`, `image`, `user_id`, `find_id`) 
            VALUES (null,'$title','$content','$date','$image','$user_id',' $find_id')";
            $result = $this->db->insert($sql);
            if ($result) {
                echo "success";
            } else {
                echo "error";
            } 
        } 
    }
    public function UpdateDinary($id,$title,$content,$date,$image,$user_id,$find_id){
        $user_id = mysqli_real_escape_string($this->db->link, $user_id);
        $title = mysqli_real_escape_string($this->db->link, $title);
        $content = mysqli_real_escape_string($this->db->link, $content);
        $date = mysqli_real_escape_string($this->db->link, $date);
        $find_id = mysqli_real_escape_string($this->db->link, $find_id);
        $image = mysqli_real_escape_string($this->db->link, $image);
        if (!($user_id == "" || $title == "" || $content =="" || $date == "" || $find_id =="" || $image =="")) {
            $sql = "UPDATE `lib` 
            SET `title`='$title',
            `content`='$content',
            `date`='$date',
            `image`='$image',
            `user_id`='$user_id',
            `find_id`='$find_id' 
            WHERE id = '$id'";
            $result = $this->db->insert($sql);
            if ($result) {
                echo "success";
            } else {
                echo "error";
            } 
        } 
    }
    public function deletePost($id){        
        $sql = "DELETE FROM `lib` WHERE id ='$id'";
        $result = $this->db->delete($sql);
        if ($result) {
           echo "success";
        } else {
            echo "Error";
        }
    }
}