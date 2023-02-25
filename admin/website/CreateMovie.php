<?php
 include('headerFooter/header.php');
include('../class/common.class.php');
 include('../class/movie.class.php');

 $movies = new Movies();


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

    $movies->set('created_date', date('Y-m-d H:i:s'));

    // print_r($movies);   
    $result = $movies->save();   
    if(is_integer($result)){
        $ErrMs= "";
        $msg = "Movie inserted Successfully with id ".$result;
    }else{
        $msg = ""; 
    }
 }
 include('sideBar.php');

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Review</h1>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-8" style="padding-left:50px">
                    <?php  if(isset($msg)) { ?>
                    <div class="alert alert-success"><?php echo $msg;  ?></div>
                    <?php  } ?>
                    <?php  if(isset($ErrMsg)) { ?>
                    <div class="alert alert-danger"><?php echo $ErrMsg;  ?></div>
                    <?php  } ?>
                    <form role="form" id="submitForm" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label>list</label>
                            <input type="text" class="form-control" name="list" id="list" required value="1">
                        </div>
                        <div class="form-group">
                            <label>Latest</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="latest" id="optionslatest1" value="1" checked>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="latest" id="optionslatest" value="0">No
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bollywood</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="bollywood" id="optionsbollywood1" value="1" checked>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="bollywood" id="optionsbollywood" value="0">No
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>south</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="south" id="optionssouth1" value="1" checked>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="south" id="optionssouth2" value="0">No
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Marvel</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="marvel" id="optionsmarvel1" value="1" checked>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="marvel" id="optionsmarvel" value="0">No
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Dc</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="dc" id="optionsdc1" value="1" checked>Yes
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="dc" id="optionsdc" value="0">No
                                </label>
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label>Image</label>
                            <input type="text" class="form-control" name="image" id="image" required>
                        </div>
                        <div class="form-group">
                            <label>Background_image</label>
                            <input type="text" class="form-control" name="background_image" id="background_image" required>
                        </div>
                      
                        
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea class="form-control ckeditor" rows="3" name="detail" required ></textarea>
                        </div>

                        <div class="form-group">
                            <label>Cast_1_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_1" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_1_Image</label>
                            <input type="text" class="form-control" name="cast_1_pic"  required>
                        </div>
                        
                        <div class="form-group">
                            <label>Cast_2_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_2" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_2_Image</label>
                            <input type="text" class="form-control" name="cast_2_pic"  required>
                        </div>


                        
                        <div class="form-group">
                            <label>Cast_3_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_3" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_3_Image</label>
                            <input type="text" class="form-control" name="cast_3_pic"  required>
                        </div>
                        
                        <div class="form-group">
                            <label>Cast_4_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_4" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_4_Image</label>
                            <input type="text" class="form-control" name="cast_4_pic"  required>
                        </div>
                        <div class="form-group">
                            <label>Cast_5_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_5" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_5_Image</label>
                            <input type="text" class="form-control" name="cast_5_pic"  required>
                        </div>
                        <div class="form-group">
                            <label>Cast_6_name</label>
                            <textarea class="form-control ckeditor" rows="3" name="cast_6" required ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Cast_6_Image</label>
                            <input type="text" class="form-control" name="cast_6_pic"  required>
                        </div>
                       
                        <div class="form-group">
                            <label>imdb</label>
                            <input type="text" class="form-control" name="imdb" id="imdb" required>
                        </div>
                        <div class="form-group">
                            <label>genre</label>
                            <input type="text" class="form-control" name="genre" id="genre" required>
                        </div>
                        <div class="form-group">
                            <label>director</label>
                            <input type="text" class="form-control" name="director" id="director" required>
                        </div>
                        <div class="form-group">
                            <label>producer</label>
                            <input type="text" class="form-control" name="producer" id="producer" required>
                        </div>
                        <div class="form-group">
                            <label>writer</label>
                            <input type="text" class="form-control" name="writer" id="writer" required>
                        </div>

                        <div class="form-group">
                            <label>budget</label>
                            <input type="text" class="form-control" name="budget" id="budget" required>
                        </div>
                        <div class="form-group">
                            <label>Released_date</label>
                            <input type="text" class="form-control" name="released_date" id="released_date" required>
                        </div>
                        <div class="form-group">
                            <label>Boxoffice_collection</label>
                            <input type="text" class="form-control" name="boxoffice_collection" id="boxoffice_collection" required>
                        </div>

                        <div class="form-group">
                            <label>my_opinion</label>
                            <textarea class="form-control ckeditor" rows="3" name="my_opinion" required ></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>famous_review_1</label>
                            <input type="text" class="form-control" name="famous_review_1"  required>
                        </div>

                        <div class="form-group">
                            <label>famous_review_2</label>
                            <input type="text" class="form-control" name="famous_review_2"  required>
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

   