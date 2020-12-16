<?php
include "../../../php/controller/gallery/FindGalleryList.php";
use Php\Controller\Gallery\FindGalleryList;
if ($_COOKIE['username']==null||$_COOKIE['psw']==null){
    echo <<<eof
<script>
alert("请先登录！");
window.location.href="/index.html";
</script>
eof;
}
$gallery=new FindGalleryList();
$data=$gallery->run();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>校园快讯</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/sytle.css">
    <link rel="stylesheet" href="css/my.css">
    <script src="js/iscroll.js" type="text/javascript"></script>
    <script type="text/javascript">
    var myScroll;

    function loaded() {
    myScroll = new iScroll('qiehuan', {
    snap: true,
    momentum: false,
    hScrollbar: false,
    onScrollEnd: function () {
    document.querySelector('#indicator > li.active').className = '';
    document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
    }
     });


    }

    document.addEventListener('DOMContentLoaded', loaded, false);
    </script>
</head>
<body>
<!-- header 开始 -->
<div class="header black_gradient">
    <div class="zixuntext">校园快讯</div>
</div>
<!-- header 结束 -->
<div class="Newsinfo">
    <h6>今日要闻</h6>
    <p class="head_p">
        <span>欢迎<?php echo $_COOKIE['username']?>加入</span>
        <a href="/gallery.php">返回上一级</a>
    </p>
    <div class="banner">
    <div id="qiehuan">
    <div id="scroller">
    <ul id="thelist">
    <li><p>沪指冲高回落 3700点得而复失</p><a href="javascript:void(0)"><img src="images/banner_1.jpg"/></a></li>
    <li><p>救市任重道远</p><a href="javascript:void(0)"><img src="images/banner_2.jpg" /></a></li>
    <li><p>黄金坑现身 三招底部扫货</p><a href="javascript:void(0)"><img src="images/banner_3.jpg" /></a></li>
    </ul>
    </div>
    </div>
    <div class="nav">
      <ul id="indicator">
       <li class="active" ></li>
       <li  ></li>
       <li  ></li>
      </ul>
    </div>
    <script>
    var count = document.getElementById("thelist").getElementsByTagName("img").length;

    var count2 = document.getElementsByClassName("menuimg").length;
    for(i=0;i<count;i++){
     document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

    }
    document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

     setInterval(function(){
    myScroll.scrollToPage('next', 0,400,count);
    },3500 );
    window.onresize = function(){
    for(i=0;i<count;i++){
    document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

    }
     document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
    }

    </script>
    </div>
    <ul class="tabslider">
        <? foreach ($data as $values):?>
            <li>
                <a href="NewDetail.php?id=<?=$values['id']?>">
                    <div class="div_list">
                        <div class="div_list_item_letf">
                            <img src="<?=$values['img']?>" class="img_list" alt="">
                        </div>
                        <div class="div_list_item_right">
                            <p class="p_head"><?=$values['title']?></p>
                            <p class="p_body">——<?=$values['generall']?></p>
                            <hr>
                            <br>
                            <p class="p_foot"><?=$values['info']?></p>
                        </div>
                    </div>
                    <span><?=$values['createTime']?></span>
                </a>
            </li>
        <? endforeach;?>
    </ul>
</div>
<div class="container">
    <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://www.bbc.edu.cn/">蚌埠学院</a></p>
</div>
</body>
</html>
