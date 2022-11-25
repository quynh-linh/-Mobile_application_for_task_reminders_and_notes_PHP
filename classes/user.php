<?php
class user{
    public function __construct($name,$ngaySinh,$phone,$namelogin,$password,$image)
    {   
        $this->name = $name;
        $this->ngaySinh = $ngaySinh;
        $this->phone = $phone;
        $this->namelogin = $namelogin;
        $this->password = $password;  
        $this->image = $image;    
    }
}
?>