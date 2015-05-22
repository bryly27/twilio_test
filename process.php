<?php  
	header('Content-type: text/xml');
?>

<?xml version="1.0" encoding="UTF-8"?>;

<?php  
	
			$user_pushed = (int) $_REQUEST['Digits'];

			if($user_pushed === 1)
			{ ?>
				<say>You are cool</say>
<?php	}
			elseif($user_pushed === 2)
			{ ?>
				<say>You are hot</say>
<?php	}
			elseif($user_pushed === 3)
			{ ?>
				<say>You are warm</say>
<?php	}
			else
			{ ?>
				<say>please enter a valid number</say>
				<redirect>test.php</redirect>
<?php	} ?>