<?php
namespace Php\Model;
include 'Dbutils.php';
class Student{
    private $connection;
    public function __construct()
    {
        $this->connection=(new Dbutils())->getConnettion();
    }

    /*
     * 测试是否能正常的获取到连接对象。
     * */
    public function test(){
        var_dump($this->connection);
    }

    /*
     * 根据用户名获取psw
     * 请求：string
     * 响应：string
     * */
    public function getPsw($name){
        $sql="
        select psw from student where name ='$name';
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
     * 插入数据
     * 请求：array
     * 响应：boolean
     * */
    public function insertAll($data){
        $name=$data['name'];
        $psw=$data['psw'];
        $num=$data['num'];
        $school=$data['school'];
        $sql="
        insert into student(name,psw,num,school)
        values ('$name','$psw','$num','$school');
        ";
        $res=$this->connection->query($sql);
        if ($res){
            return true;
        }else{
            return false;
        }
    }
}
//$model=new Student();
//$model->test();
//echo $model->getPsw("张三");
/*$data=array(
    'name'=>'溥仪',
    'psw'=>'888888888',
    'num'=>'17355249001',
    'school'=>'北京大学'
);*/
/*for ($i=0;$i<1000;$i++){
    $model->insertAll($data);
}*/


