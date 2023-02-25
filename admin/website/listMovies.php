<?php
 include('headerFooter/header.php');
 include('../class/movie.class.php');
 @session_start();
 if(isset($_SESSION['message']) && $_SESSION['message'] != ""){
    $successMessage= $_SESSION['message'];
    $_SESSION['message']="";
 }
 $movielist= new  Movies();

 $dataList = $movielist->retrieve();

 include('sidebar.php');
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Category</h1>
                </div>
            </div>
            <?php 
             if(isset($successMessage)){
                echo '<div class="alert alert-success">'.$successMessage.'</div>';
             }
            ?>
            <div class="row">
            <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Title</th>
                                    
                                        <th>Latest</th>
                                        <th>South</th>
                                        <th>Bollywood</th>
                                        
                                        <th>Marvel</th>
                                        <th>Dc</th>
                                        
                                     
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  foreach($dataList as $key=>$movie) { ?>
                                    
                                    <tr class="odd gradeX">
                                        <td> <?php echo $key+1; ?></td>
                                        <td> <?php echo $movie['title']; ?> </td>
                                        
                                        
                                        <td class="center"><?php
                                            if($movie['latest'] == 1){
                                                echo "<label class='label-success'>Yes</label>";
                                            }else{
                                                echo "<label class='label-danger'>No</label>";
                                            }
                                        ?>
                                        </td>
                                        <td class="center"><?php
                                            if($movie['south'] == 1){
                                                echo "<label class='label-success'>Yes</label>";
                                            }else{
                                                echo "<label class='label-danger'>No</label>";
                                            }
                                        ?>
                                        </td>
                                        <td class="center"><?php
                                            if($movie['bollywood'] == 1){
                                                echo "<label class='label-success'>Yes</label>";
                                            }else{
                                                echo "<label class='label-danger'>No</label>";
                                            }
                                        ?>
                                        </td>
                                        <td class="center"><?php
                                            if($movie['marvel'] == 1){
                                                echo "<label class='label-success'>Yes</label>";
                                            }else{
                                                echo "<label class='label-danger'>No</label>";
                                            }
                                        ?>
                                        </td>
                                        <td class="center"><?php
                                            if($movie['dc'] == 1){
                                                echo "<label class='label-success'>Yes</label>";
                                            }else{
                                                echo "<label class='label-danger'>No</label>";
                                            }
                                        ?>
                                        </td>
                                        

                                        <td class="center" width="20%">
                                            <a href="EditMovies.php?id=<?php echo $movie['id']; ?>" role="btn" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                                            <a href="deletemovie.php?id=<?php echo $movie['id']; ?>" role="btn" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</a>                                        </td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                                
                            </table>
                        </div>
            </div>
        </div>
    </div>
   <?php
     include('headerFooter/footer.php');
   ?>