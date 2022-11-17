<?php 
class DinaryPost{
    public function __construct($id,$title,$content,$date,$image,$user_id,$find_id)
    {   
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
        $this->image = $image;
        $this->user_id  = $user_id;   
        $this->find_id  = $find_id;   
    }
}
?>