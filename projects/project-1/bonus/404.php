<html>
    <head>
<style>
html{ 
    text-size: "expression(alert('XSS'))";
     }
</style>

    </head>
<body>
<?php
print "Not found: " . urldecode($_SERVER["REQUEST_URI"]);
?>
<input type="text" name="fname" value="<?= $_GET["name"] ?>">
</body>
</html>
