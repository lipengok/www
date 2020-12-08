<?php
include '../model/StudentSchoolModel.php';
use Admin\Php\Model\StudentSchoolModel;

$model=new StudentSchoolModel();
$res=$model->insertAll();

if ($res){
    echo <<<eof
<script>
alert("添加成功");
window.location.href="http://koschoolhtml.cn/admin/StudentScinfomation.php";
</script>
eof;
}else{
    echo <<<eof
<script>
confirm("添加失败,请检查您的信息是否属实！");
window.location.href="http://koschoolhtml.cn/admin/StudentScinfomation.php";
</script>
eof;
}