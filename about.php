<?php
if ($_COOKIE['username']==null||$_COOKIE['psw']==null){
    echo <<<eof
<script>
alert("请先登录！");
window.location.href="index.html";
</script>
eof;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu -->
    <link href="css/component.css" rel="stylesheet" type="text/css"  />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- //menu -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- fonts -->
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <style type="text/css">
        .p_info{
            color: grey;
            font-weight: bolder;
            font-size: 25px;
        }
    </style>
    <!-- //fonts -->
</head>
<body class="cbp-spmenu-push">
<!--top-header-->
<!--bottom-->

<!-- banner -->
<div class="w3layouts-banner1">
    <div class="container">
        <div class="wthree-header">
            <div class="w3l-logo">
                <h1><a href="index.html">Elucidation</a></h1>
                <p class="p_info">
                    欢迎
                    <?php
                    echo $_COOKIE['username'];
                    ?>
                    加入
                </p>
            </div>
            <div class="agileinfo-tleft">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                    <h3>Menu</h3>
                    <a href="index.html" class="active">首页</a>
                    <a href="about.php">关于我们</a>
                    <a href="gallery.php">校园操场</a>
                    <a href="icons.html">开发素材</a>
                    <a href="contact.html">联系我们</a>
                </nav>
                <div class="main buttonset">
                    <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                    <button id="showRightPush"><img src="images/menu.png" alt=""/></button>
                    <!--<span class="menu"></span>-->
                </div>
                <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                <script src="js/classie.js"></script>
                <script>
                    var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                        showRightPush = document.getElementById( 'showRightPush' ),
                        body = document.body;

                    showRightPush.onclick = function() {
                        classie.toggle( this, 'active' );
                        classie.toggle( body, 'cbp-spmenu-push-toleft' );
                        classie.toggle( menuRight, 'cbp-spmenu-open' );
                        disableOther( 'showRightPush' );
                    };

                    function disableOther( button ) {
                        if( button !== 'showRightPush' ) {
                            classie.toggle( showRightPush, 'disabled' );
                        }
                    }
                </script>
                <!-- /script-for-menu -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner -->
<div class="about-w3ls">
    <!-- 学生帮 -->
    <div class="container">
        <h2 class="agile"> 优秀学生榜</h2>
        <div class="about-grids">
            <div class="col-md-5 agileinfo-about-grid">
                <img src="images/10.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-7 about-wthree">
                <div class="about-top">
                    <div class="about-w3-agile">
                        <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                    </div>
                    <div class="about-agileits">
                        <h4>恭喜***同学荣获2020届新生扣篮大赛第一名</h4>
                        <p>NBA全明星扣篮大赛为NBA全明星周末的重要比赛项目，从1984年开始设立。首轮每人灌篮三次，总分最高的三名队员晋级决赛，得分最高的在决赛中可以最后出场。决赛阶段每人扣两次，得分最高的为冠军。</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-w3-agileits">
                    <div class="about-w3-agile">
                        <i class="glyphicon glyphicon-book" aria-hidden="true"></i>
                    </div>
                    <div class="about-agileits">
                        <h4>恭喜***同学荣获2020届新生扣篮大赛第一名</h4>
                        <p>NBA全明星扣篮大赛为NBA全明星周末的重要比赛项目，从1984年开始设立。首轮每人灌篮三次，总分最高的三名队员晋级决赛，得分最高的在决赛中可以最后出场。决赛阶段每人扣两次，得分最高的为冠军。</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- 教师帮 -->
    <div class="staff">
        <div class="container">
            <h3 class="agile">优秀教师榜</h3>

            <div class="staff-top">
                <div class="col-md-3 col-sm-3 staff-img staff-img1">
                    <img src="images/t1.jpg" class="img-responsive-teacher" alt=" ">
                </div>
                <div class="col-md-3 col-sm-3  staff-text  staff-text1">
                    <h4>计算机工程学院 最美教师</h4>
                    <h5>蓝桥杯冠军队伍leader </h5>
                    <p class="p_teacher">为促进软件和信息领域专业技术人才培养，提升高校毕业生的就业竞争力，由教育部就业指导中心支持，工业和信息化部人才交流中心举办蓝桥杯大赛。</p>
                    <div class="agile-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3  staff-img staff-img2">
                    <img src="images/t2.jpg" class="img-responsive-teacher" alt=" ">
                </div>
                <div class="col-md-3 col-sm-3  staff-text  staff-text2">
                    <h4>计算机工程学院 最美教师</h4>
                    <h5>蓝桥杯冠军队伍leader </h5>
                    <p class="p_teacher">为促进软件和信息领域专业技术人才培养，提升高校毕业生的就业竞争力，由教育部就业指导中心支持，工业和信息化部人才交流中心举办蓝桥杯大赛。</p>
                    <div class="agile-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="staff-bottom">
                <div class="col-md-3 col-sm-3  staff-img staff-img3">
                    <img src="images/t3.jpg" class="img-responsive-teacher" alt=" ">
                </div>
                <div class="col-md-3 col-sm-3  staff-text  staff-text3">
                    <h4>计算机工程学院 最美教师</h4>
                    <h5>蓝桥杯冠军队伍leader </h5>
                    <p class="p_teacher">为促进软件和信息领域专业技术人才培养，提升高校毕业生的就业竞争力，由教育部就业指导中心支持，工业和信息化部人才交流中心举办蓝桥杯大赛。</p>
                    <div class="agile-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3  staff-img staff-img4">
                    <img src="images/t4.jpg" class="img-responsive-teacher" alt=" ">
                </div>
                <div class="col-md-3 col-sm-3  staff-text  staff-text4">
                    <h4>计算机工程学院 最美教师</h4>
                    <h5>蓝桥杯冠军队伍leader </h5>
                    <p class="p_teacher">为促进软件和信息领域专业技术人才培养，提升高校毕业生的就业竞争力，由教育部就业指导中心支持，工业和信息化部人才交流中心举办蓝桥杯大赛。</p>
                    <div class="agile-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- //newsletter -->
<div class="agileinfo_footer_bottom">
    <div class="container">
        <div class="col-md-3 agileinfo_footer_bottom_grid">
            <h3>关于我们</h3>
            <p>
                精彩课堂直播，不一样的授课方式，新颖的只是传播理念。新时代的趋势。当 下的我们是一个需要学习的阶段，网络直播解决了上课时间太短，上课内容过快，课后无人解答各种缺陷，让课堂更加灵活多变。
            </p>

        </div>
        <div class="col-md-3 agileinfo_footer_bottom_grid">
            <h3>我们的链接</h3>
            <div class="w3-agile-foot">
                <ul>
                    <li><a href="index.html">首页</a></li>
                    <li><a href="about.html">关于我们</a></li>
                    <li><a href="gallery.html">大厅中心</a></li>
                    <li><a href="icons.html">其他.....</a></li>
                    <li><a href="contact.html">联系我们</a></li>
                </ul>

            </div>
        </div>
        <div class="col-md-3 agileinfo_footer_bottom_grid">
            <h3>Latest Tweets</h3>
            <ul class="twi agileits_twitter">
                <li><i class="fa fa-twitter" aria-hidden="true"></i>Praesent imperdiet diam sagittis, egestas augue id <a href="#" class="mail">
                        @http:example.com</a> <span>ABOUT 15 MINS</span></li>
                <li><i class="fa fa-twitter" aria-hidden="true"></i>Mauris tristique, dolor vel iaculis vestibulum<a href="#" class="mail">
                        @http:example.com</a> <span>ABOUT 2 HOURS AGO</span></li>
            </ul>
        </div>
        <div class="col-md-3 agileinfo_footer_bottom_grid">
            <h3>精彩剪辑，脚印</h3>
            <div class="flickr-grids">
                <div class="flickr-grid agileits_w3layouts_flickr">
                    <a href="#"><img src="images/5.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/6.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/7.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="clearfix"> </div>

                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/8.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/9.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="flickr-grid  agileits_w3layouts_flickr">
                    <a href="#"><img src="images/10.jpg" alt=" " class="img-responsive"></a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- copy-right -->
<div class="w3ls-copy-right">
    <div class="container">
        <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">蚌埠学院</a></p>
    </div>
</div>
<!-- //copy-right -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->


</body>
</html>