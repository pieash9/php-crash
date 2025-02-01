<?php

session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'pieash' && $password == '1234'){
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    }else{
        echo "Incorrect Login";
    }
}


?>


<form action="<?php echo htmlspecialchars(
  $_SERVER['PHP_SELF']
); ?>" method="POST">
<div>
  <label>UserName: </label>
  <input type="text" name="username">
</div>
<br>
<!-- <?php echo $email; ?> -->
<div>
<label for="password">Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>