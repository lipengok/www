<?php
include '../model/StudentUpstudyModel.php';
use Admin\Php\Model\StudentUpstudyModel;

$model=new StudentUpstudyModel();

//插入
$res=$model->insertAll();

if ($res){
    echo <<<eof
<script>
alert("添加成功");
window.location.href="http://koschoolhtml.cn/admin/StudentPubMed.php";
</script>
eof;
}else{
    echo <<<eof
<script>
confirm("添加失败");
window.location.href="http://koschoolhtml.cn/admin/StudentPubMed.php";
</script>
eof;
}



