
<?php

require_once('admin/class/movie.class.php');
require_once('admin/class/common.class.php');

$movieObject=new Movies();

$latest=$movieObject->getAllDc();

?>



<?php



include('header.php');

?>

  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h1 style="text-shadow:2px 4px 6px  white">Circuit</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#"   aria-current="page"  >Latest</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="bollywood.php">Bollywood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="marvel.php">Marvel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dc.php" style="color:rgb(253, 252, 250);">Disney</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="south.php">South</a>
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

    
<!-- its the actual content area -->
   <div class="content-area " >
   
    <!-- recent area -->
    <div class="recent">
      <br>
      <h2 style="padding-left:2%;  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Disney Reviews:</h2>
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
  </div>

    
  </div> 

  <?php 
  include('footer.php');
  ?>

