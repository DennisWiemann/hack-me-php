## Stored XSS
[zur Lösung](solution/readme.md)  
Stored XSS Sicherheitslücken erlauben es einem Angreifer Scripte innerhalb von persistenten Variablen zu speichern.
Dabei gibt es Angreifer z.B. seinen Namen + Script-Tag in das Benutzernamen Feld ein. Dadurch wird jedes mal wenn sein Name erscheint(die variable geladen un angezeigt wird) das Angreifer-Script ausgeführt.


```shell
php -S localhost:8123
```

http://localhost:8123/welcome_get.php?name=Dennis&email=%3Cscript%20type%3D%22text%2Fjavascript%22%3Ealert%28%22XSS%22%29%3B%3C%2Fscript%3E
