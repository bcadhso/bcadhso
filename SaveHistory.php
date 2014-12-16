<?php
	header('Content-Type: text/html; charset=utf-8');
	$my_request = $_GET["request"];
	$my_request = substr($my_request,1,strlen($my_request) - 2);//убрал кавычки
	$my_request = str_replace(" ", "+", $my_request);
	//echo $my_request;
	$f = fopen('history.txt', 'a');
	fwrite($f,$my_request.PHP_EOL);
	fclose($f);
	$my_request = $_GET["tex"];
	$my_request = substr($my_request,1,strlen($my_request) - 2);//убрал кавычки
	$my_request = str_replace(" ", "+", $my_request);
	//echo $my_request;
	$my_request='$'.$my_request.'$';
	$f = fopen('tex_shapka.tex', 'a');//открыл tex
	fwrite($f,$my_request.PHP_EOL);
	fwrite($f,'\\newline'.PHP_EOL);
	fclose($f);
	exec("cp tex_shapka.tex history.tex");//замена
	$f = fopen('history.tex', 'a');
	fwrite($f,"\\end{document}".PHP_EOL);
	fclose($f);
	header('Location: index.html');
?>
