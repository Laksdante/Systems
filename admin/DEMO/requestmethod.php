// this is an exapmle of the request method 

<?php
    if(isset($_REQUEST["name"]) && isset(($_REQUEST["age"]))) {
        echo "Hi ", $_REQUEST['name']. "<br/>";
        echo "Your age is ". $_REQUEST['age']. "years";
        exit();
    }
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="post">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <input type="submit">
    </form>
    </body>
</html>