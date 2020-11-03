## Solution
Eine Lösung die Sicherheitslücke zu schließen ist Formulare per HTTP-POST zu senden und validieren, die Variablen zu filtern oder CSRF-Tokens zu verwenden.

```shell
php -S localhost:8123
```

http://localhost:8123/welcome_get.php?name=Dennis&email=%3Cscript%20type%3D%22text%2Fjavascript%22%3Ealert%28%22XSS%22%29%3B%3C%2Fscript%3E
