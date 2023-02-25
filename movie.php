
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
<link rel="stylesheet" href="movie.css">
<link rel="stylesheet" href="style.css">


</head>
<body>


  
    <!-- navigation area -->
    
<nav class="navbar navbar-expand-lg navbar-custom "  >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" ><h1 style="text-shadow:2px 4px 6px  white">Circuit</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Creator
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="admin/index.php">Admin Panel</a></li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    
<!-- content area -->
   <div class="content-area " >
    <!-- title -->
    
  <br>
 
       <h1> 
        <?php
        echo $moviedata->title;
        ?>
        </h1>
        
        <h5 class="updated_on"><?php  if($moviedata->updated_on != "0000-00-00"){
        echo "Updated_on: ". $moviedata->updated_on;}?> </h5>
        
        

        
        <hr>


       
      
      
      <!-- poster -->
<div class="poster" >

  <div class="picture">
    <img src="<?php
    echo $moviedata->image; ?>" alt="">
  </div>

</div>
<br>
<!-- storyline -->
<div class="storyline">
  <p><?php
  echo  htmlspecialchars_decode($moviedata->detail);
  ?>
  </p>
    

     
</div>
<!-- starcast -->
<div class="StarCast" >
  <hr>
  <h1>Top Cast</h1>
  <hr>


  <div class="castcontainer">
  <?php

for($x=1;$x<=6;$x++){?>
  
  <div class="castboxes">
    <?php $pic="cast_".$x."_pic"; ?>
    <?php $name="cast_".$x; ?>
    
  <div class="castbox"><img src="<?php echo htmlspecialchars_decode($moviedata->$pic);?>">
</div>
  <h4><?php echo htmlspecialchars_decode($moviedata->$name);?></h4>

</div>


<?php
}
?>
    
  </div>




<!-- <div class="containermovie">

</div>
 <?php

for($x=1;$x<=6;$x++){?>
  
  <div class="boxes-movie">
    <?php $pic="cast_".$x."_pic"; ?>
    <?php $name="cast_".$x; ?>
    
  <div class="box-movie"><img src="<?php echo htmlspecialchars_decode($moviedata->$pic);?>"></div>
  <h4><?php echo htmlspecialchars_decode($moviedata->$name);?></h4>
</div>


<?php
}
?>
</div> -->


<hr>


<h1>Details:</h1>
<hr>
<div class="details" >
  <h5><span style="color:red;width:180px; display:inline-block;">IMDB rating  : </span><?php echo  $moviedata->imdb; ?></h5>
  <hr>
  <h5><span style="color:red;width:180px; display:inline-block;">Genre     :    </span><?php echo  $moviedata->genre; ?></h5>
  <hr>
<h5><span style="color:red;width:180px; display:inline-block;">Director     :</span><?php   echo $moviedata->director;?></h5>
<hr>
<h5><span style="color:red;width:180px; display:inline-block;">Producer:</span><?php echo $moviedata->producer;?></h5>
<hr>
<h5><span style="color:red;width:180px; display:inline-block;">Writer :</span ><?php echo $moviedata->writer;?></h5>
<hr>
<h5><span style="color:red;width:180px; display:inline-block;">Budget:</span><?php echo $moviedata->budget; ?></h5>
<hr>
<h5><span style="color:red;width:180px; display:inline-block;">Released Date:</span><?php echo $moviedata->released_date; ?></h5>
<hr>
<h5><span style="color:red;width:180px; display:inline-block;">Boxoffice Collection:</span><?php echo $moviedata->boxoffice_collection; ?></h5>

</div>
<hr>

<h3>My Opinion</h3>
<hr>
<div class="myreview">
<p><?php
echo htmlspecialchars_decode($moviedata->my_opinion);
?></p>
</div>

<hr>
<h2>Review by Famous Reviewer</h2>
<hr>
<div class="otherreview">
  <div class="container-2" style="grid-column-gap:0.5rem;">
    <div class="boxes-2">
      <div class="box-2">
      <iframe width="560" height="315" src="<?php echo $moviedata->famous_review_1; ?>" title="New KGF or Pushpa ? Dasara Teaser Review / Nani / Jasstag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      
      </div>
     
    </div>
    
  
   <div class="boxes-2">
    <div class="box-2">
    <iframe width="560" height="315" src="<?php echo $moviedata->famous_review_2; ?>" title="New KGF or Pushpa ? Dasara Teaser Review / Nani / Jasstag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div></div>
 
    
  
  </div>
</div>











      
      </div>

</div>
      <?php
include('footer.php');
?>
