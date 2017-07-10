<html>
<?php
$pageName='Register';
include('header.php');
?>
<h1>Register</h1>



<form action="register_post.php" method="post">
Name: <input type="text" name="name"><br>
Password: <input type="password" name="pass"><br>
<input type="submit">
</form>

<?php
include('footer.php');
?>
</html>