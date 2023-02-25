<?php

require_once('admin/class/movie.class.php');
require_once('admin/class/common.class.php');

$movieObject=new Movies();
// print_r($movieObject);
$latest=$movieObject->getAllLatest();

?>

<?php
include('header.php');
?>






<nav class="navbar navbar-expand-lg navbar-custom"  >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" ><h1 style="text-shadow:2px 4px 6px  white">Circuit</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="margin-left:25vw">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color:rgb(253, 252, 250);"">Home</a>
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
  
  
  <!-- swiper area -->
  <div class="swiper"  >
    
    
    <div class="swiper-wrapper"  >
<br>
    <?php
        foreach ($latest as $latestmovie) {
        ?>
       
        <div class="swiper-slide"><a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank"><img src="<?php echo $latestmovie['background_image']; ?>" ></a></div>
        <?php } ?>
    

     
      
      
    </div>
    
    <div class="swiper-pagination"></div>
    
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    </div>

    <div class="animation" style="display:none;">
    <div class="bar" style="width:30%;margin-right:5%">
      <div class="ball"></div>
    </div>
    
    
    </div>
  <br>
  <!-- Theme area -->
<div class="theme" >
        <h1 class="themetitle"  >We have the <span class="highlight">Review</span> ,You <span class="highlight">Needed</span></h1>
        <hr>
      </div>
<!-- recent area -->

<hr>

      <div class="recent">
        <h2 style="padding-left:50px;  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Our Recent Reviews:</h2>
        <hr>
        <br>
        <div class="container">

        
        <?php
        foreach ($latest as $latestmovie) {
        ?>
       
       <div class="boxes">
        
        <a href="movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank"><div class="box box-1"  style=" background-image: url('<?php echo $latestmovie['background_image'];?>');"></div></a>
      
      <h3 style="font-weight:bolder"><?php echo $latestmovie['title'] ?></h3>
    </div>


        <?php } ?>

         
        
      


         
          </div>
      
      
      
      </div>
      <!-- text area -->
<div class="text1" >
  <br>
  
  
  <h4 style="font-size: 25px;  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left:5%; margin-bottom:0px">This website contains all the review of movies of bollywood .You  can check the latest review as well as old from our menu. </h4>
  
    </div>
    <br>
    
    
    </div> 
<?php
include('footer.php');
?>






