<?php

include 'converter.php';

?> 


<html>
<head>
<title>Temperature Conversion</title>
<link rel="stylesheet" href="assets/style.css" /> 
</head>

	<body>
		<div class="container" />
		<form action = "" method ="post">
			<h4>Celcius & Fahrenheit Temp Conversion</h4>
				Degrees:
				<input type="text" name="degree" size="4" />
				<select name="scale"> <option value="celsius">Celsius</option>
				<option value="fahrenheit">Fahrenheit</option>
				</select>				
				<p>
					<input type="Submit" name="submit" />
				</p>
		</form>
        <p><?php echo (isset($output)) ? $output : $empty; ?></p>
        
		</div>
	
	</body>
</html>



