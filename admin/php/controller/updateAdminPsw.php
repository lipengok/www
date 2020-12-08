<?php
include '../model/AdminModel.php';
use Admin\Php\Model\AdminModel;

$model=new AdminModel();

//获取用户输入的是哪个参数
$name=$_GET['name'];
$opsw=$_GET['opsw'];
$npsw=$_GET['npsw'];
$npsw2=$_GET['npsw2'];

$checkRes=$model->check($name,$opsw);
if ($name==""||$opsw==""||$npsw==""||$npsw2==""){
    echo <<<eof
<script>
confirm("您有未输入的内容！");
window.location.href="http://koschoolhtml.cn/admin/StudentRevise.php";
</script>
eof;
}

if ($npsw!=$npsw2){
    echo <<<eof
<script>
confirm("您的两次输入的密码不同，请重新输入！");
window.location.href="http://koschoolhtml.cn/admin/StudentRevise.php";
</script>
eof;
}

if ($checkRes){
    $updateRes=$model->updatePsw($name,$npsw);
    if ($updateRes){
        echo <<<eof
<script>
alert("修改成功！");
window.location.href="http://koschoolhtml.cn/admin/StudentRevise.php";
</script>
eof;
    }else{
        echo <<<eof
<script>
confirm("您的密码修改失败！");
window.location.href="http://koschoolhtml.cn/admin/StudentRevise.php";
</script>
eof;
    }
}else{
    echo <<<eof
<script>
confirm("您的密码账号不匹配请重新输入！");
window.location.href="http://koschoolhtml.cn/admin/StudentRevise.php";
</script>
eof;
}

