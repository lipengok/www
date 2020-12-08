<?php
include '../model/Dbutils.php';
use Admin\Php\Model\Dbutils;
$model=new Dbutils();
$input_name=$_POST['name'];
$input_psw=$_POST['psw'];
//开启session
session_start();
$input_code=$_POST['code'];
$input_select=$_POST['select'];


$psw=$model->selectOne($input_name);
$code=$_SESSION['code'];

if ($input_select=="管理员"){
    if ($input_code==""||$input_psw==""||$input_name==""){
        echo <<<eof
<script>
window.location.href="../../index.php";
alert("输入内容不能有空");
</script>
eof;

    }else{
        if ($psw==$input_psw){
            if ($code==$input_code){
                //登陆成功之后，账号信息会默认保存一天
                setcookie('name',$input_name,60*60*24+time());
                setcookie('psw',$psw,60*60*24+time());
                echo <<<eof
<script>
window.location.href="../../StudentIndex.html";
</script>
eof;
            }else{
                echo <<<eof
<script>
window.location.href="../../index.php";
alert("登录失败,验证码错误");
</script>
eof;
            }
        }else{
            echo <<<eof
<script>
window.location.href="../../index.php";
alert("登录失败,密码错误");
</script>
eof;
        }
    }
}else{
    echo <<<eof
<script>
window.location.href="../../index.php";
alert("你只是普通的管理员");
</script>
eof;
}

