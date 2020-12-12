<?php
setcookie('username','',time()-3600,'/');
setcookie('psw','',time()-3600,'/');
echo <<<eof
<script>
window.location.href="/index.html";
</script>
eof;
