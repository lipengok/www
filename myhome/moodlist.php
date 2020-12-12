<?php
if ($_COOKIE['username']==null||$_COOKIE['psw']==null){
    echo <<<eof
<script>
alert("请先登录！");
window.location.href="/index.html";
</script>
eof;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="gb2312">
    <title>
        <?php
        echo $_COOKIE['username'];
        ?>的回忆录
    </title>
    <meta name="keywords" content="绽放自己，追寻自我。" />
    <meta name="description" content="寻梦主题人的世界：优雅、稳重、大气,低调。" />
    <link href="css/base.css" rel="stylesheet">
    <link href="css/mood.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/modernizr.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
<header>
    <nav class="topnav" id="topnav">
        <div class="div_logo">
            <a class="a_logo" href="/"><span class="span_en">XIAO YU &hearts; 教育</span> <span class="span_ch">logo</span></a>
        </div>
        <a href="index.php"><span>首页</span><span class="en">Protal</span></a><a href="about.php"><span>关于我</span><span class="en">About</span></a><a href="newlist.php"><span>慢生活</span><span class="en">Life</span></a><a href="moodlist.php"><span>碎言碎语</span><span class="en">Doing</span></a><a href="share.php"><span>模板分享</span><span class="en">Share</span></a><a href="knowledge.php"><span>学无止境</span><span class="en">Learn</span></a><a href="book/book.php"><span>留言版</span><span class="en">Gustbook</span></a></nav>
    </nav>
</header>
<div class="moodlist">
    <h1 class="t_nav"><span>删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语。</span><a href="/" class="n1">网站首页</a><a href="/" class="n2">碎言碎语</a></h1>
    <div class="bloglist">
        <ul class="arrow_box">
            <div class="sy">
                <img src="images/001.png">
                <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。</p>
            </div>
            <span class="dateview">2014-1-1</span>
        </ul>
        <ul class="arrow_box">
            <div class="sy">
                <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。我在岁月中找到他，依靠他，将一生交付给他。做他的妻子，他孩子的母亲，为他做饭，洗衣服，缝一颗掉了的纽扣。然后，我们一起在时光中变老。</p>
            </div>
            <span class="dateview">2014-1-1</span>
        </ul>
        <ul class="arrow_box">
            <div class="sy">
                <img src="images/001.png">
                <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。我在岁月中找到他，依靠他，将一生交付给他。做他的妻子，他孩子的母亲，为他做饭，洗衣服，缝一颗掉了的纽扣。然后，我们一起在时光中变老。</p>
                <span class="dateview">2014-1-1</span>
            </div>
        </ul>
    </div>
    <div class="page"><a title="Total record"><b>41</b></a><b>1</b><a href="/news/s/index_2.html">2</a><a href="/news/s/index_2.html">&gt;</a><a href="/news/s/index_2.html">&gt;&gt;</a></div>
</div>
<footer>
    <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">蚌埠学院</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>