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
    public function showJsonTask(){
        $sql = "SELECT * FROM task ";
        $result = $this->db->select($sql);
        $arrayTask = array();
        while($row = $result -> fetch_assoc()){
            array_push($arrayTask,new task($row["id"],$row["name"],$row["content"],$row["date"],$row["check_status"],$row["user_id"],$row["time"]));
        }
        echo json_encode($arrayTask);
    }
}   
?>