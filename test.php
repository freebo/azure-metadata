<?php
exec("pgrep stress", $output, $return);
if ($return == 0) {
	$stressed = "yes";
}
else {
	$stressed = "no";
}

?>


<html>
    <style type="text/css" media="all">@import "css/master.css";</style>
<head>
<title>Button Writer</title>
<script type='text/javascript' src='//code.jquery.com/jquery-1.10.1.js'></script>
</head>

<body>
<div class="onoffswitch">
					<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch";" 
						<?php if($stressed == 'yes') echo 'checked="checked"';?> >
    					<label class="onoffswitch-label" for="myonoffswitch">
        				<span class="onoffswitch-inner"></span>
        				<span class="onoffswitch-switch"></span>
    					</label>
				</div>
</body>
<script type='text/javascript'>
$('#myonoffswitch').click(function(){
 $.ajax({
 type: "POST",
 url: "stress.php",
 data: ""

 });
}); 
</script>
</html>