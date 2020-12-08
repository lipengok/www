<?php
namespace Admin\Php\Model;

class Dbutils{
    private $connection;
    public function __construct()
    {
        $this->connection=new \mysqli('localhost','root','131421','netschool');
    }
    public function test(){
        var_dump($this->connection);
    }
    /*
     * 实现超级管理员的密码查询
     * 请求：string $name
     * 响应：string $psw
     * */
    public function selectOne($name){
        $sql="
        select psw from admin where name='$name';
        ";
        $res=$this->connection->query($sql);
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                return $row['psw'];
            }
        }else{
            return null;
        }
    }

    /*
     * 查找用户的所有的信息
     * 请求：
     * 响应：二维数，(索引数组里面嵌套关联数组)
     * */
    public function selectAll($row){
        $sql="
        select * from student order by id asc limit $row,10;
        ";
        $res=$this->connection->query($sql);
        $flag=0;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $student['id']=$row['id'];
                $student['name']=$row['name'];
                $student['psw']=$row['psw'];
                $student['school']=$row['school'];
                $students[$flag]=$student;
                $flag++;
            }
            return $students;
        }else{
            return null;
        }
    }

    /*
     * 获取student表里面的所有的记录数
     * 请求：
     * 响应：int $count
     * */
    public function getCount(){
        $sql="
        select count(id) as c from student;
        ";
        $res=$this->connection->query($sql);
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $count=$row['c'];
            }
            return $count;
        }else{
            return null;
        }
    }

    /*
     * 根据用户的名字获取用户的id
     * 请求：名字
     * 响应：id
     * */
    public function selectId($name){
        $sql="
            select id from student where name='$name'
        ";
        $res=$this->connection->query($sql);
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $id=$row['id'];
            }
            return $id;
        }else{
            return null;
        }
    }
    /*
     * 获取连接的对象
     *
     * */
    public function getConnettion(){
        return $this->connection;
    }
    /*
     * 删除一个用户
     * 请求：int
     * 响应：boolean
     * */
    public function deleteOne($id){
        $sql="
        delete from student where id='$id'
        ";
        $res=$this->connection->query($sql);
        if ($res==1){
            return true;
        }else{
            return false;
        }
    }

}


//$con=new Dbutils();//获取对象
//$con->test();//测试方法
//$con->selectOne(jack);//根据名字查询密码方法
//var_dump($con->selectAll(0));//查询student的所有的喜逆袭的方法
//echo $con->getCount();
//echo $con->selectId("刘禅");
//var_dump($con->getConnettion());