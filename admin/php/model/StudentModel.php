<?php
namespace Admin\Php\Model;
include 'Dbutils.php';
class StudentModel{
    private $connection;
    public function __construct()
    {
        $this->connection=(new Dbutils())->getConnettion();
    }

    /*
     * 查找学生的所有的信息分页5
     * 请求：
     * 响应：
     * */
    public function selectAll($name,$num,$start){

        $sql="
        select * from student where name like '%$name%' or num='$num' limit $start,10;
        ";
        $res=$this->connection->query($sql);
        if ($res>0){
            return $res;
        }else{
            return null;
        }
    }

    /*
     * 查找模糊查询的记录数
     * 请求：
     * 响应：int
     * */
    public function getCount($name,$num){

        $sql="
        select count(id) as ct from student where name like '%$name%' or num='$num';
        ";
        $res=$this->connection->query($sql);
        $count=0;
        if ($res>0){
            while ($row=$res->fetch_assoc()){
                $count=$row['ct'];
            }
        }
        return $count;
    }
}

//$model=new StudentModel();
//print_r($model->selectAll('李','',0));
//echo $model->getCount('李','');