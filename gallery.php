<?php
include "php/controller/gallery/FindGallery.php";
use Php\Controller\Gallery\FindGallery;
if ($_COOKIE['username']==null||$_COOKIE['psw']==null){
    echo <<<eof
<script>
alert("请先登录！");
window.location.href="index.html";
</script>
eof;
}
$gallery=new FindGallery();
$data=$gallery->run();
?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
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
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
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
        body{
            background: lightgray;
        }
        h6{
            text-align: right;
        }
</style>
</head>
<body class="cbp-spmenu-push">
    <!-- 头部模板 -->
    <div class="w3layouts-banner1">
        <div class="container">
            <div class="wthree-header">
                <div class="w3l-logo">
                    <h1><a href="index.html">Elucidation</a></h1>
                    <p class="p_info">欢迎<?php echo $_COOKIE['username']; ?>加入</p>
                </div>
                <div class="agileinfo-tleft">
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                        <h3>Menu</h3>
                        <a href="about.php">关于我们</a>
                        <a href="public/vedio">线上直播客</a>
                        <a href="public/music">点播空间</a>
                        <a href="myfile">我的课程</a>
                        <a href="myhome/index.php">我的博客</a>
                        <a href="contact.html">联系我们</a>
                        <a href="index.html" class="active">退出登录</a>
                        <a href="php/controller/destroyUser.php" class="active">注销账号</a>
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
    <!-- 校园中心 -->
    <div class="gallery-w3ls">
             <div class="container">
                 <h2 class="agile">校园CENTER</h2>
                 <div class="w3layouts_gallery_grids">
                     <h6>
                         <a href="/public/user/gallery">了解更多详情></a>
                     </h6>
                     <hr>
                     <ul class="w3l_gallery_grid" id="lightGallery">
                         <?php
                            if (count($data)<=15){
                                for ($i=0;$i<count($data);$i++){
                                    $time=$data[$i]['createTime'];
                                    $title=$data[$i]['title'];
                                    $generall=$data[$i]['generall'];
                                    $img=$data[$i]['img'];

                                    echo <<<eof
                        <li data-title="$time" data-desc="$generall" data-src="$img" data-responsive-src="$img">
                         <div class="box">
                             <a href="public/user/gallery" target="_blank">
                                 <img src="$img" alt=" " class="img-responsive" />
                                 <div class="overbox">
                                     <h4 class="title overtext"> $title </h4>
                                     <p class="tagline overtext"> $generall </p>
                                 </div>
                             </a>
                         </div>
                         </li>
eof;
                                }
                            }else{
                                for ($i=0;$i<15;$i++){
                                    $time=$data[$i]['createTime'];
                                    $title=$data[$i]['title'];
                                    $generall=$data[$i]['generall'];
                                    $img=$data[$i]['img'];

                                    echo <<<eof
                        <li data-title="$time" data-desc="$generall" data-src="$img" data-responsive-src="$img">
                         <div class="box">
                             <a href="public/user/gallery" target="_blank">
                                 <img src="$img" alt=" " class="img-responsive" />
                                 <div class="overbox">
                                     <h4 class="title overtext"> $title </h4>
                                     <p class="tagline overtext"> $generall </p>
                                 </div>
                             </a>
                         </div>
                         </li>
eof;
                                }
                            }
                         ?>
                     </ul>
                 </div>
             </div>
         </div>
    <!-- js -->
    <script src="js/lightGallery.js"></script>
    <script>
        $(document).ready(function() {
            $("#lightGallery").lightGallery({
                mode:"fade",
                speed:800,
                caption:true,
                desc:true,
                mobileSrc:true
            });
        });
    </script>
    <!-- 关于我们-->
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
                         <li><a href="about.php">关于我们</a></li>
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
    <!-- 版权信息-->
    <div class="w3ls-copy-right">
		 <div class="container">
			 <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">蚌埠学院</a></p>
		 </div>
    </div>
</body>
</html>