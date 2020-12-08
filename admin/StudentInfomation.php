<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/StudentInformation.css"/>
    <style type="text/css">
        .add{
            width: 100px;
            background:dodgerblue;
            color: whitesmoke;
            font-weight: bolder;
        }
        .right{
            float: right;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="bx">
            <form action="php/controller/insertrecord.php" method="get">
                <div class="box">
                    <div class="top">
                        <div class="left">当前位置>档案信息</div>
                        <div class="right">
                            <span id="emit" class="l" style="margin-right: 20px">编辑</span>
                            <span id="keep" class="r" style="cursor: pointer;">保存</span>
                        </div>
                    </div>
                    <div class="content">
                        <div class="left">
                            <i class="column"></i>
                            <span class="tit">档案关系</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="one">
                            <div class="left">
                                <span>代理类型：</span>
                                <input type="text" name="agency_type" placeholder="代理类型"/>
                            </div>
                            <div class="right">
                                <span>有无组织关系：</span>
                                <select name="have_collection" id="">
                                    <option value="有">有</option>
                                    <option value="无">无</option>
                                </select>
                            </div>
                        </div>
                        <div class="one">
                            <div class="left">
                                <span>人才代理标志：</span>
                                <input type="text" name="agency_loge" placeholder="人才代理标志"/>
                            </div>
                            <div class="right">
                                <span>灵活合同标志：</span>
                                <input type="text" name="doc_logo" placeholder="灵活合同标志"/>
                            </div>
                        </div>
                        <div class="one">
                            <div class="left">
                                <span>灵活合同单位名称：</span>
                                <input type="text" name="doc_name"  placeholder="灵活合同单位名称"/>
                            </div>
                            <div class="right">
                                <span>学生名字：</span>
                                <input type="text" name="student_name" placeholder="学生名字"/>
                            </div>
                        </div>
                        <div class="one">
                            <div class="right">
                                <span>确认信息后添加</span>
                                <input class="add" type="submit" value="添加"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#emit').on('click',function(){
        $('input').removeAttr('disabled');
    });
    $('#keep').on('click',function(){
        $('input').attr('disabled','disabled');
    });
</script>
</body>
</html>
