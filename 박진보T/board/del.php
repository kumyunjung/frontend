<?php
include "db.php";

$bno = $_GET['idx'];


$sql=mq("delete from board where idx='".$bno."'");?>



<script>
alert("삭제되었습니다.");
location.href="list.php";
</script>