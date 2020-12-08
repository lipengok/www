<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentList</title>
    <link rel="stylesheet" href="../css/information/main.css">
    <link rel="stylesheet" href="../css/information/upstudy.css">
</head>
<?php
include '../php/model/StudentUpstudyModel.php';
$name=$_GET['studentName'];
$model=new \Admin\Php\Model\StudentUpstudyModel();
$res=($model->selectByName($name))['res'];

?>
<body>
<div class="div_head">
    <h3><?=$name?>的考研信息</h3>
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
            <li>专业对口：<span class="span_info">
                    <?=$res['subject']?>
                </span></li>
            <li>升学院校：<span class="span_info"><?=$res['school_name'] ?>
                </span></li>
            <li>学号：<span class="span_info"><?=$res['stuent_num'] ?>
                </span></li>
            <li>毕业学校的邮政编号：<span class="span_info"><?=$res['school_code'] ?>
                </span></li>
            <li>升学的档案邮寄的地址：<span class="span_info"><?=$res['old_adress']?>
                </span></li>
            <li>录取的学院的地址：<span class="span_info"><?=$res['new_adress'] ?>
                </span></li>
            <li>升学的档案接受人：<span class="span_info"><?=$res['doc_person']?>
                </span></li>
            <li>升学的档案接收人电话：<span class="span_info"><?=$res['phone']?>
                </span></li>
            <li>是否是全日制的研究生：<span class="span_info"><?=$res['is_allday']?>
                </span></li>
            <li>是否是免推的研究生：<span class="span_info"><?=$res['is_free']?>
                </span></li>
            <li>定向或委培单位：<span class="span_info"><?=$res['work_unit']?>
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