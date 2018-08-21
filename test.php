 <?php 
   
 ?>
	<div class="show">
	<div style="margin:auto;width:800px;margin-top:7.4%;">
	<?php 
 $conn= mysqli_connect("localhost", "root", "") or die ("check your server connection.");
mysqli_select_db($conn,"secondary");
 $sql = "SELECT * FROM quizsetup"; 
 $result = mysqli_query($conn, $sql); 
 if (mysqli_num_rows($result) > 0)
  { $Row = (mysqli_fetch_assoc($result));
   $th = $Row['endt'];
    } 
 //echo $th;
 ?>
	<script type="text/javascript">
	function cdtd(){
			var _DateFromDBProgEndDate = '<?php echo "$th";?>';
			var exam = new Date(_DateFromDBProgEndDate);
			////var exam = new Date("Oct 15, 2017 00:00:00");
			var now = new Date();
			var timDiff = exam.getTime() - now.getTime();
			if (timDiff <= 0){
				clearTimeout(timer);
				document.write("Registration Close");
				//window.location="registrationclose.php";
				//Run all code needed here
			}
			var seconds = Math.floor(timDiff/1000);
			var minutes = Math.floor(seconds/60);
			var hours = Math.floor(minutes/60);
			var days = Math.floor(hours/24);
			hours %= 24;
			minutes %=60;
			seconds %=60;
			
			document.getElementById("Daysbox").innerHTML=days;
			document.getElementById("Hoursbox").innerHTML=hours;
			document.getElementById("Minsbox").innerHTML=minutes;
			document.getElementById("Secsbox").innerHTML=seconds;
			
			var timer = setTimeout('cdtd()',1000);
		}
	
</script>
<div style='margin:0px auto;width:350px;margin-top:0%;'>
		<table align='center' width='390;' style='background:white;'>
		<tr class='info'>
			<td colspan='4' style='font-size:15px;color:red;'>REMAINING DAYS FOR REGISTRATION TO CLOSE!!</td>
		</tr>
		<tr class='infon'>
				<th><div class='time' id='Daysbox'></div></th>
				<th><div class='time' id='Hoursbox'></div></th>
				<th><div class='time' id='Minsbox'></div></th>
				<th><div class='time' id='Secsbox'></div></th>
			</tr>
			<tr class='infon'>
				<td>DAYS</td>
				<td>HOURS</td>
				<td>MINUTES</td>
				<td>SECONDS</td>
			</tr>
			
			<script type='text/javascript'>cdtd();</script>
		</table>

	</div>