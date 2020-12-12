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
    <title>我的博客空间</title>
    <meta name="keywords" content="绽放自己，追寻自我。" />
    <meta name="description" content="寻梦主题人的世界：优雅、稳重、大气,低调。" />
    <link href="css/base.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
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
<div class="banner">
    <section class="box">
        <ul class="texts">
            <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
            <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
            <p>加了锁的青春，不会再因谁而推开心门。</p>
            <p>寻觅的灵魂，会在幽暗的一角，等待着那人的到来。</p>
        </ul>
        <div class="avatar">
            <a href="#">
                <span>
                    <?php
                        echo $_COOKIE['username'];
                    ?>
                </span>
            </a>
        </div>
    </section>
</div>
<div class="template">
    <div class="box">
        <h3>
            <p><span>个人博客</span>SELECT 个性皮肤</p>
        </h3>
        <ul>
            <li><a href="/"  target="_blank"><img src="images/01.jpg"></a><span>仿新浪博客风格・梅――古典个人博客模板</span></li>
            <li><a href="/" target="_blank"><img src="images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
            <li><a href="/"  target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
            <li><a href="/" target="_blank"><img src="images/04.jpg"></a><span>女生清新个人博客网站模板</span></li>
            <li><a href="/"  target="_blank"><img src="images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
            <li><a href="/"  target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
        </ul>
    </div>
</div>
<article>
    <h2 class="title_tj">
        <p>文章<span>推荐</span></p>
    </h2>
    <div class="bloglist left">
        <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
        <figure><img src="images/001.png"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
            <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
        <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
        <figure><img src="images/001.png"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
            <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
        <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
        <figure><img src="images/001.png"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
            <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
        <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
        <figure><img src="images/001.png"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
            <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
        <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3>
        <figure><img src="images/001.png"></figure>
        <ul>
            <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
            <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
        </ul>
        <p class="dateview"><span>2013-11-04</span><span>作者：杨青</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
    </div>
    <aside class="right">
        <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
        <div class="news">
            <h3>
                <p>最新<span>文章</span></p>
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
            <h3 class="links">
                <p>友情<span>链接</span></p>
            </h3>
            <ul class="website">
                <li><a href="/">个人博客</a></li>
                <li><a href="/">谢泽文个人博客</a></li>
                <li><a href="/">3DST技术网</a></li>
                <li><a href="/">思衡网络</a></li>
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
        <a href="/" class="weixin"> </a></aside>
</article>
<footer>
    <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">蚌埠学院</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>
