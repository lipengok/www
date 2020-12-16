<?php
include "../../../php/controller/gallery/FindGalleryOne.php";
use Php\Controller\Gallery\FindGalleryOne;
if ($_COOKIE['username']==null||$_COOKIE['psw']==null){
    echo <<<eof
<script>
alert("请先登录！");
window.location.href="/index.html";
</script>
eof;
}
$gallery=new FindGalleryOne();
$id=$_GET['id'];
$data=$gallery->run($id);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>咨询详情</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/sytle.css">
    <link rel="stylesheet" href="css/new.css">
    <script>
    function $(xixi) {
    return document.getElementById(xixi);
    }
    //转换字号
    function doZoom(size){
        if(size==16){
            $("contentText").style.fontSize = size + "px";
            $("fs12").style.display = "";
            $("fs14").style.display = "none";
        }
        if(size==24){
            $("contentText").style.fontSize = size + "px";
            $("fs12").style.display = "none";
            $("fs14").style.display = "";
        }
    }
    </script>
</head>
<body>
<!-- header 开始 -->
<div class="header black_gradient">
            <a href="index.php"  class="back_button black_button"><img src="images/gg_lefticon.png" width="15" height="25"></a>
            <div class="page_title">校园新事件</div>
            <div class="textAa">
                <div class=fontSize id=fs12 style="DISPLAY: none">
                <a href="javascript:doZoom(24)" class="bigA">小</a>
                <div class="smallSize">小</div>
                </div>
                <div class=fontSize id=fs14>
                <span class="bigSize">大</span>
                <a href="javascript:doZoom(16)" class="smalA">大</a>
               </div>
           </div>
            <div class="clear"></div>
        </div>
<!-- header 结束 -->
<!--公告文章 开始--> 
<div class="ggNeirong">
<div class="gg_title">
<h1><?=$data[0]['generall']?></h1>
<span><?=$data[0]['createTime']?><em class="newName"><?=$data[0]['title']?></em></span>
</div>
<div class="gg_texgt" id="contentText">　
<p><?=$data[0]['info']?></p>
</div>
</div> 
<!--公告文章 结束-->
<div class="container">
    <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://www.bbc.edu.cn/">蚌埠学院</a></p>
</div>
</body>
</html>
