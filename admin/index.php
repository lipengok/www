<?php
session_start();
if (isset($_SESSION['code'])){
    //如果session里面有数据，就先清除里面的数据然后进行重新赋值。
    session_destroy();
}
$code=rand(0,9).' '.rand(0,9).' '.rand(0,9).' '.rand(0,9);
//将随机生成的验证码放到session里面存储
session_start();
$_SESSION['code']=str_replace(' ','',$code);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
        .p_psw{
            text-align: center;
            margin-top: 10px;
        }
        .a_psw{
            font-weight: bolder;
            font-size: 14px;
            color: black;
        }
        .login_sub{
            background: #0e8384;
        }
        .em_code{
            font-size: 25px;
            font-family: 細明體_HKSCS-ExtB;
            font-weight: bolder;
            text-align: center;
            background: lightseagreen;
            color: blue;
        }
    </style>
</head>
<body>
<div class="login">
    <div class="content clearfix">
        <div class="content-left">
            <div class="logo">
                <img src="images/logo.png" alt=""/>
                <p>蚌埠学院学生信息管理系统</p>
            </div>
        </div>
        <div class="shu"></div>
        <div class="content-right">
            <div class="login-form">
                <h2>用户登录/LOGIN</h2>
                <form action="php/controller/login.php" method="post">
                    <div class="identifire">
                        <span>身　份：</span>
                        <select name="select">
                            <option value="管理员" selected="selected">管理员</option>
                            <option value="超级管理员">超级管理员</option>
                        </select>
                    </div>
                    <div class="account clearfix">
                        <span>账　号：</span>
                        <input type="text" value="<?php echo $_COOKIE['name']?>" name="name" placeholder="请输入账号"/>
                    </div>
                    <div class="password clearfix">
                        <span>密　码：</span>
                        <input type="password" value="<?echo $_COOKIE['psw']?>" name="psw"placeholder="请输入密码"/>
                    </div>
                    <div class="code clearfix">
                        <span>验证码：</span>
                        <input type="text" value=""  name="code"/>
                        <em class="em_code">
                            <?=$code?>
                        </em>
                    </div>
                    <div class="btn">
                        <span id="login">
                            <input class="login_sub" type="submit" value="登录">
                        </span>
                    </div>
                    <p class="p_psw btn">
                        <a href="password.html" class="a_psw">忘记密码?</a>
                        &nbsp;&nbsp;
                        <a href="../index.html" class="a_psw">返回用户界面?</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#login').on('click','a',function(){
            var aVal = $('.identifire select');
            if (aVal.val() == '学生') {
                $(this).attr('href','StudentIndex.html');
            } else if (aVal.val() == '教师教辅人员'){
                $(this).attr('href','TeacherIndex.html');
            }
        });
    });


</script>
<!--<script type="text/javascript">
    $(document).ready(function(){
        if (window.PIE) {
            $('.rounded').each(function() {
                PIE.attach(this);
            });
        }
    });
</script>-->
</body>
</html>
