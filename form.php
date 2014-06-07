<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','5mediaphotography@gmail.com');
	define('MESSAGE_SUBJECT','Email From 5 Media');
	define('REPLY_TO', 'chuckobaze@gmail.com');
	define('FROM_ADDRESS', 'obazechuck@gmail.com');
	define('REDIRECT_URL', 'http://google.com/');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab 7 Form</title>
<style>
	label
	{
		width:70px;
		display: inline-block;
		text-align: right;
	}
	
	textarea
	{
		vertical-align: top;
		cursor: se-resize;	
	}
	
	fieldset
	{
		padding: 1em;	
	}
	
	form
	{
		width: 30em;	
	}
	
	legend
	{
		border: red;
	}
	
	.error
	{
		color: aqua;
	}
	
	.summit
	{
		background-color: red;
		color: white;
		font-family: sans-serif;
		font-weight: bold;
	}
	
</style>
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<fieldset>
			<legend>Contact</legend>
			<p>
			<label for="name">Name:</label>
			<input type="text" name="name" placeholder="John Doe" value="<?php echo $name; ?>" class="required"/>
			<?php echo $name_error; ?>
			</p>
			
			<p>
			<label for="email">Email:</label>
			<input type="email" name="email" placeholder="test@test.com" value="<?php echo $email; ?>" class="required"/>
			<?php echo $email_error; ?>
			</p>
			
			<p>
			<label for="message">Message: </label>
			<textarea name="message" rows="8" cols="45" placeholder="Type Your Message Here" class="required"><?php echo $message; ?></textarea>
			<?php echo $message_error; ?>
			</p>
			
			<p>
			<input class="summit" type="submit" name="submitted" value="CONTACT US NOW" />
			</p>
		</fieldset>
	</form>

</body>


</html>