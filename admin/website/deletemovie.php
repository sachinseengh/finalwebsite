<?php
    $id = $_GET['id'];

    include('../class/movie.class.php');
    $movies = new Movies();
    $movies->set('id', $id);
    $status = $movies->delete();
    session_start();
    if($status == 'success'){
        $_SESSION['message']='Movies Deleted Successfully!';
        header('location:listMovies.php');
    }else{
        $_SESSION['message']="Failed To Delete Movies!";
        header('location:listMovies.php');
    }  
?>