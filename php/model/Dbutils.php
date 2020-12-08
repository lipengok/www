<?php
namespace Php\Model;

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
     * 获取连接的对象
     *
     * */
    public function getConnettion(){
        return $this->connection;
    }
}


//$con=new Dbutils();//获取对象
//$con->test();//测试方法
//var_dump($con->getConnettion());