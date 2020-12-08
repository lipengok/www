<?php
include '../model/Student.php';

$model=new \Php\Model\Student();
session_start();
$check_psw=$_GET['check_psw'];
$check_code=$_SESSION['usercode'];
$name=$_GET['name'];
$psw=$_GET['psw'];
$num=$_GET['num'];
$school=$_GET['school'];
$code=$_GET['code'];

if ($check_psw==""||$name==""||$psw==""||$num==""||$school==""||$code==""){
    echo <<<eof
<script>
alert("输入内容不能有空！");
window.location.href="/login.php";
</script>
eof;
}else{
    if ($check_psw!=$psw){
        echo <<<eof
<script>
alert("两次密码不相同！");
window.location.href="/login.php";
</script>
eof;
    }else{
        if ($check_code!=$code){
            echo <<<eof
<script>
alert("验证码不正确!");
window.location.href="/login.php";
</script>
eof;
        }else{

            $data=array(
                'name'=>$name,
                'psw'=>$psw,
                'num'=>$num,
                'school'=>$school
            );
            $res=$model->insertAll($data);
            if ($res){
                echo <<<eof
<script>
alert("注册成功！");
window.location.href="/login.php";
</script>
eof;
            }else{
                echo <<<eof
<script>
alert("注册失败！");
window.location.href="/login.php";
</script>
eof;
            }
        }
    }
}


