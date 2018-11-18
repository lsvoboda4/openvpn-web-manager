<?php
if (empty($_POST))
die('
<h1> Create new OpenVPN user</h1>
<form method="POST" action="index.php">
<input type="text" name="user" placeholder="Username">
<input type="submit" value="Submit">
</form>
<h1> Download an existing certificate file</h1>
<form method="GET" action="ovpns/index.php">
<input type="text" name="d" placeholder="Username">
<input type="submit" value="Download">
</form>
');
$user = $_POST['user'];
shell_exec("bash create-user.sh $user");

?>
<h1> User was created</h1>
Download configuration file <a href="ovpns/?d=<?php echo $user; ?>">here</a>

