<?php
namespace Admin\Php\Model;
use Admin\Php\Model\Dbutils;
include 'Dbutils.php';
class AdminModel{
    private $connection;
    private $student;
    public function __construct()
    {
        $this->student=new Dbutils();
        $this->connection=$this->student->getConnettion();
    }

    /*
     *
     * */
    public function test(){
        var_dump($this->connection);
    }

    /*
     *
     * */
    public function updatePsw($name,$psw){
        $sql="
        update admin set psw='$psw' where name ='$name';
        ";
        $res=$this->connection->query($sql);
        return $res;
    }

    /*
     * 判断用户的输入的用户名和密码是否匹配
     * 请求：string ,string
     * 响应：boolean
     * */
    public function check($name,$psw){
        $sql="
        select psw from admin where name ='$name';
        ";
        $res=$this->connection->query($sql);
        $gpsw=null;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $gpsw=$row['psw'];
            }
        }
        if ($psw==$gpsw){
            return true;
        }else{
            return false;
        }

    }
}
//$model=new AdminModel();
//$model->test();

