<html>
<input type="button" id="tex_button" onclick = "location.href='history.tex'" value="Сохранить как tex файл">
<input type="button" id="pdf_button" onclick = "savepdf()" value="Сохранить как pdf">
<input type="button" id="back_button" onclick = "history.back()" value="Назад">
<?php
	header('Content-Type: text/html; charset=utf-8');
	echo "<body>";
	echo "<br/>История запросов>> <br/><pre><code>";
	$res = file_get_contents('history.txt');
	echo $res;
	echo "</code></pre></body>";
?>
<input type="button" id="tex_button" onclick = "location.href='history.tex'" value="Сохранить как tex файл">
<input type="button" id="pdf_button" onclick = "savepdf()" value="Сохранить как pdf">
<input type="button" id="back_button" onclick = "history.back()" value="Назад">
<script language=JavaScript>
function savepdf() {
	link = 'http://178.62.13.231/GiveMePDF.php?from=http://tester01.nx0.ru/Pshavr/history.tex&name=Pshavr';
	document.location.href=link;
}
</script>
</html> 