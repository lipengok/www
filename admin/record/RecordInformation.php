<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentList</title>
    <link rel="stylesheet" href="../css/information/main.css">
    <link rel="stylesheet" href="../css/information/school.css">
</head>
<?php
include '../php/model/StudentRecordModel.php';
$name=$_GET['studentName'];
$model=new \Admin\Php\Model\StudentRecordModel();

$data=$model->selectByName($name);
$res=$data['res'];
?>
<body>
<div class="div_head">
    <h3><?=$name?>的档案信息</h3>
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
            <li>档案的类型：<span class="span_info"><?=$res['agency_type']?>
                </span></li>
            <li>是否有组织：<span class="span_info"><?=$res['doc_logo'] ?>
                </span></li>
            <li>文档的名称：<span class="span_info"><?=$res['doc_name'] ?>
                </span></li>
            <li>文档的标志：<span class="span_info"><?=$res['doc_logo'] ?>
                </span></li>
            <li>代理标志：<span class="span_info"><?=$res['agency_logo'] ?>
                </span></li>
        </ul>
    </div>
    <div class="div_body_foot">
        <img class="img_info" src="<?=$res['img']?>" alt="该学校比较懒，没得图片">
    </div>
</div>

<div class="div_foot">
    CopyRight@copy2020 蚌埠学院
</div>
</body>
</html>