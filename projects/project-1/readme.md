## Reflected XXS
[zur Lösung](solution/readme.md)  
Reflected XXS Sicherheitslücken werden meist durch normale Anfragen, die per HTML-GET entgegengenommen werden eingeschleust. Dabei wird dem Opfer ein Link zugespielt, indem der Script-Tag als Parameter übergeben wird und darauffolged beim Opfer ausgeführt wird. 

```shell
php -S localhost:8123
```

http://localhost:8123/welcome_get.php?name=Dennis&email=%3Cscript%20type%3D%22text%2Fjavascript%22%3Ealert%28%22XSS%22%29%3B%3C%2Fscript%3E
