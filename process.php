<?php  
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<Response>
<?php  
	
			$user_pushed = (int) $_REQUEST['Digits'];

			if($user_pushed === 1)
			{ ?>
				<Say>You are cool</Say>
<?php	}
			elseif($user_pushed === 2)
			{ ?>
				<Say>You are hot</Say>
<?php	}
			elseif($user_pushed === 3)
			{ ?>
				<Say>You are warm</Say>
<?php	}
			else
			{ ?>
				<Say>please enter a valid number</Say>
				<Redirect>test.php</Redirect>
<?php	} ?>
</Response>