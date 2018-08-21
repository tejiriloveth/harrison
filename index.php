<?php
session_start();
?>
<div id="response"></div>
<script type="text/javascript">
	setInterval (function()
	 {
		var xmhttp= new XMLHttpRequest();
		xmhttp.open("GET","response.php",false);
		xmhttp.send(null);
		document.getElementById("response").innerHTML=xmhttp.responseText;
	},1000);

function disable_f5(e)
{
  if ((e.which || e.keyCode) == 116)
  {
      e.preventDefault();
  }
}

$(document).ready(function(){
    $(document).bind("keydown", disable_f5);    
});
</script>