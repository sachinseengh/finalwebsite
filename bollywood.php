<?php



require_once('admin/class/movie.class.php');
require_once('admin/class/common.class.php');

$movieObject=new Movies();
// print_r($movieObject);
$old=$movieObject->getAllBollywood();

?>



<?php
include('header.php');
?>


  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php" ><img src="logo.png" alt="logo" height="40" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"style="color:white"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="latest.php">Latest</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="bollywood.php" style="color:yellow">Bollywood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="marvel.php">Marvel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dc.php">Disney</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="south.php">South</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
    
    
<!-- its the actual content area -->
   <div class="content-area " >
   <!-- recent -->
    <div class="recent">
      <br>
      <h2 style="padding-left:2%;  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Bollywood Reviews:</h2>
      <div class="container">
      
      <?php
        foreach ($old as $oldmovie) {
        ?>
       
       <div class="boxes">
        
        <a href="movie.php?id=<?php echo $oldmovie['id'];  ?>" target="_blank"><div class="box box-1"  style=" background-image: url('<?php echo $oldmovie['background_image'];?>');"></div></a>
      
      <h3 style="font-weight:bolder"><?php echo $oldmovie['title'] ?></h3>
    </div>


        <?php } ?>
        
      
    </div>
        </div>

<?php

include('footer.php');
?>