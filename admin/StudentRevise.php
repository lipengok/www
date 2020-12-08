<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/StudentRevise.css">
</head>
<body>
<div class="container information-content">
    <form action="php/controller/updateAdminPsw.php" method="get">
        <div class="content">
            <div class="information-title">
                <span>当前位置>修改密码</span>
            </div>
            <div class="revise-content clearfix ">
                <div class="list fr"><label for="name">名字</label> :
                    <input placeholder="管理员名字" type="text" value="" name="name" id="name"/>
                </div>
                <div class="list fr"><label for="opsw">原密码</label> :
                    <input placeholder="原密码" type="password" value="" name="opsw" id="opsw"/>
                </div>
                <div class="list fr "><label for="npsw">新密码</label> :
                    <input placeholder="新密码" type="password" value="" name="npsw" id="npsw"/>
                </div>
                <div class="list fr "><label for="npsw2">确认密码</label> :
                    <input placeholder="确认密码" type="password" value="" name="npsw2" id="npsw2"/>
                </div>
            </div>
            <div class="list1 "> <input type="submit" value="提交" name="username"/></div>
        </div>
    </form>

</div>
</body>
</html>