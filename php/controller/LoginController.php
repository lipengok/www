<?php
include '../model/Student.php';

$model=new \Php\Model\Student();
$name=$_GET['name'];
$input_psw=$_GET['psw'];
if ($name==""||$input_psw==""){
    echo <<<eof
<script>
alert("输入内容不能有空！");
window.location.href="/login.php";
</script>
eof;
}

$real_psw=$model->getPsw($name);
if ($input_psw==$real_psw){
    setcookie('username',$name,3600*24+time(),'/');
    setcookie('psw',$input_psw,3600*24+time(),'/');
    echo <<<eof
<script>
alert("登录成功");
window.location.href="/gallery.php";
</script>
eof;
}else{
    echo <<<eof
<script>
alert("登录失败！");
window.location.href="/login.php";
</script>
eof;
}


