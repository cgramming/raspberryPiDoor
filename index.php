
<?php //echo " :) ";

     //    system("gpio -g mode 0 out");
        // system("gpio -g write 17 1");
      //   system("gpio -g write 17 1");
?>
<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>
<body>
<button type="button" onclick="LED_On()">LED On</button>
<button type="button" onclick="LED_Off()">LED Off</button>
<button type="button" onclick="Motor_start()">Motor Start</button>
<button type="button" onclick="Motor_Back()">Motor Back</button>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
function LED_On(){
    $.ajax({
        url:"LED_On.php",
        type:"GET",
        data:"on"
    });
}
function LED_Off(){
	$.ajax({
	 url:"LED_On.php",
	type:"GET",
	data:"off"
	});
}
function Motor_start(){
	$.ajax({
	url: "motorx.php",
	typ: "GET",
	data:"Motor Start"
	});
}
function Motor_Back(){
    $.ajax({
        url:"motorxback.php",
        type:"GET",
        data:"Motor Back"
    });
}

</script>
</body>
</html>
