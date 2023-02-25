<?php
class User{

    public $username,$password;



    
    public function login(){
        $conn=mysqli_connect("localhost","root","","website");

        
        $sql="select * from users where username='$this->username' and password='$this->password'";
        
        $var=$conn->query($sql);
        
        if($var->num_rows>0){

            $data = $var->fetch_object();
            print_r($data);
            session_start();
            
            $_SESSION['username']=$data->username;
        
            setcookie('username',$data->username, time() +24* 60 * 60);
    




            header('location:./website/dashboard.php');
        }else{
            $invalid= "Invalid username and password! ";
            
        }

        
        
    }
}




?>