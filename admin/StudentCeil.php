<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .bx{
            height: 60px;
            width: 100%;
            background: #177ec1;
        }
        .bx .container{
            margin: 0 60px;
            overflow: hidden;
        }
        .bx .container .left{
            width: 201px;
            height: 43px;
            padding-top: 19px;
            color: #FFFFFF;
            font-size: 24px;
            float: left;
        }
        .bx .container .right{
            overflow: hidden;
            width: 300px;
            padding-top: 19px;
            float: right;
        }
        .bx .container .right span{
            font-size: 16px;
            color: #fff;
        }
        a{
            color: whitesmoke;
            font-weight: bolder;
            text-decoration: none;
            margin-left: 20px;
        }

    </style>
</head>
<body>
<div class="bx">
    <div class="container">
        <h2 class="left">学生信息管理中心</h2>
        <div class="right">
            <a href="php/controller/destroylogin.php" target="_blank">注销</a>
            <a href="index.php" target="_blank">退出登录</a>
            <a href="netmanage" target="_blank">网站管理系统</a>
        </div>
    </div>
</div>
</body>
</html>
