<?php
include '../model/Dbutils.php';
$model=new \Admin\Php\Model\Dbutils();
$id=$_GET['id'];
$res=$model->deleteOne($id);
if ($res){
    echo <<<eof
<script>
alert("删除成功！");
window.location.href="http://koschoolhtml.cn/admin/StudentSearch.php?search=&page=1";
</script>
eof;
}else{
    echo <<<eof
<script>
alert("删除失败！");
window.location.href="http://koschoolhtml.cn/admin/StudentSearch.php?search=&page=1";
</script>
eof;
}