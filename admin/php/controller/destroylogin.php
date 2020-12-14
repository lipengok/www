<?php
setcookie('adminname',"",time()-3600,'/');
setcookie('adminpsw',"",time()-3600,'/');
echo <<<eof
<script>
window.location.href="/admin";
</script>
eof;
