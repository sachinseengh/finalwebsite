<?php
include('class/user.class.php');


$data=new User();



$error=[ ];


if(isset($_POST['submit'])){
    
    if(isset($_POST['username']) && !empty($_POST['username'])){
        $data->username=$_POST['username'];
        
    }else{
        $error['username']="username not filled";
    }


    if(isset($_POST['password']) && !empty($_POST['password'])){
        $data->password=$_POST['password'];
    }else{
        $error['password']="password not filled";
    }
}

if(count($error)<1){
   $status= $data->login();
}




?>



<!DOCTYPE html>
<html lang="en">
  <!-- heading area -->
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sketch Latest</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    


<script src="script.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="home-content.css">

     <link rel="stylesheet" href="check.css">
     <link rel="stylesheet" href="admin.css">
     <link rel="stylesheet" href="../style.css">
     
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1  style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;text-shadow:2px 4px 6px  white;color:black">Circuit</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../latest.php">Latest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../bollywood.php">Bollywood
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="marvel.php" >Marvel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../dc.php">Dc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../south.php">South</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:rgb(253, 252, 250);"">
            Creator 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Admin Panel</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
  <!-- content area -->
<div class="content-area "  style="height:82.3vh">
        <?php
        if(isset($invalid)){
            echo $invalid;
        }
?>


<div class="formarea">
<div class="main-block">
  
  <form action="" method="post">
  
    
  
<h1>Admin Panel</h1>
<hr>
<?php
        if(isset($invalid)){
            echo $invalid;
        }
?>
<hr>
      <label id="icon" for="username"><i class="fas fa-user"></i></label>
      <input type="text" name="username" id="username" placeholder="Username" required>
    <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
    <input type="password" name="password" id="password" placeholder="Password" required></
    <hr>
    
    <hr>
    
    <input type="submit" value="submit" name="submit"  id="submit" class="btn btn-success" style="margin-left:50px;">
    <input type="reset" value="Reset" class="btn btn-secondary">
    
  </form>




</div>
</div>
</div>

  <div class="footer">
    <footer>
      <h3 style="font-size:15px;">Copywright by <span ">Reviewer.com</span>. For Copywright isssue contact our <span >Facebook page</span> or  contact on us at <span  ><a href = "mailto:sachinseengh@gmail.com?subject = Feedback&body = Message">
        Email us for Copyright
        </a></span></h3>
  </footer>
  
  
  <!-- script area -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <script>
     $(".sidebar ul li ").on('click',function( ){
       $(".sidebar ul li.active").removeClass('active');
       $(this).addClass('active');
     });
 
 
     $('.open-btn').on('click',function(){
       $('.sidebar').addClass('active');
     });
 
     $('.close-btn').on('click',function(){
       $('.sidebar').removeClass('active');
     })
   </script>
   <script>
     const swiper = new Swiper('.swiper', {
     
     autoplay:{
       delay:800,
       disableOnInteraction:false,
     },
       loop: true,
      
     
       
       pagination: {
         el: '.swiper-pagination',
         clickable:true,
       },
     
   
       navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
       },
     
       
     });
     
   </script>
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2484651863357657"
     crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>











    


    











