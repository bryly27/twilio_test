<?php  
	
	header('Content-type: text/xml');
?>
<?xml version="1.0" encoding="UTF-8"?>;
	<Response>
		<Gather action='process.php' numDigits='1'>
			<Say>Welcome to Bryant's test Number</Say>
			<Say>If you are cool, press 1</Say>
			<Say>If you are hot, press 2</Say>
			<Say>If you are warm, press 3</Say>
		</Gather>

		<Say>Sorry, I didn't get your response</Say>
		<redirect>test.php</redirect>
	</Response>
