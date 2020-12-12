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
        资源扩展 模板分享
    </title>
    <meta name="keywords" content="绽放自己，追寻自我。" />
    <meta name="description" content="寻梦主题人的世界：优雅、稳重、大气,低调。" />
    <link href="css/base.css" rel="stylesheet">
    <link href="css/case.css" rel="stylesheet">
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
<article class="blogs">
    <h1 class="t_nav"><span>好咖啡要和朋友一起品尝，好“模板”也要和同样喜欢它的人一起分享。 </span><a href="/" class="n1">网站首页</a><a href="/" class="n2">作品展示</a></h1>
    <div class="caselist left">
        <ul>
            <li><a href="/"><img src="images/01.jpg"></a></li>
            <li><a href="/"><img src="images/02.jpg"></a></li>
            <li><a href="/"><img src="images/03.jpg"></a></li>
            <li><a href="/"><img src="images/04.jpg"></a></li>

            <li><a href="/"><img src="images/03.jpg"></a></li>
            <li><a href="/"><img src="images/04.jpg"></a></li>
            <li><a href="/"><img src="images/01.jpg"></a></li>
            <li><a href="/"><img src="images/02.jpg"></a></li>
            <li><a href="/"><img src="images/01.jpg"></a></li>
            <li><a href="/"><img src="images/02.jpg"></a></li>
            <li><a href="/"><img src="images/03.jpg"></a></li>
            <li><a href="/"><img src="images/04.jpg"></a></li>

            <li><a href="/"><img src="images/03.jpg"></a></li>
            <li><a href="/"><img src="images/04.jpg"></a></li>
            <li><a href="/"><img src="images/01.jpg"></a></li>
            <li><a href="/"><img src="images/02.jpg"></a></li>
        </ul>
        <div class="blank"></div>

        <div class="page"><a title="Total record"><b>41</b></a><b>1</b><a href="/news/s/index_2.html">2</a><a href="/news/s/index_2.html">&gt;</a><a href="/news/s/index_2.html">&gt;&gt;</a></div>
    </div>
    <aside class="right">
        <div class="rnav">
            <h2>栏目导航</h2>
            <ul>
                <li><a href="/download/" target="_blank">个人博客模板</a></li>
                <li><a href="/newsfree/" target="_blank">国外Html5模板</a></li>
                <li><a href="/download/" target="_blank">企业网站模板</a></li>
                <li><a href="/newsfree/" target="_blank">作品展示</a></li>
            </ul>
        </div>
        <div class="news">
            <h3>
                <p>最新<span>模板</span></p>
            </h3>
            <ul class="rank">
                <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
                <li><a href="/" title="with love for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
                <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
                <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
                <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
                <li><a href="/" title="建站流程篇――教你如何快速学会做网站" target="_blank">建站流程篇――教你如何快速学会做网站</a></li>
                <li><a href="/" title="box-shadow 阴影右下脚折边效果" target="_blank">box-shadow 阴影右下脚折边效果</a></li>
                <li><a href="/" title="打雷时室内、户外应该需要注意什么" target="_blank">打雷时室内、户外应该需要注意什么</a></li>
            </ul>
            <h3 class="ph">
                <p>点击<span>排行</span></p>
            </h3>
            <ul class="paih">
                <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
                <li><a href="/" title="withlove for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
                <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
                <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
                <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
            </ul>
        </div>
        <div class="visitors">
            <h3><p>最近访客</p></h3>
            <ul>

            </ul>
        </div>
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <script type="text/javascript">
            document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
        </script>
        <!-- Baidu Button END -->
    </aside>
</article>
<footer>
    <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">蚌埠学院</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>