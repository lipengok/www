<?php
namespace Admin\Php\Model;
use Admin\Php\Model\Dbutils;

include 'Dbutils.php';//没使用框架的时候就得使用原始的办法引入外界的php,而不是名字空间。
class StudentSchoolModel{
    private $connection;
    private $student;
    public function __construct()
    {
        $this->student=new Dbutils();
        $this->connection=$this->student->getConnettion();
    }
    /*
     * 测试模型是否能正常获取到基本模型里面的连接数据库的连接对象.
     * 请求：
     * 响应：字符串
     * */
    public function test(){
        var_dump($this->connection);
    }

    /*
     * 插入学生的校园信息
     * 请求：
     * 响应：boolean
     * */
    public function insertAll(){
        $studentName=$_GET['stu_name'];
        $schoolName=$_GET['school_name'];
        $schoolCode=$_GET['school_code'];
        $campaseName=$_GET['campase_name'];
        $groupName=$_GET['group_name'];
        $groupCode=$_GET['group_code'];
        $provenceCode=$_GET['provence_code'];
        $adressCode=$_GET['adress_code'];


        if ($studentName==""||$schoolName==""||$schoolCode==""||$campaseName==""||$groupName==""||$groupCode==""||$provenceCode==""||$adressCode==""){
            echo <<<eof
<script>
alert("请检查您的信息是否完整");
window.location.href="http://koschoolhtml.cn/admin/StudentScinfomation.php";
</script>
eof;
        }

        $studentId=$this->student->selectId($studentName);
        $sql="
        insert into student_school(student_id,school_name,school_code,campas_name,group_name,group_code,provence_code,adress_code)
        values ('$studentId','$schoolName','$schoolCode','$campaseName','$groupName','$groupCode','$provenceCode','$adressCode');
        ";
        try {
            $res=$this->connection->query($sql);
            if ($res>0){
                return truw;
            }else{
                return false;
            }
        }catch (\Exception $exception){
            return false;
        }
    }

    /*
     * 根据用户的姓名查询用户 的但条信息
     * 请求：string
     * 响应：array
     * */
    public function selectOneByName($name){
        $id=$this->student->selectId($name);
        $sql="
        select * from student_school where student_id=$id;
        ";
        $res=$this->connection->query($sql);
        $data=null;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $da['student_id']=$row['student_id'];       //学生的id
                $da['school_name']=$row['school_name'];     //学校的名称
                $da['school_code']=$row['school_code'];     //学校的编号
                $da['group_name']=$row['group_name'];       //小区的名称
                $da['group_code']=$row['group_code'];       //小区的编号
                $da['provence_code']=$row['provence_code']; //省份的编号
                $da['campase_name']=$row['campas_name'];    //分校的名称
                $da['adress_code']=$row['adress_code'];     //学校的编码
                $da['school_img']=$row['school_img'];       //学校的图片
                $data['msg']="查询成功";
                $data['res']=$da;
            }
        }else{
            $data['msg']="查询失败";
            $data['res']=null;
        }
        return $data;
    }

    /*
     * 根据用户的姓名查询用户 的但条信息
     * 请求：string
     * 响应：array
     * */
    public function selectById($id){
        $sql="
        select * from student_school where student_id=$id;
        ";
        $res=$this->connection->query($sql);
        $data=null;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $da['student_id']=$row['student_id'];
                $da['school_name']=$row['school_name'];
                $da['school_code']=$row['school_code'];
                $da['group_name']=$row['group_name'];
                $da['group_code']=$row['group_code'];
                $da['provence_code']=$row['provence_code'];
                $da['campase_name']=$row['campas_name'];
                $da['adress_code']=$row['adress_code'];
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
//$model=new StudentSchoolModel();
//$model->test();
//$model->insertAll();
//var_dump(($model->selectOne("赵云"))['res']);
//var_dump($model->selectById(12));