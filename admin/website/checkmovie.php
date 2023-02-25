<?php

$title = $_POST['title'];

$conn = mysqli_connect('localhost', 'root', '', 'website');
$sql = "select * from movies where name='$title' limit 1";

$var = $conn->query($sql);

if($var->num_rows > 0){
    echo "Already taken.";
}else{
    echo "success";
}

?>