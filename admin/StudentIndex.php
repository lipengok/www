<?php
if ($_COOKIE['adminname']==null||$_COOKIE['adminpsw']==null){
    echo <<<eof
<script>
alert("请先登录！");
window.location.href="/admin";
</script>
eof;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			frame{
				height: 2000px;
			}
		</style>
	</head>
	<frameset frameborder="0" rows="60,*">
		<frame src="StudentCeil.php" noresize="noresize" scrolling="no" />
		<frameset frameborder="0" cols="210,*">
			<frame src="StudentLfter.php" noresize="noresize" scrolling="no" />
			<frame noresize="noresize" scrolling="yes" name="main" />
			<!-- <frame noresize="noresize" scrolling="no" name="main"  src="首页.html"/> -->
		</frameset>
	</frameset>
</html>
