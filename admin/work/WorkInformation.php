<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentList</title>
    <style type="text/css">
        body{
            background: grey;
            color: whitesmoke;
        }
        .div_head{
            width: 100%;
            height: 80px;
            float: left;
        }
        h3{
            float: left;
        }
        .div_head_span{
            width: 200px;
            float: right;
            margin-top: 20px;
        }
        .head_span{
            float: right;
        }
        a{
            width: 50px;
            margin-right: 50px;
            text-decoration: none;
            color: black;
            background: whitesmoke;
        }

        .div_body{
            width: 100%;
            height: 420px;
            float: left;
            text-align: center;
        }
        .div_foot{
            width: 100%;
            height: 50px;
            float: left;
            text-align: center;
            color: whitesmoke;
        }
        .div_body_head{
            width: 100%;
            background: #0e8384;
        }
    </style>
</head>
<body>
<?php
$studentName=$_GET['studentName'];
?>
<div class="div_head">
    <h3><?=$studentName?>的工作信息</h3>
    <div class="div_head_span">
        <span class="head_span">
            <a href="">下一级</a>
        </span>
        <span class="head_span">
            <a href="http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=1">上一级</a>
        </span>
    </div>
</div>

<div class="div_body">
    <hr>
    <div class="div_body_head">
        家庭成员
    </div>
</div>

<div class="div_foot">
    CopyRight@copy2020 蚌埠学院
</div>
</body>
</html>