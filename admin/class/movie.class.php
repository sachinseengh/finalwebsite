<?php

require_once('common.class.php');
require_once('movie.class.php');


class Movies extends Common
{
    public $id, $title,$list,$latest, $bollywood,
        $south,$marvel,$dc, $image, $detail, $cast_1,
        $cast_1_pic,
        $cast_2, $cast_2_pic,$cast_3, $cast_3_pic,$cast_4, $cast_4_pic,$cast_5, $cast_5_pic,$cast_6, $cast_6_pic, $imdb,$genre,$director,$producer,$writer,$budget,$my_opinion,$trailer,$created_date,$updated_on;

    public function save()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'website');
        $sql = "insert into 
               movie(title,list,latest,bollywood,south,marvel,dc,image,detail,cast_1,cast_1_pic,cast_2,cast_2_pic,cast_3,cast_3_pic,cast_4,cast_4_pic,cast_5,cast_5_pic,cast_6,cast_6_pic, 
               imdb,genre,director,producer,writer,budget,released_date,boxoffice_collection,my_opinion,trailer,
created_date) values('$this->title','$this->list',
                '$this->latest','$this->bollywood',
                '$this->south',
                '$this->marvel',
                '$this->dc',
                '$this->image',
                
                '$this->detail',
                '$this->cast_1'
                ,'$this->cast_1_pic', 
                '$this->cast_2'
                ,'$this->cast_2_pic', 
                '$this->cast_3'
                ,'$this->cast_3_pic', 
                '$this->cast_4'
                ,'$this->cast_4_pic', 
                '$this->cast_5'
                ,'$this->cast_5_pic', 
                '$this->cast_6'
                ,'$this->cast_6_pic', 
                '$this->imdb',
                '$this->genre',
                '$this->director',
                '$this->producer',
                '$this->writer',
                '$this->budget',
                '$this->released_date',
                '$this->boxoffice_collection',
                '$this->my_opinion',
                '$this->trailer',
                
                '$this->created_date')";
                

        $conn->query($sql);
        if ($conn->affected_rows == 1 && $conn->insert_id > 0) {
            return $conn->insert_id;
        } else {
            return false;
        }
    }
    public function retrieve()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'website');
        $sql = "select * from movie  where list=1  order by created_date desc";
        $var = $conn->query($sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
    public function edit()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'website');
        $sql = "update movie set title='$this->title',
                                    list='$this->list',
                                    latest='$this->latest',
                                    bollywood='$this->bollywood',
                                    south='$this->south',
                                    marvel='$this->marvel',
                                    dc='$this->dc',
                                    image='$this->image',
                                    background_image='$this->background_image',
                                    detail='$this->detail',
                                    cast_1='$this->cast_1',
                                    cast_1_pic='$this->cast_1_pic',
                                    cast_2='$this->cast_2',
                                    cast_2_pic='$this->cast_2_pic',
                                    cast_3='$this->cast_3',
                                    cast_3_pic='$this->cast_3_pic',
                                    cast_4='$this->cast_4',
                                    cast_4_pic='$this->cast_4_pic',
                                    cast_5='$this->cast_5',
                                    cast_5_pic='$this->cast_5_pic',
                                    cast_6='$this->cast_6',
                                    cast_6_pic='$this->cast_6_pic',
                                    imdb='$this->imdb',
                                    genre='$this->genre', 
                                    director='$this->director', 
                                    producer='$this->producer',
                                     writer='$this->writer', 
                                     budget='$this->budget', 
                                     released_date='$this->released_date',
                                     boxoffice_collection='$this->boxoffice_collection',
                                     my_opinion='$this->my_opinion', trailer='$this->trailer', 
                                    
                                    updated_on='$this->updated_on'
                                    where id='$this->id'";
                                    // print_r($sql);
                                
 $conn->query($sql);
 
if ($conn->affected_rows == 1) {
            return $this->id;
        } else {
            return false;
        }
    }
    public function delete()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'website');
        $sql = "delete from movie where id='$this->id'";
        $var = $conn->query($sql);
        if ($var) {
            return "success";
        } else {
            return "failed";
        }
    }

    public function getById()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'website');
        $sql = "select * from movie where id='$this->id'";
        $var = $conn->query($sql);
        if ($var->num_rows > 0) {
            $data = $var->fetch_object();
            return $data;
        } else {
            return [];
        }
    }

    public function getAllLatest()
    {
        $sql = "select * from movie where latest=1 order by created_date desc limit 4 ";
        return $this->select($sql);
    }
    public function getAllLatestAll()
    {
        $sql = "select * from movie where latest=1 order by created_date desc  ";
        return $this->select($sql);
    }
    

    public function getAllSouth()
    {
        $sql = "select * from movie where south=1 order by created_date desc ";
        return $this->select($sql);
    }
    public function getAllBollywood()
    {
        $sql = "select * from movie where bollywood=1 order by created_date desc ";
        return $this->select($sql);
    }
    public function getAllMarvel()
    {
        $sql = "select * from movie where marvel=1 order by created_date desc ";
        return $this->select($sql);
    }
    public function getAllDc()
    {
        $sql = "select * from movie where dc=1 order by created_date desc ";
        return $this->select($sql);
    }

    




    public function getAllLatestDashboard()
    {
        $sql = "select * from movie where latest=1 order by created_date desc limit 4";
        return $this->select($sql);
    }
    

    public function getAllSouthDashboard()
    {
        $sql = "select * from movie where south=1 order by created_date desc limit 4 ";
        return $this->select($sql);
    }
    public function getAllBollywoodDashboard()
    {
        $sql = "select * from movie where bollywood=1 order by created_date desc limit 4";
        return $this->select($sql);
    }
    public function getAllMarvelDashboard()
    {
        $sql = "select * from movie where marvel=1 order by created_date desc limit 4";
        return $this->select($sql);
    }
    public function getAllDcDashboard()
    {
        $sql = "select * from movie where dc=1 order by created_date desc limit 4";
        return $this->select($sql);
    }
}
