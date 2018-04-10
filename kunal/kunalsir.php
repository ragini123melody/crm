<?php
$cookie_name = "user";
$cookie_value[] = "ragini";
setcookie($cookie_name, $cookie_value[], time() + (86400), "/"); // 86400 = 1 day
?>
<html>
<body>
	
<pre>
<?php
print_r($_COOKIE);
?>
</pre>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}



$host = 'localhost';
if($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
echo '<br>'.'online!';
fclose($socket);
} else {
echo '<br>'.'offline.';
}
?>

</body>

</html>