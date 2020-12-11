<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/FamilyInformation.css">
    <style type="text/css">
        #add{
            width: 100px;
            height: 30px;
            border: 1px solid lightblue;
            background:dodgerblue;
            color: whitesmoke;
            font-weight: bolder;
        }
        #div_sub{
            float: left;
            background: whitesmoke;
        }
    </style>
    <script src="js/jquery-1.9.1.min.js"></script>
</head>
<body>
<form action="php/controller/inserthome.php" method="get">
    <div class="container">
        <div class="content">
            <div class="header clearfix">
                <div class="top fl">当前位置>家庭信息</div>
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
                </div>
                <!--操作信息-->
                <div class="BasicInformation">
                    <div class="title">
                        操作选项
                    </div>
                </div>
                <div class="content clearfix">
                    <div id="div_sub">
                        <label>确认信息后点击添加：</label>
                        <input id="add" type="submit" value="添加">
                    </div>
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