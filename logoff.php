<?php
setcookie("username",'',time()-3600);
setcookie("usertype",'',time()-3600);
echo"<script>location.href='index.php'</script>";
?>