<?php
require_once "config.php";

echo "<h1>Hello From Docker</h1><br><br>";

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 40px; }
    </style>
</head>
<body>
<a href="register.php">Register</a><br><br>
<form>
  <legend><h2>Log In</h2></legend>
  <label for="fname">username:</label><br>
  <input type="text" id="fname" name="fname" autocomplete="off" required><br>
  <label for="lname">password:</label><br>
  <input type="password" id="lname" name="lname" autocomplete="off" required><br><br>
  <input type="submit" class="btn btn-primary" value="Login">
</form>
<hr>


<?php
$result = $mysqli->query("SELECT * FROM users");
//$sql = "INSERT INTO user (name, username) VALUES('Bob McTavish', 'bobmc')";
//$result = $mysqli->query($sql);

$sql = 'SELECT * FROM user';

if ($result = $mysqli->query($sql)) {
  while($data = $result->fetch_object()){
    $users[] = $data;
  }
}

foreach ($users as $user) {
  echo "<br>";
  echo $user->name . " " . $user->username;
  echo "<br>";
}
?>
</body>
</html>
