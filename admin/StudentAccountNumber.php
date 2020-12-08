<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StudentList</title>
    <style type="text/css">
        body{
            background: white;
            color: #0d0d0d;
        }
        table{
            width: 90%;
            height: 450px;
            float: left;
            margin-left: 4%;
            border: 2px solid darkcyan;
            border-radius: 5px;
            font-family: 微軟正黑體;
            font-size: 14px;
        }
        table tr{
            width: 100%;
            background: gainsboro;
            text-align: center;
            border: 2px solid darkcyan;
        }
        table tr th{
            background: darkcyan;
            height: 25px;
        }
        table tr td{
            height: 40px;
        }
        span{
            width: 100%;
            height: 69px;
            float: left;
            margin-top: 5px;
            text-align: center;
            background: lightcyan;
        }
        .page_info{
            width: 20%;
            background: cyan;
            float: left;
            font-family: 細明體_HKSCS-ExtB;
            font-size: 10px;
            border: 1px solid red;
        }
        font{
            color: darkred;
            font-weight: bolder;
        }
        a{
            text-decoration: none;
            color: black;
            font-weight: bolder;
        }
        .page_now{
            background: lightseagreen;
            border-radius: 50%;
        }

    </style>
</head>
<body>
<table>
    <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>密码</th>
        <th>学校</th>
        <th>家庭详情</th>
        <th>工作详情</th>
        <th>考研详情</th>
    </tr>
    <?php
        include 'php/model/Dbutils.php';
        use Admin\Php\Model\Dbutils;
        $model=new Dbutils();
        //当前的页数
        $pageNow=$_GET['page'];
        //获取所有的记录数
        $count=$model->getCount();
        //所有的页数
        $page=$count/10+1;
        //判断当前的页数
        if ((int)$pageNow>(int)$page){
            $pageNow=1;
        }
        if ((int)$pageNow<1){
            (int)$pageNow=(int)$page;
        }
        //获取当前的行
        $row=($pageNow-1)*10;
        //取出二维数组：所有的数据
        $students=$model->selectAll($row);
        //获取当前的页面的行数
        if ((int)$pageNow==(int)$page){
            $rowNow=$count%10;
        }else{
            $rowNow=10;
        }
    ?>
    <?foreach ($students as $student):?>
        <tr>
            <td><?=$student['id']?></td>
            <td><?=$student['name']?></td>
            <td><?=$student['psw']?></td>
            <td>
                <a href="school/StudentInformation.php?studentName=<?=$student['name']?>"><?=$student['school']?></a>
            </td>
            <td>
                <a href="home/HomeInformation.php?studentName=<?=$student['name']?>" target="main">家庭详情</a>
            </td>
            <td>
                <a href="record/RecordInformation.php?studentName=<?=$student['name']?>">档案详情</a>
            </td>
            <td>
                <a href="upstudy/UpstudyInformation.php?studentName=<?=$student['name']?>">考研详情</a>
            </td>
        </tr>
    <?endforeach;?>
    <?php
    //如果最后一行的行数不够的时候补空
    for ($i=0;$i<(10-$rowNow);$i++){
        echo "
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                ";
    }
    ?>
</table>
<span>
    <span class="page_info">
        一共有 <font><?=$count?></font> 条学生记录<br>
        一共有 <font><?=floor($page)?></font> 张页面<br>
        当前有 <font><?=floor($rowNow)?></font> 条记录<br>
        当前是第 <font><?=floor($pageNow)?></font> 张页<br>
    </span>
    <p>
        <a href="http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=<?php echo $pageNow-1?>">上一页</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=<?php echo $pageNow+1?>">下一页</a>
    </p>
    <p>
        <a href="http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=1">首页</a>
        <?php
        if ($page<=25){
            for ($i=1;$i<=floor($page);$i++){
                echo "
                <a class='page_now' href='http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=$i'> 0$i</a>
            ";
            }
        }else{
            for ($i=1;$i<=9;$i++){
                echo "
                <a class='page_now' href='http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=$i'> 0$i</a>
            ";
            }
            for ($i=10;$i<=25;$i++){
                echo "
                <a class='page_now' href='http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=$i'> $i</a>
            ";
            }
            echo "
            <a href=''>...</a>
        ";
        }
        ?>
        <a href="http://koschoolhtml.cn/admin/StudentAccountNumber.php?page=<?php echo floor($page)?>">尾页</a>
    </p>

</span>
</body>
</html>