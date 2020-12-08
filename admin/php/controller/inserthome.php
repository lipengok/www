<?php
include '../model/StudentHomeModel.php';
use Admin\Php\Model\StudentHomeModel;

$model=new StudentHomeModel();
$res=$model->insertAll();

if ($res){
    echo <<<eof
<script>
alert("添加成功");
window.location.href="http://koschoolhtml.cn/admin/FamilyInformation.php";
</script>
eof;
}else{
    echo <<<eof
<script>
confirm("添加失败,请检查您的信息是否属实！$res");
window.location.href="http://koschoolhtml.cn/admin/FamilyInformation.php";
</script>
eof;
}