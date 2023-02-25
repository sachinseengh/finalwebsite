<?php
 include('headerFooter/header.php');
 
 include('../class/movie.class.php');



 $movies = new Movies();
 $movies->set('id', $_GET['id']);
 $retrieveData = $movies->getById();

 @session_start();
 if(isset($_POST['submit'])){
    $movies->set('title', $_POST['title']);
    $movies->set('list', $_POST['list']);
    $movies->set('latest', $_POST['latest']);
    
    $movies->set('bollywood', $_POST['bollywood']);
    $movies->set('south', $_POST['south']);
    $movies->set('marvel',$_POST['marvel']);
    $movies->set('dc',$_POST['dc']);
    $movies->set('image', $_POST['image']);
    $movies->set('background_image', $_POST['background_image']);
    $movies->set('detail', $_POST['detail']);
    $movies->set('cast_1', $_POST['cast_1']);
    $movies->set('cast_1_pic',$_POST['cast_1_pic']);
    $movies->set('cast_2', $_POST['cast_2']);
    $movies->set('cast_2_pic',$_POST['cast_2_pic']);
    $movies->set('cast_3', $_POST['cast_3']);
    $movies->set('cast_3_pic',$_POST['cast_3_pic']);
    $movies->set('cast_4', $_POST['cast_4']);
    $movies->set('cast_4_pic',$_POST['cast_4_pic']);
    $movies->set('cast_5', $_POST['cast_5']);
    $movies->set('cast_5_pic',$_POST['cast_5_pic']);
    $movies->set('cast_6', $_POST['cast_6']);
    $movies->set('cast_6_pic',$_POST['cast_6_pic']);
    $movies->set('imdb',$_POST['imdb']);
    $movies->set('genre',$_POST['genre']);
    $movies->set('director',$_POST['director']);
    $movies->set('producer',$_POST['producer']);
    $movies->set('writer',$_POST['writer']);
    $movies->set('budget',$_POST['budget']);
    $movies->set('released_date',$_POST['released_date']);
    $movies->set('boxoffice_collection',$_POST['boxoffice_collection']);
    $movies->set('my_opinion',$_POST['my_opinion']);
    $movies->set('famous_review_1',$_POST['famous_review_1']);
    $movies->set('famous_review_2',$_POST['famous_review_2']);
    $movies->set('updated_on', date('Y-m-d '));


    $result = $movies->edit();   
    if($result){
        $ErrMs= "";
        $movies->set('id', $_GET['id']);
        $retrieveData = $movies->getById();
        $msg = "Movies updated Successfully with id ".$result;
    }else{
        $msg = ""; 
    }
 }
 include('sideBar.php');

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Movie</h1>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-6">
                    <?php  if(isset($msg)) { ?>
                    <div class="alert alert-success"><?php echo $msg;  ?></div>
                    <?php  } ?>
                    <?php  if(isset($ErrMsg)) { ?>
                    <div class="alert alert-danger"><?php echo $ErrMsg;  ?></div>
                    <?php  } ?>


                    <form role="form" id="submitForm" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" required     value=<?php  echo $retrieveData->title; ?>>
                        </div>
                        <div class="form-group">
                            <label>list</label>
                            <input type="text" class="form-control" name="list" id="list" required     value=<?php  echo $retrieveData->list; ?>>
                        </div>
                        <div class="form-group">
                            <label>Latest</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="latest" id="optionslatest1" value="1" <?php if($retrieveData->latest == 1) { echo "checked"; }  ?>>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="latest" id="optionsRadios2" value="0" <?php if($retrieveData->latest != 1) { echo "checked"; }  ?>>No
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Bollywood</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="bollywood" id="optionsbollywood1" value="1" <?php if($retrieveData->bollywood == 1) { echo "checked"; }  ?>>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="bollywood" id="optionsbollywood2" value="0" <?php if($retrieveData->bollywood != 1) { echo "checked"; }  ?>>No
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>South</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="south" id="optionslatest1" value="1" <?php if($retrieveData->south == 1) { echo "checked"; }  ?>>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="south" id="optionsRadios2" value="0" <?php if($retrieveData->south != 1) { echo "checked"; }  ?>>No
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Marvel</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="marvel" id="optionsmarvel1" value="1" <?php if($retrieveData->marvel == 1) { echo "checked"; }  ?>>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="marvel" id="optionsmarvel2" value="0" <?php if($retrieveData->marvel != 1) { echo "checked"; }  ?>>No
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Dc</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="dc" id="optionsdc1" value="1" <?php if($retrieveData->dc == 1) { echo "checked"; }  ?>>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="dc" id="optionsdc" value="0" <?php if($retrieveData->dc != 1) { echo "checked"; }  ?>>No
                                </label>
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" class="form-control" name="image" id="image" required  
                            value=<?php  echo $retrieveData->image; ?>>
                        </div>
                        <div class="form-group">
                            <label>Background_image</label>
                            <input type="text" class="form-control" name="background_image" id="background_image" required   value=<?php  echo $retrieveData->background_image; ?>>
                        </div>
                      
                        
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea class="form-control ckeditor" rows="3" name="detail" required >
                                <?php echo $retrieveData->detail; ?>
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Cast_1_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_1" required >
                            <?php echo $retrieveData->cast_1; ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_1_Image</label>
                            <input type="text" class="form-control" name="cast_1_pic"  required value="  <?php echo $retrieveData->cast_1_pic; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Cast_2_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_2" required ><?php echo $retrieveData->cast_2; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_2_Image</label>
                            <input type="text" class="form-control" name="cast_2_pic"  required
                            value="  <?php echo $retrieveData->cast_2_pic; ?>">
                        </div>


                        
                        <div class="form-group">
                            <label>Cast_3_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_3" required ><?php echo $retrieveData->cast_3; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_3_Image</label>
                            <input type="text" class="form-control" name="cast_3_pic"  required
                            value="  <?php echo $retrieveData->cast_3_pic; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label>Cast_4_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_4" required ><?php echo $retrieveData->cast_4; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_4_Image</label>
                            <input type="text" class="form-control" name="cast_4_pic"  required
                            value="  <?php echo $retrieveData->cast_4_pic; ?>">
                        </div>
                        <div class="form-group">
                            <label>Cast_5_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_5" required ><?php echo $retrieveData->cast_5; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_5_Image</label>
                            <input type="text" class="form-control" name="cast_5_pic"  required
                            value="  <?php echo $retrieveData->cast_5_pic; ?>">
                        </div>
                        <div class="form-group">
                            <label>Cast_6_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_6" required ><?php echo $retrieveData->cast_6; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_6_Image</label>
                            <input type="text" class="form-control" name="cast_6_pic"  required
                            value="  <?php echo $retrieveData->cast_6_pic; ?>">
                        </div>
                       
                        <div class="form-group">
                            <label>imdb</label>
                            <input type="text" class="form-control" name="imdb" id="imdb" required value="<?php echo $retrieveData->imdb; ?>">
                        </div>
                        <div class="form-group">
                            <label>genre</label>
                            <input type="text" class="form-control" name="genre" id="genre" required value="<?php echo $retrieveData->genre; ?>">
                        </div>
                        <div class="form-group">
                            <label>director</label>
                            <input type="text" class="form-control" name="director" id="director" required value="<?php echo $retrieveData->director; ?>">
                        </div>
                        <div class="form-group">
                            <label>producer</label>
                            <input type="text" class="form-control" name="producer" id="producer" required value="<?php echo $retrieveData->producer; ?>">
                        </div>
                        <div class="form-group">
                            <label>writer</label>
                            <input type="text" class="form-control" name="writer" id="writer" required value="<?php echo $retrieveData->writer; ?>">
                        </div>

                        <div class="form-group">
                            <label>budget</label>
                            <input type="text" class="form-control" name="budget" id="budget" required value="<?php echo $retrieveData->budget; ?>">
                        </div>
                        <div class="form-group">
                            <label>Released_date</label>
                            <input type="text" class="form-control" name="released_date" id="released_date" required value="<?php echo $retrieveData->released_date; ?>">
                        </div>
                        <div class="form-group">
                            <label>Boxoffice_collection</label>
                            <input type="text" class="form-control" name="boxoffice_collection" id="boxoffice_collection" required value="<?php echo $retrieveData->boxoffice_collection; ?>">
                        </div>

                        <div class="form-group">
                            <label>my_opinion</label>
                            <textarea class="form-control ckeditor" rows="3" name="my_opinion" required ><?php echo $retrieveData->my_opinion; ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>famous_review_1</label>
                            <input type="text" class="form-control" name="famous_review_1"  required value="<?php echo $retrieveData->famous_review_1; ?>">
                        </div>

                        <div class="form-group">
                            <label>famous_review_2</label>
                            <input type="text" class="form-control" name="famous_review_2"  required value="<?php echo $retrieveData->famous_review_2; ?>">
                        </div>
                       

                        <button type="submit" name="submit" value='submit' class="btn btn-success">Submit Button</button>
                        <button type="reset" class="btn btn-danger">Reset Button</button>
</form>





                 </div>
            </div>
        </div>
    </div>
   <?php
     include('headerFooter/footer.php');
   ?>
   <script src="../js/ckeditor/ckeditor.js"></script>  

   <script>
    $(document).ready(function(){
       $('#name').keyup(function(){
          const value = $("#name").val();
          $.ajax({
            url:"checkCategoryName.php",
            method:"post",
            dataType:"text",
            data:{'categoryName':value},
            success:function(res){
                if(res != "success"){
                    $("#categoryError").text(res);
                    $("#CategoryEntry").val("");
                }else{
                    $("#categoryError").text("");
                    $("#CategoryEntry").val("success");

                }
            }
          })
       })
    })
   </script>
