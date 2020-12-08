<?php
include '../model/StudentRecordModel.php';
use Admin\Php\Model\StudentRecordModel;

$model=new StudentRecordModel();
//$model->test();

$res=$model->insertAll();

if ($res){
    echo <<<eof
<script>
alert("添加成功");
window.location.href="http://koschoolhtml.cn/admin/StudentInfomation.php";
</script>
eof;
}else{
    echo <<<eof
<script>
confirm("添加失败");
window.location.href="http://koschoolhtml.cn/admin/StudentInfomation.php";
</script>
eof;
}