<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>文件夹操作</title>
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
    <link rel="stylesheet" href="css/fileinput.css" />
    <link rel="stylesheet" href="css/tooltips.css" />
    <link rel="stylesheet" href="css/folder.css" />
    <link rel="stylesheet" href="css/simplepop.min.css" />
    <link rel="stylesheet" href="css/k-all.css">
    <link rel="stylesheet" href="css/upload.css">
    <link rel="stylesheet" href="css/lp.css">
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/database.js"></script>
    <script src="js/dblist.js"></script>
    <script src="js/simplepop.min.js"></script>
    <script src="js/jquery.contextmenu.r2.js"></script>
    <script src="js/folder.js"></script>
    <script src="js/FileUpload.js"></script>
    <script src="js/jquery.pure.tooltips.js"></script>
    <script src="js/k.js"></script>
    <script type="text/javascript">
    $(function(){
        //初始化
        var id = "1";
        init(id, 0);
        $("input").FileInput();
        textarea_bind();
    });
    </script>
    </head>
<body>
	<div class="navigation-bar">
		<div class="forward-backward">
			<button type="button" class="backward flipy-y btn-xs k-btn btn"
				title="后退"></button>
			<button type="button" class="forward btn-xs k-btn btn" title="前进"></button>
		</div>
		<button type="button" title="返回根目录" class="btn_head">返回根目录</button>
		<button type="button" title="返回上级目录" class="btn_head">返回上级目录</button>
		<div class="folder-navigation" id="folder-navigation"></div>
		<input type="text" class="navigation" id="navigation" style="display: none;">
	</div>
	<hr>
	<div class="alldom div_body" id="all_folder">
		<ul id="divall"></ul>
	</div>
	<hr>
	<div class="div_foot">
        <div class="info-bar" id="info-bar"></div>
        <div style="clear: both;"></div>
        <div class="panel k-popup" id="M8610P001" style="width: 450px;">
            <div class="panel-heading">修改文件名</div>
            <div class="panel-body">
                <form class="k-form col2" id="M8610F001">
                    <div class="k-field hide">
                        <label class="k-field-label">id</label> <input type="text"
                                                                       class="form-control k-field-text" name="id" />
                    </div>
                    <div class="k-field hide">
                        <label class="k-field-label">是否是文件夹</label> <input type="text"
                                                                           class="form-control k-field-text" name="is_directory" />
                    </div>
                    <div class="k-field hide">
                        <label class="k-field-label">文件类型</label> <input type="text"
                                                                         class="form-control k-field-text" name="doc_type" />
                    </div>
                    <div class="k-field hide">
                        <label class="k-field-label">父目录</label> <input type="text"
                                                                        class="form-control k-field-text" name="parent_id" />
                    </div>
                    <div class="k-field hide">
                        <label class="k-field-label">描述</label> <input type="text"
                                                                       class="form-control k-field-text" name="description" />
                    </div>
                    <div class="k-field">
                        <label class="k-field-label">新文件名</label> <input type="text"
                                                                         class="form-control k-field-text" name="folder_name"
                                                                         data-max-length="50" />
                    </div>
                </form>
            </div>
            <div class="panel-footer text-center">
                <button type="button"
                        class="btn btn-success btn-icon icon-submit k-btn btn-sm"
                        data-from="#M8610F001" data-param-handler="update_folder_name"
                        data-descript="修改文件名称">确定</button>
                <button type="button" class="btn btn-default k-popup-close">取消</button>
            </div>
        </div>
        <!-- 	上传文档 -->
        <div class="panel k-popup" id="M8610P002" style="width: 900px;">
            <div class="panel-heading">文档上传</div>
            <div class="panel-body">
                <form name="" class="k-form col2" id="M8610F002"
                      action="manageDocUpload.action" enctype="multipart/form-data"
                      method="post" style="overflow-y: scroll;max-height: 400px;max-width:890px;" >
                    <div class="k-field" style="display: none;">
                        <label class="k-field-label">id</label> <input type="text"
                                                                       class="form-control k-field-text" name="id" id="upload_id" />
                    </div>

                    <div class="k-field">
                        <label class="k-field-label">文件</label> <input type="file" multiple
                                                                       class="form-control" name="need_appendix" id="need_appendix"/>
                    </div>

                    <fieldset class="single-fieldset works-fieldset">
                        <legend class="work-legend">作品信息</legend>
                        <div>
                            <label class="my-label">标题:</label>
                            <input class="my-input" type="text" id="work_title" name="work_title" placeholder="请输入作品标题" maxlength="16"/>
                        </div>
                        <div>
                            <label class="my-textarea-label">描述:</label>
                            <textarea class="my-textarea" id="work_desc" name="work_desc" placeholder="请输入作品描述" maxlength="100"></textarea>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="panel-footer text-center">
                <button type="button"
                        class="btn btn-success btn-icon icon-submit k-btn btn-sm"
                        data-from="#M8610F002" data-param-handler="uploadFile"
                        data-descript="上传文件">提交</button>
                <button type="button" class="btn btn-default k-popup-close">取消</button>
            </div>
        </div>
        <!-- 下载 -->
        <div class="panel k-popup" id="M8610P003">
            <div class="panel-heading" id="title">下载目录/文档</div>
            <div class="panel-body">
                <form id="M8610F003" class="k-form col2"
                      action="downloadDocManage2.action" enctype="multipart/form-data"
                      method="POST">
                    <div class="k-field">
                        <label class="k-field-label">目录/文档</label> <input type="text"
                                                                          class="form-control k-field-text" name="folder_name" id="f_name" />
                    </div>
                    <div class="k-field">
                        <label class="k-field-label">父目录ID</label> <input type="text"
                                                                          class="form-control k-field-text" name="parent_id" id="p_id">
                    </div>
                    <div class="k-field">
                        <label class="k-field-label">ID</label> <input type="text"
                                                                       class="form-control k-field-text" name="id" id="_id">
                    </div>
                    <div class="k-field">
                        <label class="k-field-label">是否是目录</label> <input type="text"
                                                                          class="form-control k-field-text" name="is_directory"
                                                                          id="i_directory">
                    </div>
                </form>
            </div>
        </div>
        <!-- 在空白部分右键的菜单 -->
        <div class="contextMenu" id="myMenu1">
            <ul>
                <li id="newfolder">新文件夹</li>
                <!-- <li id="paste">黏贴</li> -->
                <li id="flush">刷新</li>
                <li id="sort">排序</li>
                <li id="upload">上传作品</li>
            </ul>
        </div>
        <!-- 在文件夹上右键菜单 -->
        <div class="contextMenu" id="myMenu2">
            <ul>
                <li id="open">打开</li>
                <li id="copy">复制</li>
                <li id="cut">剪切</li>
                <li id="paste">黏贴</li>
                <li id="delete">删除</li>
                <li id="collection">收藏</li>
                <li id="rename">重命名</li>
                <li id="download">打包下载</li>
            </ul>
        </div>
        <!-- 在文件上面右键菜单 -->
        <div class="contextMenu" id="myMenu3">
            <ul>
                <li id="download">下载</li>
                <li id="copy">复制</li>
                <li id="cut">剪切</li>
                <li id="rename">重命名</li>
                <li id="delete">删除</li>
            </ul>
        </div>
    </div>
</body>
</html>