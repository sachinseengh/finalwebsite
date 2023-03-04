<?php

require_once('admin/class/movie.class.php');
require_once('admin/class/common.class.php');

$movieObject=new Movies();

$latest=$movieObject->getAllLatest();
$bollywood=$movieObject->getAllBollywoodDashboard();
$marvel=$movieObject->getAllMarvelDashboard();
$dc=$movieObject->getAllDcDashboard();
$south=$movieObject->getAllSouthDashboard();

?>

<?php
include('header.php');
?>







<nav class="navbar navbar-expand-lg navbar-custom"  >
  <div class="container-fluid" >
    <a class="navbar-brand" href="index.php" ><img src="logo.png" alt="logo" height="40" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars" style="color:white;"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="margin-left:25vw">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style=" color:yellow"">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="latest.php">Latest</a>
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
  
  
  <!-- swiper area -->
  <div class="swiper"  >
    
    
    <div class="swiper-wrapper"  >

    <?php
        foreach ($latest as $latestmovie) {
        ?>
       
        <div class="swiper-slide"><a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank"><img src="<?php echo $latestmovie['image']; ?>" ></a></div>
        <?php } ?>
    

     
      
      
    </div>
    
    <div class="swiper-pagination" ></div>
    
    <div class="swiper-button-prev" style="color:yellow"></div>
    <div class="swiper-button-next" style="color:yellow"></div>
    </div>

    
    
    
  

<!-- recent area -->



<div class="recent" style="margin-top:0vh">
          <div style="background-color:black;color:white;height:7vh;padding-top:0.5vh">
        <h2 style="padding-left:3%;  font-family:  'Times New Roman', serif;">Latest Review:</h2>
        </div>
        <br>
        <div class="container">

        
        <?php
        foreach ($latest as $latestmovie) {
        ?>
       
       <div class="boxes">
        
       
        <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" ><div class="box box-1"  style=" background-image: url('<?php echo $latestmovie['image'];?>');"></div></a>
      
        <h3 ><?php echo $latestmovie['title'] ?></h3>
    </div>


        <?php } ?>
          </div>
          <div class="recent" style="margin-top:0vh">
          <div style="background-color:black;color:white;height:7vh;padding-top:1vh">
        <h2 style="padding-left:3%;  font-family:  'Times New Roman', serif;">Bollywood Review:</h2>
        </div>
        <br>
        <div class="container">

        
        <?php
        foreach ($bollywood as $latestmovie) {
        ?>
       
       <div class="boxes">
        
       
        <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" ><div class="box box-1"  style=" background-image: url('<?php echo $latestmovie['image'];?>');"></div></a>
        <h3 ><?php echo $latestmovie['title'] ?></h3>
      
    </div>


        <?php } ?>
          </div>
          <div class="recent" style="margin-top:0vh">
          <div style="background-color:black;color:white;height:7vh;padding-top:1vh">
        <h2 style="padding-left:3%;  font-family:  'Times New Roman', serif;">Marvel Reviews:</h2>
        </div>
        <br>
        <div class="container">

        
        <?php
        foreach ($marvel as $latestmovie) {
        ?>
       
       <div class="boxes">
        
       
        <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" ><div class="box box-1"  style=" background-image: url('<?php echo $latestmovie['image'];?>');"></div></a>
      
        <h3 ><?php echo $latestmovie['title'] ?></h3>
    </div>


        <?php } ?>
          </div>
          <div class="recent" style="margin-top:0vh">
          <div style="background-color:black;color:white;height:7vh;padding-top:1vh">
        <h2 style="padding-left:3%;  font-family:  'Times New Roman', serif;">Disney Reviews:</h2>
        </div>
        <br>
        <div class="container">

        
        <?php
        foreach ($dc as $latestmovie) {
        ?>
       
       <div class="boxes">
        
       
        <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank"><div class="box box-1"  style=" background-image: url('<?php echo $latestmovie['image'];?>');"></div></a>
      
        <h3 ><?php echo $latestmovie['title'] ?></h3>
    </div>


        <?php } ?>
          </div> 
          <div class="recent" style="margin-top:0vh">
          <div style="background-color:black;color:white;height:7vh;padding-top:1vh">
        <h2 style="padding-left:3%;  font-family:  'Times New Roman', serif;">South Reviews:</h2>
        </div>
        <br>
        <div class="container">

        
        <?php
        foreach ($south as $latestmovie) {
        ?>
       
       <div class="boxes">
        
       
        <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank"><div class="box box-1"  style=" background-image: url('<?php echo $latestmovie['image'];?>');"></div></a>
        <h3 ><?php echo $latestmovie['title'] ?></h3>
      
    </div>


        <?php } ?>
          </div>
      
      
      </div>
      <!-- text area -->
<div class="text1" >
  <br>
  
  
  <h6 style="  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left:5%; margin-bottom:0px">This website contains all the review of movies of bollywood .You  can check the latest review as well as old from our menu. </h6>
  
    </div>
    <br>
    
    
    </div> 
<?php
include('footer.php');
?>






