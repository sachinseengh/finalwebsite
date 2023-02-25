
<?php

require_once('../class/movie.class.php');
require_once('../class/common.class.php');

$movieObject=new Movies();

$latest=$movieObject->getAllLatestDashboard();
$bollywood=$movieObject->getAllBollywoodDashboard();
$marvel=$movieObject->getAllMarvelDashboard();
$dc=$movieObject->getAllDcDashboard();
$south=$movieObject->getAllSouthDashboard();

?>




<?php
 include('headerFooter/header.php');
 include('sideBar.php');
?>
        <div id="page-wrapper" >
            <div class="row"  >
            
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div>
        
            
                <div class="col-lg-12">
                <div class="boxes">
                    <div class="box">
                    <h3>Latest</h3>
                    <hr>
                    <ul >
                        
                    <?php
        foreach ($latest as $latestmovie) {
        ?>
       
       <li>
       <a href="../../movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank">
    <?php echo $latestmovie['title'];?>
    </a>
       </li>
        
        
      
      


        <?php } ?>
                    
                    </ul>
                    
                    </div>
                    
                    <div class="box">
                    
                    <h3>Bollywood</h3>
                    <hr>
                    <ul >
                    <?php
        foreach ($bollywood as $latestmovie) {
        ?>
       
       <li>
       <a href="../../movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank">
    <?php echo $latestmovie['title'];?>
    </a>
       </li>
        
        
      
      


        <?php } ?>
                    </ul>
                    
                    </div>
                    <div class="box">
                    
                    <h3>Marvel</h3>
                    <ul >
                        <hr>
                        <?php
        foreach ($marvel as $latestmovie) {
        ?>
       
       <li>
       <a href="../../movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank">
    <?php echo $latestmovie['title'];?>
    </a>
       </li>
        
        
      
      


        <?php } ?>
                    </ul>
                    
                    </div>
                    <div class="box">
                    
                    <h3>DC</h3>
                    <hr>
                    <ul >
                    <?php
        foreach ($dc as $latestmovie) {
        ?>
       
       <li>
       <a href="../../movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank">
    <?php echo $latestmovie['title'];?>
    </a>
       </li>
        
        
      
      


        <?php } ?>
                    </ul>
                    
                    </div>
                    <div class="box">
                
                    <h3>South</h3>
                    <hr>
                    <ul >
                    <?php
        foreach ($south as $latestmovie) {
        ?>
       
       <li>
       <a href="../../movie.php?id=<?php echo $latestmovie['id'];  ?>" target="_blank">
    <?php echo $latestmovie['title'];?>
    </a>
       </li>
        
        
      
      


        <?php } ?>
                    </ul>
                    
                    </div>
                </div>
                </div>

            </div>
    
    
   <?php
     include('headerFooter/footer.php');
   ?>