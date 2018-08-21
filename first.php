<?php
session_start();
include 'db.php';
date_default_timezone_set("africa/lagos");
$duration="";
$res=mysqli_query($con,"SELECT * FROM durations");
while ($row=mysqli_fetch_array($res)) {
	$duration=$row["duration"];
}
echo $duration;
$_SESSION["duration"]=$duration;
$_SESSION["start_time"]=date("Y-m-d H:i:s");
$end_time=$end_time=date('Y-m-d H:i:s',strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["start_time"])));
$_SESSION["end_time"]=$end_time;
?>
<script type="text/javascript">
	window.location="index.php";
</script>