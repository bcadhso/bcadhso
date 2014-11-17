<?php
	$f = fopen('history.txt','a');
	$myrequest = $_GET["request"]
	$my_request = str_replace(" ", "+", $my_request);
	fwrite($f,$my_request."/n");
	fclose($f);



	function f() 
	{
		link = 'myserver.ru/hist.php?request="' +...+ '"';
		window.location.href=link;
	
		<a href="myserver.ru/showhist.php">История</a>
		<input type='button' value='Сохранить' onclick = "f()"/>
	}
?>