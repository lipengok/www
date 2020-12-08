<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/StudentPubMed.css"/>
    <style type="text/css">
        #add{
            width: 100px;
            background:dodgerblue;
            color: whitesmoke;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="bx">
            <div class="box">
                <div class="top">
                    <div class="left">当前位置>考研信息</div>
                    <div class="right">
                        <span class="l" style="margin-right: 20px">编辑</span>
                        <span class="r">保存</span>
                    </div>
                </div>
                <div class="content">
                    <div class="left">
                        <i class="column"></i>
                        <span class="tit">基础信息</span>
                    </div>
                </div>
                <form action="php/controller/insertupstudy.php">
                    <div class="bottom">
                        <ul class="one">
                            <li>
                                <span>专业对口：</span>
                                <input type="text" class="oInp" name="subject" placeholder="专业对口" disabled/>
                            </li>
                            <li>
                                <span>报道证编号：</span>
                                <input type="text" class="oInp" name="stuent_num" placeholder="学号" disabled/>
                            </li>
                            <li>
                                <span>升学档案转寄：</span>
                                <input type="text" class="oInp" name="old_adress" placeholder="发送地址" disabled/>
                            </li>
                            <li>
                                <span>升学档案接收人：</span>
                                <input type="text" class="oInp" name="doc_person" placeholder="升学档案接收人" disabled/>
                            </li>
                            <li>
                                <span>是否全日制研究生：</span>
                                <select class="oInp" name="is_allday" id="">
                                    <option value="是">是</option>
                                    <option value="否">否</option>
                                </select>
                            </li>
                            <li>
                                <span>定向或委培单位：</span>
                                <input type="text" class="oInp" name="work_unit" placeholder="办理单位" disabled/>
                            </li>
                        </ul>
                        <ul class="two">
                            <li>
                                <span>升学院校：</span>
                                <input type="text" class="oInp" name="school_name" placeholder="升学院校" disabled/>
                            </li>
                            <li>
                                <span>升学院校邮编：</span>
                                <input type="text" class="oInp" name="school_code" placeholder="升学院校邮编" disabled/>
                            </li>
                            <li>
                                <span>录取院校所在地：</span>
                                <input type="text" class="oInp" name="new_adress" placeholder="录取院校所在地" disabled/>
                            </li>
                            <li>
                                <span>接收人联系电话：</span>
                                <input type="text" class="oInp" name="phone" placeholder="接收人联系电话" disabled/>
                            </li>
                            <li>
                                <span>是否免推研究生：</span>
                                <select class="oInp" name="is_free" id="">
                                    <option value="是">是</option>
                                    <option value="否">否</option>
                                </select>
                            </li>
                            <li>
                                <span>学生的名字：</span>
                                <input class="oInp" type="text" name="student_name" placeholder="学生的名字" disabled/>
                            </li>
                            <li>
                                <span>确认信息后提交：</span>
                                <input id="add" type="submit" value="添加"/>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-1.9.1.min.js"></script>
<script>
    $('.l').click(function () {
        $('.oInp').removeAttr('disabled');
        $.ajax({
            url: "http://101.201.154.205:9090/survey/list",
            data: {
                t: Math.random()
            },
            type: 'get',
            dataType: 'jsonp',
            'jsonp': 'callback'
        }).then(function (res) {
            console.log(res);
        },function (err) {
            console.log(err);
        });
    });
    $('.r').click(function () {
        $('.oInp').attr('disabled','disabled');

    });

</script>
</body>
</html>
