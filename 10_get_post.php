<?php







if(isset($_POST["submit"])){
echo $_POST['name'];
echo "<br/>";
echo $_POST['age'];
echo "<br/>";
}


?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=pieash Ahmed&age=40" >Click Here</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="">
        <label for="name">Name</label>
        <input type="text" name="name"/>
    </div>
    <div class="">
        <label for="age">Age</label>
        <input type="text" name="age"/>
    </div>
    <input type="submit" value="submit"/>
</form>