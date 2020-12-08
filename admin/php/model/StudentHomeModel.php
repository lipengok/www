<?php
namespace Admin\Php\Model;
use Admin\Php\Model\Dbutils;
include 'Dbutils.php';
class StudentHomeModel{
    //获取连接，从基础的模型里面获取连接对象
    private $connection;
    private $student;
    public function __construct()
    {
        $this->student=new Dbutils();
        $this->connection=$this->student->getConnettion();
    }

    public function test(){
        var_dump($this->connection);
    }
    public function getStudent(){
        return $this->student;
    }

    /*
    * 插入学生的家庭信息，学生表的外键是rector_id，家庭表的主键是id
    * 请求：
    * 响应：
    * */
    public function insertAll(){
        $name=$_GET['name'];
        $relate=$_GET['relate'];
        $postalCode=$_GET['postal_code'];
        $adressCode=$_GET['adress_code'];
        $policeAdress=$_GET['police_adress'];
        $homeAdress=$_GET['home_adress'];
        $povertyLeavel=$_GET['poverty_leavel'];
        $Phone=$_GET['phone'];
        $studentName=$_GET['student_name'];

        $id=$this->student->selectId($studentName);
        if ($studentName==""||$name==""||$relate==""||$postalCode==""||$adressCode==""||$policeAdress==""||$homeAdress==""||$povertyLeavel==""||$Phone==""){
            echo <<<eof
<script>
alert("你有未填写的信息");
window.location.href="http://koschoolhtml.cn/admin/FamilyInformation.php";
</script>
eof;
        }

        $sql="
        insert into student_home(student_id,name,relate,postal_code,adress_code,police_adress,home_adress,poverty_leavel,phone)
        values ('$id','$name','$relate','$postalCode', '$adressCode','$policeAdress','$homeAdress', '$povertyLeavel','$Phone');
        ";

        $res=$this->connection->query($sql);
        if ($res>0){
            return true;
        }else{
            return false;
        }
    }

    /*
     * 根据用户的名称查找用户的所有的信息
     * 请求：学生的名字
     * 响应：array数组
     * */
    public function selectByName($name){
        $id=$this->student->selectId($name);
        $sql="
        select * from student_home where student_id=$id;
        ";
        $res=$this->connection->query($sql);
        $data=null;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $da['student_id']=$row['student_id'];       //学生的id
                $da['name']=$row['name'];                   //家长的名字
                $da['relate']=$row['relate'];               //家长的关系
                $da['postal_code']=$row['postal_code'];     //邮政编号
                $da['adress_code']=$row['adress_code'];     //地址编号
                $da['police_adress']=$row['police_adress']; //当地的派出所的地址
                $da['home_adress']=$row['home_adress'];     //家庭的地址
                $da['poverty_leavel']=$row['poverty_leavel'];//家庭的贫困等级
                $da['phone']=$row['phone'];                 //家庭的紧急联系方式
                $da['img']=$row['img'];                     //家庭的生活照片

                $data['msg']="查询成功";
                $data['res']=$da;
            }
        }else{
            $data['msg']="查询失败";
            $data['res']=null;
        }
        return $data;
    }
}

//$model=new StudentHomeModel();
//$model->test();
//echo $model->getStudent()->selectId("刘禅");