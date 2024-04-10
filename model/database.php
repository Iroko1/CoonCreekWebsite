
<?php
$dsn = "mysql:host=localhost;dbname=CoonCreek";
        $username = "root";
        $password = "";
        
        try{
        $db = new PDO($dsn, $username, $password);
        echo('connected');
        }
        catch(PDOException $e)
        {
            echo("didn't work");
        } 

        ?>