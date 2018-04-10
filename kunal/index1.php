<?php
if (isset($_POST['submit'])) {
			$cookie_name = $_POST['name'];
			$cookie_value = $_POST['age'];
			setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day
			if(!isset($_COOKIE[$cookie_name])) {
			    echo "Cookie named '" . $cookie_name . "' is not set!";
			} else {
			    echo "Cookie '" . $cookie_name . "' is set!<br>";
			    echo "Value is: " . $_COOKIE[$cookie_name];
			}
}

?>
<html>
<body>

</body>
</html>