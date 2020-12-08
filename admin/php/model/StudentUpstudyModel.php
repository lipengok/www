<?php
namespace Admin\Php\Model;
use Admin\Php\Model\Dbutils;
include 'Dbutils.php';
class StudentUpstudyModel{
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
     * 插入数据
     * 请求：
     * 响应：
     * */
    public function insertAll(){
        $studentName=$_GET["student_name"];
        $subject=$_GET[ "subject"];
        $schoolName=$_GET["school_name"];
        $studentNum=$_GET["stuent_num"];
        $stuentCode=$_GET["school_code"];
        $oldAdress=$_GET["old_adress"];
        $docPerson=$_GET["doc_person"];
        $phone=$_GET["phone"];
        $isAllday=$_GET["is_allday"];
        $isFree=$_GET["is_free"];
        $workUnit=$_GET["work_unit"];
        $newAdress=$_GET["new_adress"];

        $studentId=$this->student->selectId($studentName);

        if ($studentName==""||$subject==""||$schoolName==""||$stuentCode==""||$oldAdress==""||$docPerson==""||$phone==""||$isAllday==""||$isFree==""||$workUnit==""||$newAdress==""){
            echo <<<eof
<script>
alert("有未填写的部分");
window.location.href="http://koschoolhtml.cn/admin/StudentPubMed.php";
</script>
eof;
        }

        $sql="
        insert into student_upstudy(student_id,subject,school_name,stuent_num,school_code,old_adress,doc_person,phone,is_allday,is_free,work_unit,new_adress)
        values ($studentId,'$subject','$schoolName','$studentNum','$stuentCode','$oldAdress','$docPerson','$phone','$isAllday','$isFree','$workUnit','$newAdress');
        ";

        $res=$this->connection->query($sql);

        if ($res>0){
            return true;
        }else{
            return false;
        }
    }

    /*
     * 获取考研的所有的信息
     * 请求：string
     * 响应：array
     * */
    public function selectByName($name){
        $id=$this->student->selectId($name);
        $sql="
        select * from student_upstudy where student_id=$id;
        ";
        $res=$this->connection->query($sql);
        $data=null;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $da['student_id']=$row['student_id'];       //学生的id
                $da['subject']=$row['subject'];             //对口的专业
                $da['school_name']=$row['school_name'];     //学校的名称
                $da['stuent_num']=$row['stuent_num'];       //学生的学号
                $da['school_code']=$row['school_code'];     //学校的邮政编号
                $da['old_adress']=$row['old_adress'];       //毕业学校的地址
                $da['doc_person']=$row['doc_person'];       //文档的接收人
                $da['phone']=$row['phone'];                 //文档接收人的手机号
                $da['is_free']=$row['is_free'];             //是否是免推
                $da['work_unit']=$row['work_unit'];         //办理单位的名称
                $da['new_adress']=$row['new_adress'];       //录取学校的地址
                $da['is_allday']=$row['is_allday'];         //是否全日制
                $da['school_img']=$row['school_img'];       //录取学校的图片
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

//$model=new StudentUpstudyModel();
//$model->test();
//$model->insertAll();










