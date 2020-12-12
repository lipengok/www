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
    <meta charset="utf-8">
    <title>小鱼教育留言板</title>
    <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/common.css">
</head>
<body>

<div class="user_mesg">
    <form action="#" method="post" id="msgform" class="fl">
        <div class="quick_liuyan_con">
            <div class="item">
                <span><b class="star">*</b>姓名</span>
                <div class="item-right">
                    <input type="text" class="v-ipt" value="" name="xingming" placeholder="请输入姓名">
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="item">
                <span><b class="star">*</b>电话</span>
                <div class="item-right">
                    <input type="text" value="" name="dianhua" maxlength="11" placeholder="请输入手机号">
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="item">
                <span>QQ/Email</span>
                <div class="item-right">
                    <input type="text" value="" name="email" id="email" placeholder="请输入邮箱">
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="item">
                <span>留言</span>
                <div class="item-right">
                    <textarea name="neirong" id="Message" class="Message" cols="30" rows="10">发送的内容..</textarea>
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="item">
                <input name="url" value="" id='burl' type="hidden">
                <input type="submit" class="btn-mesSubmit" id="imgBtnUp1"  value="提交留言">
            </div>
            <p>
                <span class="span_back">
                   <a href="https://mail.qq.com/">选择qq邮箱去登录？</a>
                </span>
                <span class="span_back">
                    <a href="../">返回首页？</a>
                </span>
            </p>
        </div>
    </form>
    <div class="form-right fl">
        <h3>您可以根据下列意向,<span>快捷留言</span></h3>
        <ul class="quickMessage">
            <li> <a><p>1.我想修改我自己的密码，在那修改！</p></a> </li>
            <li> <a><p>2.我很喜欢一个博客，怎么去收藏起来！</p></a> </li>
            <li> <a><p>3.我自己的敞口今天等不进去，怎么办？</p></a> </li>
            <li> <a><p>4.账号的密码忘了，有什么办法找回来呢？</p></a> </li>
            <li> <a><p>5.我想购买课程再拿去买呢，买了放在哪呢？</p></a> </li>
            <li> <a><p>6.以前的数据都保留在网站，怎么突然之间就没了？</p></a> </li>
        </ul>
    </div>
</div>

<script src="js/script.js" type="text/javascript"></script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p>适用浏览器：IE8、360、FireFox、Chrome、Safari、Opera、傲游、搜狗、世界之窗.</p>
    <p>Copyright &copy; 2020.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">蚌埠学院</a></p>
</div>
</body>
</html>

