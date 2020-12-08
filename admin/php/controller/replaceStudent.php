<?php
include '../model/Dbutils.php';
$model=new \Admin\Php\Model\Dbutils();
$id=$_GET['id'];
$res=$model->replacePsw($id);
if ($res){
    echo <<<eof
<script>
alert("重置密码成功！");
window.location.href="http://koschoolhtml.cn/admin/StudentSearch.php?search=&page=1";
</script>
eof;
}else{
    echo <<<eof
<script>
alert("重置密码失败！");
window.location.href="http://koschoolhtml.cn/admin/StudentSearch.php?search=&page=1";
</script>
eof;
}