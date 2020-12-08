<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentList</title>
    <link rel="stylesheet" href="../css/information/main.css">
    <link rel="stylesheet" href="../css/information/school.css">
</head>
<?php
include '../php/model/StudentSchoolModel.php';
$name=$_GET['studentName'];
$model=new \Admin\Php\Model\StudentSchoolModel();

$data=$model->selectOneByName($name);
$res=$data['res'];
?>
<body>
<div class="div_head">
    <h3><?=$name?>的学校信息</h3>
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
        基本的信息描述
    </div>
    <div class="div_body_body">
        <ul class="ul_info_left">
            <li>学校的名称：<span class="span_info">
                    <?=$res['school_name']?>
                </span></li>
            <li>学校的邮政编号：<span class="span_info"><?=$res['school_code'] ?>
                </span></li>
            <li>学校的其他分校名称：<span class="span_info"><?=$res['campase_name'] ?>
                </span></li>
            <li>学校的校区名称：<span class="span_info"><?=$res['group_name'] ?>
                </span></li>
            <li>学校的校区编号：<span class="span_info"><?=$res['group_code']?>
                </span></li>
            <li>学校的省份编号：<span class="span_info"><?=$res['provence_code'] ?>
                </span></li>
            <li>学校所在地的编号：<span class="span_info"><?=$res['adress_code']?>
                </span></li>
        </ul>
    </div>
    <div class="div_body_foot">
        <img class="img_info" src="<?=$res['school_img']?>" alt="该学校比较懒，没得图片">
    </div>
</div>

<div class="div_foot">
    CopyRight@copy2020 蚌埠学院
</div>
</body>
</html>