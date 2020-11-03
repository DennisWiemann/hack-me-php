<html>
<body>
<?php $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING); ?>
<?php $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING); ?>
Welcome <?php echo $name; ?><br>
Your email address is: <?php echo $email ?>

</body>
</html>