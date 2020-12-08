<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/FamilyInformation.css">
    <style type="text/css">
        .add{
            width: 100px;
            background: white;
            border: 1px solid whitesmoke;
        }
    </style>
    <script src="js/jquery-1.9.1.min.js"></script>
</head>
<body>
<form action="php/controller/inserthome.php" method="get">
    <div class="container">
        <div class="content">
            <div class="header clearfix">
                <div class="top fl">当前位置>家庭信息><input class="add" type="submit" value="添加"></div>
                <div class="bottom fr">
                    <a id="emit" href="javascript:;">编辑</a>
                    <a id="keep" href="javascript:;">保存</a>
                </div>
            </div>
            <div class="main">
                <!--父母联系方式-->
                <div class="BasicInformation">
                    <div class="title">
                        父母联系方式
                    </div>
                </div>
                <div class="content clearfix">
                    <div class="left fl">
                        <div class="label">
                            <label for="relate">关系：</label>
                            <select name="relate" id="" class="option clearfix">
                                <option value="父子">父子</option>
                                <option value="父女">父女</option>
                                <option value="母子">母子</option>
                                <option value="母女">母女</option>
                            </select>
                        </div>
                        <div>
                            <label for="">学生姓名：</label>
                            <input placeholder="学生姓名" class="input" id="stu_name" type="text" value="" name="student_name" disabled>
                        </div>
                        <div>
                            <label for="">亲属姓名：</label>
                            <input placeholder="亲属姓名" class="input" id="relate_name" type="text" value="" name="name" disabled>
                        </div>
                    </div>
                    <div class="right fr">
                        <div class="none">
                            <label for="">电话号码：</label>
                            <input placeholder="电话号码" class="input" type="text" value="" disabled>
                        </div>
                        <div>
                            <label for="">家庭电话号码：</label>
                            <input placeholder="家庭电话号码" class="input" id="family_phone" type="number" name="phone" value="" disabled>
                        </div>
                        <div>
                            <label for="">个人电话号码：</label>
                            <input placeholder="个人电话号码" class="input" id="self_phone" type="number" value="" disabled>
                        </div>
                    </div>
                </div>
                <!--户口信息-->
                <div class="BasicInformation">
                    <div class="title">
                        户口信息
                    </div>
                </div>
                <div class="content clearfix">
                    <div class="left fl">
                        <div>
                            <label for="">邮政编码：</label>
                            <input placeholder="邮政编码" class="input" id="zip_code" type="number" value="" name="postal_code" disabled>
                        </div>
                        <div>
                            <label for="">代码编号：</label>
                            <input placeholder="代码编号" class="input" id="flocation_id" type="text" value="" name="adress_code" disabled>
                        </div>
                    </div>
                    <div class="right fr">
                        <div class="label">
                            <label for="poverty_leavel">贫困等级：</label>
                            <select name="poverty_leavel" id="" class="option clearfix">
                                <option value="一般">一般</option>
                                <option value="特困">特困</option>
                            </select>
                        </div>
                    </div>
                    <div class="address fl ">
                        <label>派出所地址：</label>
                        <input placeholder="派出所地址" class="input" id="pcs" type="text" value="" name="police_adress" disabled>
                    </div>
                    <div class="address fl ">
                        <label>家庭的地址：</label>
                        <input placeholder="家庭的地址" class="input" id="pcs" type="text" value="" name="home_adress" disabled>
                    </div>
                    <!--<div class="list fl ">
                        <label>家庭地址：</label>
                        <input id="province" type="text" value="" name="home_adress" disabled style="width: 78px;">
                        <select style="width: 78px;" name="exam_pri">
                            <option value="></option>
                            <option value="北京">北京市</option>
                            <option value="浙江省">浙江省</option>
                            <option value="天津市">天津市</option>
                            <option value="安徽省">安徽省</option>
                            <option value="上海市">上海市</option>
                            <option value="福建省">福建省</option>
                            <option value="重庆市">重庆市</option>
                            <option value="江西省">江西省</option>
                            <option value="山东省">山东省</option>
                            <option value="河南省">河南省</option>
                            <option value="湖北省">湖北省</option>
                            <option value="湖南省">湖南省</option>
                            <option value="广东省">广东省</option>
                            <option value="海南省">海南省</option>
                            <option value="山西省">山西省</option>
                            <option value="青海省">青海省</option>
                            <option value="江苏省">江苏省</option>
                            <option value="辽宁省">辽宁省</option>
                            <option value="吉林省">吉林省</option>
                            <option value="台湾省">台湾省</option>
                            <option value="河北省">河北省</option>
                            <option value="贵州省">贵州省</option>
                            <option value="四川省">四川省</option>
                            <option value="云南省">云南省</option>
                            <option value="陕西省">陕西省</option>
                            <option value="甘肃省">甘肃省</option>
                            <option value="黑龙江省">黑龙江省</option>
                            <option value="香港特别行政区">香港特别行政区</option>
                            <option value="澳门特别行政区">澳门特别行政区</option>
                            <option value="广西壮族自治区">广西壮族自治区</option>
                            <option value="宁夏回族自治区">宁夏回族自治区</option>
                            <option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
                            <option value="内蒙古自治区">内蒙古自治区</option>
                            <option value="西藏自治区">西藏自治区</option>
                        </select>
                        <input type="text" value="" disabled style="width: 234px; margin: 30px 0 0 86px">
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    $('#grade i').on('click', function() {
        $(this).siblings('ul').show();
    });
    $('#grade ul li').on('click', function() {
        var selTxt = $(this).text();
        $('#grade a').text(selTxt);
        $('#grade ul').hide();
    });
    $('#relationship i').on('click', function() {
        $(this).siblings('ul').show();
    });
    $('#relationship ul li').on('click', function() {
        var selTxt = $(this).text();
        $('#relationship a').text(selTxt);
        $('#relationship ul').hide();
    });
    $('#emit').on('click',function(){
        $('input').removeAttr('disabled');
    });
    $('#keep').on('click',function(){
        $('.input').attr('disabled','disabled');
        if ($('.input').value=""){
            alert("不能有空白");
        }
    });
    $(document).ready(function(){
        $.ajax({
            type:"post",
            url:"http://101.201.154.205:9090/fm/fmList",
            data: {
                t: Math.random()
            },
            dataType: 'jsonp',
            'jsonp': 'callback'
        }).then(function(res){
            for (var i=0; i<res.length; i++) {
                $('#stu_name').attr('value',res[i].stu_name);
                $('#family_phone').attr('value',res[i].family_phone);
                $('#zip_code').attr('value',res[i].zip_code);
                $('#flocation_id').attr('value',res[i].flocation_id);
                $('#pcs').attr('value',res[i].pcs);
                $('#province').attr('value',res[i].province);
                $('#city').attr('value',res[i].city);
                $('#county').attr('value',res[i].county);
                $('#deatil_address').attr('value',res[i].deatil_address);
            }
        },function(){
            console.log('error');
        });
    });
</script>
</body>
</html>