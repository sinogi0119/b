<?php
session_start();
session_destroy();
?>
<script>
    alert("ログアウトしました。");
    location.replace('index.php');
</script>