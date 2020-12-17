<?php
namespace Admin\Php\Model;
include "Dbutils.php";
class Gallery{
    private $con;
    public function __construct()
    {
       $this->con=(new Dbutils())->getConnettion();
    }
    /*
     * 测试连接是否成功
     * */
    public function test(){
        var_dump($this->con);
    }
    /*
     * 获取校园广场表的所有的信息。
     * */
    public function findAll(){
        $sql="
        select * from user_gallery_info;
        ";
        $res=$this->con->query($sql);
        if ($res->num_rows>0){
            return $res;
        }else{
            return null;
        }
    }
    /*
     * 页面管理员发布最新校园广场的信息
     * */
    public function insertOne($title,$classId,$img,$info,$generall,$createTime){
        $sql="
        insert into user_gallery_info(title,class_id,mg,info,generall,create_time) 
        values ('$title',$classId,'$img','$info','$generall','$createTime');
        ";
        $res=$this->con->query($sql);
        if ($res){
            return true;
        }else{
            return false;
        }
    }
    /*
     * 根据id获取确定的一条数据
     * */
    public function findOne($id){
        $slq="
        select * from user_gallery_info where id=$id;
        ";
        $res=$this->con->query($slq);
        if ($res->num_rows>0){
            return $res;
        }else{
            return null;
        }
    }
}
