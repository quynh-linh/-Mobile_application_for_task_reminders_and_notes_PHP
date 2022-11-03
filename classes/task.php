<?php
class task{
    public function __construct($ID,$name,$content,$date,$user_id,$time)
    {   
        $this->id = $ID;
        $this->name = $name;
        $this->content = $content;
        $this->date = $date;
        $this->user_id = $user_id;
        $this->time = $time;    
    }
}
?>