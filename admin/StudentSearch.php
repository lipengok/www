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
        div{
            width: 90%;
            height: 100px;
            float: left;
        }
        table{
            width: 90%;
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
            height: 25px;
        }
        span{
            width: 100%;
            height: 69px;
            float: left;
            margin-top: 5px;
            text-align: center;
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
        .p_search{
            font-size: 25px;
            font-weight: bolder;
            color: lightseagreen;
            text-align: center;
        }
        .input_search{
            width: 400px;
            height: 30px;
            background: lightblue;
            border: 1px solid lightseagreen;
            border-radius: 2px;
        }
        .button_search{
            background: lightseagreen;
            width: 80px;
            height: 30px;
            text-align: center;
        }
        .a_op{
            color: darkblue;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div>
    <form action="StudentSearch.php?page=1">
        <p class="p_search">
            搜索：<input type="text" placeholder="请输入要搜索的学生的名字或联系方式" name="search" class="input_search">
            <button class="button_search" href="">查找</button>
        </p>
    </form>
</div>
<table>
    <tr>
        <th>序号</th>
        <th>联系方式</th>
        <th>姓名</th>
        <th>密码</th>
        <th>学校</th>
        <th>家庭详情</th>
        <th>工作详情</th>
        <th>考研详情</th>
        <th>操作</th>
    </tr>
    <?php
        include 'php/model/StudentModel.php';
        $model=new \Admin\Php\Model\StudentModel();
        $search=$_GET['search'];

        //当前的页数
        $pageNow=$_GET['page'];
        //获取所有的记录数
        $count=$model->getCount($search,$search);
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
        $students=$model->selectAll($search,$search,$row);
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
            <td><?=$student['num']?></td>
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
            <td>
                <a class="a_op" href="php/controller/deleteStudent.php?id=<?=$student['id']?>">删除</a>
                <a class="a_op" href="php/controller/replaceStudent.php?id=<?=$student['id']?>">重置密码</a>
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
                        <td></td>
                        <td></td>
                    </tr>
                ";
    }
    ?>
</table>
<span>
    <p>
        <a href="http://koschoolhtml.cn/admin/StudentSearch.php?search=<?php echo $search?>&page=<?php echo $pageNow-1?>">上一页</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://koschoolhtml.cn/admin/StudentSearch.php?search=<?php echo $search?>&page=<?php echo $pageNow+1?>">下一页</a>
    </p>
    <p>
        <a href="http://koschoolhtml.cn/admin/StudentSearch.php?search=<?php echo $search?>&page=1">首页</a>
        <?php
        if ($page<=25){
            for ($i=1;$i<=floor($page);$i++){
                echo "
                <a class='page_now' href='http://koschoolhtml.cn/admin/StudentSearch.php?search=$search&page=$i'> 0$i</a>
            ";
            }
        }else{
            for ($i=1;$i<=9;$i++){
                echo "
                <a class='page_now' href='http://koschoolhtml.cn/admin/StudentSearch.php?search=$search&page=$i'> 0$i</a>
            ";
            }
            for ($i=10;$i<=25;$i++){
                echo "
                <a class='page_now' href='http://koschoolhtml.cn/admin/StudentSearch.php?search=$search&page=$i'> $i</a>
            ";
            }
            echo "
            <a href=''>...</a>
        ";
        }
        ?>
        <a href="http://koschoolhtml.cn/admin/StudentSearch.php?search=<?php echo $search?>&page=<?php echo floor($page)?>">尾页</a>
    </p>

</span>
</body>
</html>