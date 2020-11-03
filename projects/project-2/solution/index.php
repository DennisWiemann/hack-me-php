<form name="" action="" method="GET">
<input type="text" name="inhalt" />
<input type="Submit" value="speichern" />
</form>

<?php
$inhalt = htmlentities ($_GET['inhalt']);
$handle = fopen ( "gaestebuch.txt", "a" );
fwrite ( $handle, $inhalt . "<hr>\n" );
fclose ( $handle );

echo "<h2>Einträge Gästebuch</h2>";
readfile ("gaestebuch.txt");
?>