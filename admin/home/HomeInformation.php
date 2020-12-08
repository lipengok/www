<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentList</title>
    <link rel="stylesheet" href="../css/information/main.css">
    <link rel="stylesheet" href="../css/information/home.css">
</head>
<body>
<?php
include '../php/model/StudentHomeModel.php';
$studentName=$_GET['studentName'];
$model=new \Admin\Php\Model\StudentHomeModel();
$res=$model->selectByName($studentName)['res'];
?>
<div class="div_head">
    <h3><?=$studentName?>的家庭信息</h3>
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
    <div class="div_body_body">
        <ul class="ul_info_left">
            <li>亲人的姓名：<span class="span_info"><?=$res['name']?>
                </span></li>
            <li>亲人的关系：<span class="span_info"><?=$res['relate']?>
                </span></li>
            <li>家庭贫困的等级：<span class="span_info"><?=$res['postal_code']?>
                </span></li>
            <li>家庭的邮政编号：<span class="span_info"><?=$res['adress_code']?>
                </span></li>
            <li>家庭的地址编号：<span class="span_info"><?=$res['police_adress']?>
                </span></li>
            <li>家庭的所属派出所：<span class="span_info"><?=$res['home_adress']?>
                </span></li>
            <li>家庭的详细地址：<span class="span_info"><?=$res['poverty_leavel']?>
                </span></li>
            <li>家庭的紧急联系方式：<span class="span_info"><?=$res['phone']?>
                </span></li>
        </ul>
    </div>
    <div>
        <img class="img_info" src="<?=$res['img']?>" alt="比较懒">
    </div>
</div>

<div class="div_foot">
    CopyRight@copy2020 蚌埠学院
</div>
</body>
</html>