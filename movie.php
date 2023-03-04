
<?php
require_once('admin/class/movie.class.php');
require_once('admin/class/common.class.php');
$movieid=$_GET['id'];
$movie= new Movies();

$movie->set('id',$movieid);


$moviedata=$movie->getById();


// print_r($moviedata);


?>




<!DOCTYPE html>
<html lang="en">
  <!-- heading area -->
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Circuit's
      <?php echo $moviedata->title ;?>
    </title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->


<script src="script.js"></script>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="moviee.css">
<link rel="stylesheet" href="style.css">


</head>
<body>


  
    <!-- navigation area -->
    
<nav class="navbar navbar-expand-lg navbar-custom "  >
  <div class="container-fluid" >
  <a class="navbar-brand" href="index.php" ><img src="logo.png" alt="logo" height="40" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color:white"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="latest.php">Latest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bollywood.php">Bollywood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="marvel.php">Marvel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dc.php">Disney</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="south.php">south</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

    
<!-- content area -->
   <div class="content-area " >
    <!-- title -->
    
  <br>
  
       <h1 style="font-size:2rem ;font-family:times new roman;"> 
        <b>
        <?php
        echo $moviedata->title;
        ?>
        </b>
        </h1>

        <h6 class="updated_on"><?php  if($moviedata->updated_on != "0000-00-00"){
        echo "Last_Modified_on: ". $moviedata->updated_on;}?> </h6>
        
        

        
        
        


       
      
      
      <!-- poster -->
<div class="poster" >

  <div class="picture">
    <img src="<?php
    echo $moviedata->image ?>" alt="">
  </div>

</div>
<br>
<!-- storyline -->
<div class="storyline">
<div style="background-color:black;color:white;height:7vh;padding-top:0.5vh">
  <h3><b>Storyline</b></h3>
        </div>
  <h6>
  <p><?php
  echo  htmlspecialchars_decode($moviedata->detail);
  ?>
  </p>
        </h6>

     
</div>
<!-- starcast -->
<div class="StarCast" >
  <hr>
  <div style="background-color:black;color:white;height:7vh;padding-top:0.5vh">
  <h3><b>Top Cast</b></h3>
        </div>
  <hr>


  <div class="castcontainer">
  <?php

for($x=1;$x<=6;$x++){?>
  
  <div class="castboxes">
    <?php $pic="cast_".$x."_pic"; ?>
    <?php $name="cast_".$x; ?>
    
  <div class="castbox"><img src="<?php echo htmlspecialchars_decode($moviedata->$pic);?>">
</div>
  <h6 style="margin-left:3vw"><?php echo htmlspecialchars_decode($moviedata->$name);?></h6>

</div>


<?php
}
?>
    
  </div>

</div>



<hr>

<div style="background-color:black;color:white;height:7vh;padding-top:0.5vh">
<h3><b>Details:</b></h3>
</div>
<hr>
<div class="details" style="font-family:serif" >
  <h4><span style="width:170px; display:inline-block;">IMDB rating  : </span><span style="font-size:1rem;"><?php echo  $moviedata->imdb; ?></span></h4>
  <hr>
  <h4><span style=";width:170px; display:inline-block;">Genre     :    </span><span style="font-size:1rem;"><?php echo  $moviedata->genre; ?></span></h4>
  <hr>
<h4><span style=";width:170px; display:inline-block;">Director     :</span><span style="font-size:1rem;"><?php   echo $moviedata->director;?></span></h4>
<hr>
<h4><span style=";width:170px; display:inline-block;">Producer:</span><span style="font-size:1rem;"><?php echo $moviedata->producer;?></span></h4>
<hr>
<h4><span style=";width:170px; display:inline-block;">Writer :</span ><span style="font-size:1rem;"><?php echo $moviedata->writer;?></span></h4>
<hr>
<h4><span style=";width:170px; display:inline-block;">Budget:</span><span style="font-size:1rem;"><?php echo $moviedata->budget; ?></span></4>
<hr>
<h4><span style=";width:170px; display:inline-block;">Released Date:</span><span style="font-size:1rem;"><?php echo $moviedata->released_date; ?></span></h4>
<hr>
<h4><span style=";width:170px; display:inline-block;">Boxoffice Collection:</span><span style="font-size:1rem;"><?php echo $moviedata->boxoffice_collection; ?></span></h4>

</div>
<hr>

<div style="background-color:black;color:white;height:7vh;padding-top:0.5vh">
<h3><b>Our Opinion</b></h3>
</div>

<div class="myreview" >
<p><?php
echo htmlspecialchars_decode($moviedata->my_opinion);
?></p>
</div>

<hr>
<div style="background-color:black;color:white;height:7vh;padding-top:0.5vh">
<h3><b>Trailer</b></h3>
</div>
<br>

<div class="otherreview">
  <div class="container-2" style="grid-column-gap:0.5rem;">
    <div class="boxes-2">
      <div class="box-2">
      <iframe width="560" height="315" src="<?php echo $moviedata->trailer; ?>" title="New KGF or Pushpa ? Dasara Teaser Review / Nani / Jasstag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
      </div>
     
    </div>
    
  
   
 
    
  
  </div>
</div>
      
      </div>

</div>
      <?php
include('footer.php');
?>
