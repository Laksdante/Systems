// this is an example of the get method 

<?php 
    if(isset($_GET["name"]) || isset($_GET["age"])) {
        echo "Hi ". $_GET['name']. "<br/>";
        echo "Your age is". $_GET['age']. " years";
        exit();

    }
    ?>
    <!DOCTYPE html>
    <body>
        <form action="<?php $PHP_SELF ?>" method="get">
        Name: <input type="text" name="name" >
        Age: <input type="text" name="age">
        <input type="submit">
        </form>
    </body>
    </html>