<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $blogID = $_GET['blogID'];
    $blogID = $connect -> real_escape_string($blogID);
    $sql = "DELETE FROM blog WHERE blogID = {$blogID}";
    $connect -> query($sql);
?>
<script>
    location.href = "blog.php";
</script>