<?php
namespace Php\Model;
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
    public function insertOne($info,$classId){
        $sql="
        insert into user_gallery_info(info,class_id) 
        values ('$info','$classId');
        ";
        $res=$this->con->query($sql);
        if ($res){
            return true;
        }else{
            return false;
        }
    }
}
