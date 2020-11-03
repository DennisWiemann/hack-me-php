## Solution
Eine Lösung diese Sicherheitslücke zu schließen ist es die Daten nach der eingabe, also vor dem speichern zu validieren oder bei der Ausabe zu Filtern.


Enteferne die HTML Tags/ Zeichenketten aus der URL mit `htmlentities ($_GET['inhalt'])` alternative `strip_tags ($_GET['inhalt'])`

```shell
php -S localhost:8123
```

http://localhost:8123/welcome_get.php?name=Dennis&email=%3Cscript%20type%3D%22text%2Fjavascript%22%3Ealert%28%22XSS%22%29%3B%3C%2Fscript%3E
