<?php
namespace Admin\Php\Model;
include 'Dbutils.php';
class StudentRecordModel{
    private $student;
    private $connection;
    public function __construct()
    {
        $this->student=new Dbutils();
        $this->connection=$this->student->getConnettion();
    }

    /*
     * 测试数据库是否连接成功
     * 请求：
     * 响应：
     * */
    public function test(){
        var_dump($this->connection);
    }

    /*
     * 插入所有的数据，插入一条记录到表student_record表里面
     * 请求：
     * 响应：boolean
     * */
    public function insertAll(){
        $studentName=$_GET['student_name'];
        $agencyType=$_GET['agency_type'];
        $haveCollection=$_GET['have_collection'];
        $agencyLogo=$_GET['agency_loge'];
        $docLogo=$_GET['doc_logo'];
        $docName=$_GET['doc_name'];

        $studentId=$this->student->selectId($studentName);

        //echo $studentId.$agencyType.$haveCollection.$agencyLogo.$docLogo.$docName;die();

        if ($studentId==""||$agencyType==""||$haveCollection==""||$agencyLogo==""||$docLogo==""||$docName==""){
            echo <<<eof
<script>
confirm("不能有空白");
window.location.href="http://koschoolhtml.cn/admin/StudentInfomation.php";
</script>
eof;
        }
        $sql="
        insert into student_record(student_id,agency_type,hava_collection,agency_logo,doc_logo,doc_name)
        values ($studentId,'$agencyType','$haveCollection','$agencyLogo','$docLogo','$docName');
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
        select * from student_record where student_id=$id;
        ";
        $res=$this->connection->query($sql);
        $data=null;
        if ($res->num_rows>0){
            while ($row=$res->fetch_assoc()){
                $da['student_id']=$row['student_id'];                    //学生的id
                $da['agency_type']=$row['agency_type'];                  //档案的类型
                $da['hava_collection']=$row['hava_collection'];          //是否有组织
                $da['doc_logo']=$row['doc_logo'];                        //文档的标志
                $da['doc_name']=$row['doc_name'];                        //文档的名称
                $da['agency_logo']=$row['agency_logo'];                  //代理标志
                $da['img']=$row['img'];                                  //证件照片

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
//$model=new StudentRecordModel();
//$model->test();
//$model->insertAll();

